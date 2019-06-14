<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserJourney extends Model
{
    protected $casts = [
        'children_number_and_state' => 'array'
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

//    public function getChildrenNumberAndStateAttribute($value) {
//        return json_decode($value);
//    }
}
