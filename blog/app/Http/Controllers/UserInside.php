<?php
/**
 * Created by PhpStorm.
 * User: egorkarpacev
 * Date: 17.12.2017
 * Time: 21:39
 */

namespace App\Http\Controllers;

use App\User;
use App\Levels;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


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
            $currentuser = User::find($id);
            $levels = Levels::all()->toArray();
            var_dump($levels);
            $deposit = $currentuser->deposit;
            foreach($levels as $level){
            echo $level['total_amount'];
        }

            return view('lc', ['user' => $currentuser]);
        }
        else{
            return view('auth/login', ['user' => User::findOrFail($id)]);
        }

    }
}