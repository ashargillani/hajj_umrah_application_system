<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PackageHotel extends Model
{
    public function pictures()
    {
        return $this->hasMany('App\Picture', 'hotelId');
    }
}
