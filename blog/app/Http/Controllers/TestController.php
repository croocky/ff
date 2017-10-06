<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index()
    {
        $user = array();
        $user = DB::table('users')->where([
            ['id','1']
                        ])->value('refferals');

        $user = explode(',',$user);
        $refferals = DB::table('users')->whereIn(
            'id',$user
        )->get();


        return view('welcome', ['user' => $refferals]);
    }
}
