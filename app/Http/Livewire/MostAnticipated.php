<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class MostAnticipated extends Component
{
    public $mostAnticipated = [];

    public function loadMostAnticipated()
    {
        $before = Carbon::now()->subMonth(3)->timestamp;
        $after4month = Carbon::now()->addMonth(4)->timestamp;

        $this->mostAnticipated = Cache::remember('most-anticipated', 7, function () use ($before, $after4month) {
            sleep(1);

            return Http::withHeaders([
                'Client-ID' => env('IGDB_CLIENT_ID'),
                'Authorization' => 'Bearer '.env('IGDB_ACCESS_TOKEN'),
            ])
            ->withBody("
            fields name, cover.url, first_release_date, rating_count;
            where platforms = (48,49,130,6)
            & (first_release_date >= {$before}
            & first_release_date < {$after4month}
            & rating_count > 0);
            sort rating_count desc;
            limit 4;
        ", 'text/plain')
            ->post('https://api.igdb.com/v4/games')->json();
        });
    }

    public function render()
    {
        return view('livewire.most-anticipated');
    }
}
