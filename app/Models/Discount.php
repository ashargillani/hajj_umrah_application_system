<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    public function package() {
        return $this->belongsTo('App\Package', 'package_id');
    }
}
