<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class PopularGames extends Component
{
    public $popularGames = [];

    public function loadPopularGames()
    {
        $before = Carbon::now()->subMonth(3)->timestamp;
        $after = Carbon::now()->addMonth(3)->timestamp;

        $this->popularGames = Cache::remember('popular-games', 7, function () use ($before, $after) {
            sleep(1);

            return Http::withHeaders([
                'Client-ID' => env('IGDB_CLIENT_ID'),
                'Authorization' => 'Bearer '.env('IGDB_ACCESS_TOKEN'),
            ])
            ->withBody("
                fields name, cover.url, first_release_date, platforms.abbreviation, rating;
                where cover != null & first_release_date != null
                & platforms = (48,49,130,6)
                & (first_release_date >= {$before}
                & first_release_date < {$after});
                sort rating desc;
                limit 12;
            ", 'text/plain')
            ->post('https://api.igdb.com/v4/games')->json();
        });
    }

    public function render()
    {
        return view('livewire.popular-games');
    }
}
