<?php

namespace GameDatabase;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = [
        'name' => 'string|nullable|max:100'
    ];

    public function genres()
    {
        return $this->belongsToMany('GameDatabase\Genre', 'game_genre');
    }

    public function reviews()
    {
        return $this->hasMany('GameDatabase\Review', 'game_id', 'id');
    }
}
