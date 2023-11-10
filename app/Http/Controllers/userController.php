<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class userController extends Controller
{
    function dbOperations()
    {
        $data= DB::table('users')->get();
        return view('users',['data'=>$data]);
    }


    function addUser(Request $req)
    {
        $user = new User;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->save();
        return redirect ('list');
    }
}