<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    //
    protected $fillable = [
        'romaji',
        'kana',
        'kanji'
    ];

    public function user() {
        return $this->belongsToMany('App\User');
    }

    public function prefecture() {
        return $this->belongsTo('App\Prefecture');
    }

    public function city() {
        return $this->belongsTo('App\City');
    }
}
