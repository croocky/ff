<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Support\Facades\DB;

class UpdateController extends Controller
{
    public function index(Request $request){
        $name = Request::input('hui');
        $users = DB::table('users')
            ->where('refferals', '1')
            ->update(
                ['login' => $name]
            );
        return "ZAEBOK";
    }
}
