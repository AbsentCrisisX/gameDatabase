<?php

namespace GameDatabase\Http\Controllers;

use GameDatabase\Game;
use GameDatabase\Genre;
use GameDatabase\Http\Requests\CreateGameFormRequest;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('games.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateGameFormRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateGameFormRequest $request)
    {
        $existingGame = Game::where('name', '=', $request->get('name'))->first();
        if($existingGame !== null)
        {
            \Auth::user()->games()->save($existingGame);
        } else {
            $game = new Game;
            $game->name = $request->get('name');
            $game->save();

            $genre = Genre::find($request->get('genreId'));
            $game->genres()->save($genre);
            \Auth::user()->games()->save($game);
        }

        return view('games.store');
    }

    /**
     * Display the specified resource.
     *
     * @param  \GameDatabase\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function show(Game $game)
    {
        $allGenres = Genre::all();

        return view('games.details', [
            'game' => $game,
            'genres' => $game->genres,
            'allGenres' => $allGenres,
            'reviews' => $game->reviews
        ]);
    }

    /**
     * Link the specified genre to the specified game
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function linkGenre(Request $request)
    {
        $game = Game::find($request->get('gameId'));
        $genre = Genre::find($request->get('genreId'));

        $game->genres()->save($genre);

        return view('games.linked', ['gameId' => $game->id]);
    }
}
