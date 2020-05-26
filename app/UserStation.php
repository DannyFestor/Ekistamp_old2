<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserStation extends Model
{
    protected $fillable = [
        'user_id',
        'station_id'
    ];

    public function user() {
        return $this->hasOne('App\User');
    }

    public function station() {
        return $this->hasOne('App\Station');
    }
}
