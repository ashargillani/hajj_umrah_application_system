<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    public function pictures()
    {
        return $this->hasMany('App\Picture', 'provider_id');
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
