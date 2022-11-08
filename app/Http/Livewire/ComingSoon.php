<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Livewire\Component;

class ComingSoon extends Component
{
    public $comingSoon = [];

    public function loadComingSoon()
    {
        $current = Carbon::now()->timestamp;

        $comingSoonUnformatted = Cache::remember('coming-soon', 7, function () use ($current) {
            sleep(1);

            return Http::withHeaders([
                'Client-ID' => env('IGDB_CLIENT_ID'),
                'Authorization' => 'Bearer '.env('IGDB_ACCESS_TOKEN'),
            ])
            ->withBody("
            fields name, cover.url, first_release_date, platforms.abbreviation, rating, rating_count, summary, slug;
            where platforms = (48,49,130,6)
            & first_release_date >= {$current};
            sort first_release_date asc;
            limit 4;
        ", 'text/plain')
            ->post('https://api.igdb.com/v4/games')->json();
        });

        $this->comingSoon = $this->formatForView($comingSoonUnformatted);
    }

    public function render()
    {
        return view('livewire.coming-soon');
    }

    public function formatForView($games)
    {
        return collect($games)->map(function ($game) {
            return collect($game)->merge([
                'coverImageUrl' => isset($game['cover']) ? Str::replaceFirst('thumb', 'cover_small', $game['cover']['url']) : null,
                'first_release_date' => Carbon::parse($game['first_release_date'])->format('M d, Y'),
            ]);
        })->toArray();
    }
}
