<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class RecentlyReviewed extends Component
{
    public $recentlyReviewed = [];

    public function loadRecentlyReviewed()
    {
        $before = Carbon::now()->subMonth(3)->timestamp;
        $current = Carbon::now()->timestamp;
        $this->recentlyReviewed = Cache::remember('recently-reviewed', 7, function () use ($before, $current) {
            sleep(1);

            return Http::withHeaders([
                'Client-ID' => env('IGDB_CLIENT_ID'),
                'Authorization' => 'Bearer '.env('IGDB_ACCESS_TOKEN'),
            ])
            ->withBody("
                fields name, cover.url, first_release_date, platforms.abbreviation, rating, rating_count, summary, created_at;
                where platforms = (48,49,130,6)
                & (first_release_date >= {$before}
                & first_release_date < {$current}
                & rating_count > 5);
                sort created_at desc;
                limit 3;
            ", 'text/plain')
            ->post('https://api.igdb.com/v4/games')->json();
        });
    }

    public function render()
    {
        return view('livewire.recently-reviewed');
    }
}
