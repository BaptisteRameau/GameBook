<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use App\Models\Chirp;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class GamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
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
    public function store(Request $request, $slug): RedirectResponse
    {
        $game = Http::withHeaders([
            'Client-ID' => env('IGDB_CLIENT_ID'),
            'Authorization' => 'Bearer ' . env('IGDB_ACCESS_TOKEN'),
        ])
            ->withBody("
            fields name, cover.url, first_release_date, platforms.abbreviation, rating, slug, involved_companies.company.name, genres.name, aggregated_rating, summary, websites.*,
            videos.*, screenshots.*, similar_games.cover.url, similar_games.name, similar_games.rating, similar_games.platforms.abbreviation, similar_games.slug;
            where slug=\"{$slug}\";
        ", 'text/plain')
            ->post('https://api.igdb.com/v4/games')->json();

        abort_if(!$game, 404);

        $chirp = Chirp::create([
            'user_id' => Auth::id(),
            'game_id' => $game[0]['id'],
            'message' => $request->message
        ]);

        $chirp->save();

        return redirect(route('games.show', $slug));
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $game = Http::withHeaders([
            'Client-ID' => env('IGDB_CLIENT_ID'),
            'Authorization' => 'Bearer ' . env('IGDB_ACCESS_TOKEN'),
        ])
            ->withBody("
            fields name, cover.url, first_release_date, platforms.abbreviation, rating, slug, involved_companies.company.name, genres.name, aggregated_rating, summary, websites.*,
            videos.*, screenshots.*, similar_games.cover.url, similar_games.name, similar_games.rating, similar_games.platforms.abbreviation, similar_games.slug;
            where slug=\"{$slug}\";
        ", 'text/plain')
            ->post('https://api.igdb.com/v4/games')->json();

        abort_if(!$game, 404);

        return view('game', [
            'game' => $this->formatGameForView($game[0]),
            'chirps' => Chirp::with('user')->latest()->where('game_id', $game[0]['id'])->get(),
        ]);
    }

    public function formatGameForView($game)
    {
        $temp = collect($game)->merge([
            'coverImageUrl' => isset($game['cover']) ? Str::replaceFirst('thumb', 'cover_big', $game['cover']['url']) : 'https://via.placeholder.com/264x352',
            'genres' => isset($game['genres']) ? collect($game['genres'])->pluck('name')->implode(', ') : null,
            'involved_companies' => $game['involved_companies'][0]['company']['name'] ?? null,
            'platforms' => isset($game['platforms']) ? collect($game['platforms'])->pluck('abbreviation')->implode(', ') : null,
            'member_rating' => array_key_exists('rating', $game) ? round($game['rating']) . '%' : '-',
            'critic_rating' => array_key_exists('aggregated_rating', $game) ? round($game['aggregated_rating']) . '%' : '-',
            'summary' => isset($game['summary']) ? $game['summary'] : null,
            'trailer' => isset($game['videos']) ? 'https://youtube.com/embed/' . $game['videos'][0]['video_id'] : null,
            'screenshots' => isset($game['screenshots']) ? collect($game['screenshots'])->map(function ($screenshot) {
                return [
                    'huge' => Str::replaceFirst('thumb', 'screenshot_huge', $screenshot['url']),
                    'big' => Str::replaceFirst('thumb', 'screenshot_big', $screenshot['url']),
                    'normal' => Str::replaceFirst('thumb', 'screenshot_med', $screenshot['url']),
                ];
            })->take(9) : null,
            'similarGames' => isset($game['similar_games']) ? collect($game['similar_games'])->map(function ($game) {
                return collect($game)->merge([
                    'coverImageUrl' => isset($game['cover']) ? Str::replaceFirst('thumb', 'cover_big', $game['cover']['url']) : 'https://via.placeholder.com/264x352',
                    'member_rating' => isset($game['rating']) ? round($game['rating']) . '%' : '-',
                    'platforms' => array_key_exists('platforms', $game) ? collect($game['platforms'])->pluck('abbreviation')->implode(', ') : null,
                ]);
            })->take(6) : null,
            'social' => [
                'website' => isset($game['websites']) ? collect($game['websites'])->first() : null,
                'facebook' => isset($game['websites']) ? collect($game['websites'])->filter(function ($website) {
                    return Str::contains($website['url'], 'facebook');
                })->first() : null,
                'twitter' => isset($game['websites']) ? collect($game['websites'])->filter(function ($website) {
                    return Str::contains($website['url'], 'twitter');
                })->first() : null,
                'instagram' => isset($game['websites']) ? collect($game['websites'])->filter(function ($website) {
                    return Str::contains($website['url'], 'instagram');
                })->first() : null,
            ],
        ]);

        return $temp;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(string $slug, int $id): View
    {
        $chirp = Chirp::where('id', $id)->first();

        $this->authorize('update', $chirp);

        return view('chirps.edit', [
            'slug' => $slug,
            'chirp' => $chirp,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(string $slug, int $id): RedirectResponse
    {
        $this->authorize('update', Chirp::where('id', $id)->first());

        $validated = request()->validate([
            'message' => 'required|string|max:255',
        ]);

        Chirp::where('id', $id)->update($validated);

        return redirect(route('games.show', $slug));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug, int $id): RedirectResponse
    {
        $this->authorize('delete', Chirp::where('id', $id)->first());

        Chirp::where('id', $id)->delete();

        return redirect(route('games.show', $slug));
    }
}
