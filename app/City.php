<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    //
    protected $fillable = [
        'romaji',
        'kana',
        'kanji'
    ];

    public function prefecture() {
        return $this->belongsTo('App\Prefecture');
    }

    public function stations() {
        return $this->hasMany('App\Station');
    }
}
