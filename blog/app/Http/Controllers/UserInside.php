<?php
/**
 * Created by PhpStorm.
 * User: egorkarpacev
 * Date: 17.12.2017
 * Time: 21:39
 */

namespace App\Http\Controllers;

use App\Structures;
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
            $refferals = Structures::where('id', $id)->get();
            var_dump($refferals);
            $refferals = array_filter(explode(',',$currentuser->structure));
            $first_level = User::select('id','name','deposit','structure')->whereIn('id',$refferals)->get()->toArray();
            $first_level_payroll =0;
            foreach($first_level as $key => $val){

                $first_level_payroll = $first_level_payroll + $first_level[$key]['deposit'];
            }
            echo $first_level_payroll;
            return view('lc', ['user' => $currentuser, 'level' => $level[0], 'first' => $first_level]);
        }
        else{
            return view('auth/login', ['user' => User::findOrFail($id)]);
        }

    }
}