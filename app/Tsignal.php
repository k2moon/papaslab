<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tsignal extends Model
{
    //
    public function sinfs()
    {
        return $this->belognsTo(Sinfo::class);
    }
}
