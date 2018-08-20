<?php

namespace GameDatabase\Http\Controllers;

use GameDatabase\Genre;
use GameDatabase\Http\Requests\CreateGenreFormRequest;

class GenreController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('genres.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateGenreFormRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateGenreFormRequest $request)
    {
        $genre = new Genre;

        $genre->name = $request->get('name');

        $genre->save();

        return view('genres.store');
    }
}
