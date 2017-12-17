<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Levels extends Model
{
    public function getAllData(){
        $data = $this->all();
        return $data;
    }
}
