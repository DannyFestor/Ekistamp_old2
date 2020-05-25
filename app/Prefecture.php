<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prefecture extends Model
{
    //
    protected $fillable = [
        'romaji',
        'kana',
        'kanji'
    ];

    public function cities() {
        return $this->hasMany('App\City');
    }

    public function stations() {
        return $this->hasMany('App\Station');
    }
}
