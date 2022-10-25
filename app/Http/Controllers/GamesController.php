<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $before = Carbon::now()->subMonth(3)->timestamp;
        $current = Carbon::now()->timestamp;
        $after = Carbon::now()->addMonth(3)->timestamp;
        $after4month = Carbon::now()->addMonth(4)->timestamp;

        $popularGames = Http::withHeaders([
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

        $recentlyReviewed = Http::withHeaders([
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

        $mostAnticipated = Http::withHeaders([
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

        $comingSoon = Http::withHeaders([
            'Client-ID' => env('IGDB_CLIENT_ID'),
            'Authorization' => 'Bearer '.env('IGDB_ACCESS_TOKEN'),
        ])
        ->withBody("
            fields name, cover.url, first_release_date, platforms.abbreviation, rating, rating_count, summary;
            where platforms = (48,49,130,6)
            & first_release_date >= {$current};
            sort first_release_date asc;
            limit 4;
        ", 'text/plain')
        ->post('https://api.igdb.com/v4/games')->json();

        return view('index', [
            'popularGames' => $popularGames,
            'recentlyReviewed' => $recentlyReviewed,
            'mostAnticipated' => $mostAnticipated,
            'comingSoon' => $comingSoon,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
