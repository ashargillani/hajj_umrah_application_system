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
        return $this->hasOne('App\Flight','flightId');
    }
    public function provider()
    {
        return $this->hasOne('App\Provider', 'providerId');
    }
}
