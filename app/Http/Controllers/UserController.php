<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function getUsers($id) {
        $user = User::find($id);
        return view();
    }
}
