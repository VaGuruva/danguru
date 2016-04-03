<?php

namespace Guru;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    /**
     * Get the cars for the owner.
     */
    public function car()
    {
        return $this->hasMany('Guru\Car');
    }
}
