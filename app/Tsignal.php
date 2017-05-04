<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tsignal extends Model
{
    //
    public function buynsells()
    {
        return $this->hasMany(Buynsell::class);
    }
}
