<?php

namespace Guru;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
        /**
     * Get the owner that owns the car.
     */
    public function owner(){
        return $this->belongsTo('Guru\Owner');
    }
}
