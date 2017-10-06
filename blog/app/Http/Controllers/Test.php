<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Test extends Controller
{
    public function index()
    {
        $usersets = "jyukukuyk";

        return view('welcome')->with('$usersets',$usersets);
    }
}
