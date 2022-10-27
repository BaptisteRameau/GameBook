<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Livewire\Component;

class PopularGames extends Component
{
    public $popularGames = [];

    public function loadPopularGames()
    {
        $before = Carbon::now()->subMonth(3)->timestamp;
        $after = Carbon::now()->addMonth(3)->timestamp;

        $popularGamesUnformatted = Cache::remember('popular-games', 7, function () use ($before, $after) {
            sleep(1);

            return Http::withHeaders([
                'Client-ID' => env('IGDB_CLIENT_ID'),
                'Authorization' => 'Bearer '.env('IGDB_ACCESS_TOKEN'),
            ])
            ->withBody("
                fields name, cover.url, first_release_date, platforms.abbreviation, rating, slug, aggregated_rating;
                where cover != null & first_release_date != null
                & platforms = (48,49,130,6)
                & (first_release_date >= {$before}
                & first_release_date < {$after});
                sort aggregated_rating desc;
                limit 12;
            ", 'text/plain')
            ->post('https://api.igdb.com/v4/games')->json();
        });

        $this->popularGames = $this->formatForView($popularGamesUnformatted);
    }

    public function render()
    {
        return view('livewire.popular-games');
    }

    public function formatForView($games)
    {
        return collect($games)->map(function ($game) {
            return collect($game)->merge([
                'coverImageUrl' => isset($game['cover']) ? Str::replaceFirst('thumb', 'cover_big', $game['cover']['url']) : null,
                'aggregated_rating' => isset($game['aggregated_rating']) ? round($game['aggregated_rating']).'%' : null,
                'platforms' => isset($game['platforms']) ? collect($game['platforms'])->pluck('abbreviation')->implode(', ') : null,
            ]);
        })->toArray();
    }
}
