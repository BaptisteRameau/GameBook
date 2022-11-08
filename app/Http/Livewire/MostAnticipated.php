<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Livewire\Component;

class MostAnticipated extends Component
{
    public $mostAnticipated = [];

    public function loadMostAnticipated()
    {
        $before = Carbon::now()->subMonth(3)->timestamp;
        $after4month = Carbon::now()->addMonth(4)->timestamp;

        $mostAnticipatedUnformatted = Cache::remember('most-anticipated', 7, function () use ($before, $after4month) {
            sleep(1);

            return Http::withHeaders([
                'Client-ID' => env('IGDB_CLIENT_ID'),
                'Authorization' => 'Bearer '.env('IGDB_ACCESS_TOKEN'),
            ])
            ->withBody("
            fields name, cover.url, first_release_date, rating_count, slug;
            where platforms = (48,49,130,6)
            & (first_release_date >= {$before}
            & first_release_date < {$after4month}
            & rating_count > 0);
            sort rating_count desc;
            limit 4;
        ", 'text/plain')
            ->post('https://api.igdb.com/v4/games')->json();
        });

        $this->mostAnticipated = $this->formatForView($mostAnticipatedUnformatted);
    }

    public function render()
    {
        return view('livewire.most-anticipated');
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
