<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    function getUsers($id) {
        $user = User::find($id);
        return view('user.profile',['user'=> $user]);
    }
}