<?php

namespace GameDatabase;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $fillable = [
        'name' => 'string|nullable|max:50'
    ];
}
