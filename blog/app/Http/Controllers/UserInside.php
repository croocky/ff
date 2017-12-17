<?php
/**
 * Created by PhpStorm.
 * User: egorkarpacev
 * Date: 17.12.2017
 * Time: 21:39
 */

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserInside extends Controller
{
    /**
     * Показать профиль данного пользователя.
     *
     * @param  int  $id
     * @return Response
     */

    public function show($id)
    {
        if (Auth::check())
        {
            $id = Auth::id();
            $results = DB::select('select * from users where id = :id', ['id' => $id]);
            var_dump($results);
            return view('lc', ['user' => User::findOrFail($id)]);
        }
        else{
            return view('auth/login', ['user' => User::findOrFail($id)]);
        }

    }
}