<?php

namespace GameDatabase\Http\Controllers;

use GameDatabase\Http\Requests\CreateReviewFormRequest;
use GameDatabase\Review;
use GameDatabase\User;
use GameDatabase\Game;

class ReviewController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reviews.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateReviewFormRequest $request)
    {
        $review = new Review;
        $review->title = $request->get('title');
        $review->review = $request->get('review');
        $review->review_score = (int)$request->get('review_score');
        $review->game_id = (int)$request->get('gameId');
        $review->user_id = (int)\Auth::user()->id;
        $review->save();

        return view('reviews.store');
    }

    /**
     * Display the specified resource.
     *
     * @param  \GameDatabase\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        if($review->user_id === \Auth::user()->id)
        {
            $username = 'you';
        } else {
            $username = User::find($review->user_id)->name;
        }

        $game = Game::find($review->game_id);
        return view('reviews.show', [
            'review' => $review,
            'game' => $game,
            'user' => $username
        ]);
    }

    /**
     * Display a list of all written reviews
     * 
     * @return mixed
     */
    public function index()
    {
        return view('reviews.index')->with('reviews', Review::all());
    }
}
