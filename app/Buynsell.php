<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buynsell extends Model
{
    //
    public function tsignal()
    {
        return $this->belongsTo(Tsignal::class);
    }
}
