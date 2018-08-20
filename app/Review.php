<?php

namespace GameDatabase;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'title' => 'string|max:150',
        'review' => 'string',
        'review_score' => 'integer'
    ];
}
