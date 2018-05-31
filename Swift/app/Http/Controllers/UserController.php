<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Levels;

class UserController extends Controller
{
    public function index()
    {
        $id = Auth::id();
        $user = User::where('id', $id)->first();
        $level = Levels::where('deposit','>', $user->deposit)->fi();
        return view('lc', compact('user','level'));
    }
}
