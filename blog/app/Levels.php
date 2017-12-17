<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Levels extends Model
{
    public  function getLevel($amount){
        $level = $this->where('pers_amount','<',$amount)->orderBy('pers_amount', 'desc')->take(1)->get()->toArray();
        return $level;
    }
}
