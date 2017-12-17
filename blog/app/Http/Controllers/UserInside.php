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
            $deposit = $currentuser->deposit;
            $levels = Levels::where('pers_amount','<',$deposit)->orderBy('pers_amount', 'desc')->take(1)->get();

            echo $levels;


            return view('lc', ['user' => $currentuser]);
        }
        else{
            return view('auth/login', ['user' => User::findOrFail($id)]);
        }

    }
}