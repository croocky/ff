<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Levels extends Model
{
    public static function getAllData(){
        $data = Levels::all();
        return $data;
    }
}
