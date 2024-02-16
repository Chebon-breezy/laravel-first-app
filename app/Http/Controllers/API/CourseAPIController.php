<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Doctrine\DBAL\Schema\Index;
use Illuminate\Http\JsonResponse;

class CourseAPIController extends Controller
{
    //GET, PUT, POST & DELETE

    //Adding, POST
    public function store(Request $request) {

        $validatedData = $request->validate([
           'name'=>'required|string|max:255',
           'email'=>'required|string',
           'password'=> 'required|string',
        ]);
        $user = new User();
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->password = bcrypt($validatedData['password']);
        $user->save();
        return response()->json(['message' => 'User Created successfully'], 200);

    }

    //Fetching all data from server, GET
    public function index (){
        
        return response()->json();
    }

    //Fetching a single data from server, GET
    public function show ($id){
        return response()->json();
    }

    //update data on server, PATCH
    public function update (Request $request, $id){
        return response()->json();
    }

    //deleting data from server, DELETE
    public function destroy (Request $request, $id){
        return response()->json();
    }



}
