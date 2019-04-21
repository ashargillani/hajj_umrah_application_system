<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    public function pictures()
    {
        return $this->hasMany('App\Picture', 'packageId');
    }
}
