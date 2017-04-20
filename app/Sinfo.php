<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sinfo extends Model
{
    // save() 메스드 호출 예외처리
    public static $rules = [
        'scode' => ['required'],
        'sname' => ['required']
    ];

    public function tsignals()
    {
        return $this->hasMany(Tsignal::class);
    }
}
