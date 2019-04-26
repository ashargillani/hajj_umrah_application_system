<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserJourney extends Model
{
    public function user()
    {
        return $this->hasOne('App\UserJourney','user_id');
    }
}
