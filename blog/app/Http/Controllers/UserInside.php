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

    public function show()
    {

        if (Auth::check())
        {
            $id = Auth::id();
            $currentuser = User::where('id',$id)->first();
            if(is_null($currentuser)){
                abort(404);
            }
            $deposit = $currentuser->deposit;
            $level = Levels::where('pers_amount','<',$deposit)->orderBy('pers_amount', 'desc')->take(1)->get();
            $reffs = explode(',',$currentuser->structure);
            var_dump($reffs);
            return view('lc', ['user' => $currentuser, 'level' => $level[0]]);
        }
        else{
            return view('auth/login', ['user' => User::findOrFail($id)]);
        }

    }
}