<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    public function pictures()
    {
        return $this->hasMany('App\Picture', 'packageId');
    }
    public function flight()
    {
        return $this->belongsTo('App\Flight','flightId');
    }
    public function hotel()
    {
        return $this->belongsTo('App\PackageHotel','hotelId');
    }
    public function provider()
    {
        return $this->belongsTo('App\Provider', 'providerId');
    }
}
