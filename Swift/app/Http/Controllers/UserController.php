<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Levels;
use App\Members;

class UserController extends Controller
{
    public function index()
    {
        $id = Auth::id();
        $user = User::with('structure')->where('id', $id)->first();
        $level = Levels::where('deposit','>=', $user->deposit)->first();
        $members = Members::where('parent',$id)->get();
        return view('lc', compact('user','level','members'));
    }
}
