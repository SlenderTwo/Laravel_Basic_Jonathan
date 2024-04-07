<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\View;
use App\Models\User;

class UserController extends Controller
{
    //
    public function index(int $user_id): view{

        //dd($user_id);

        //dd( User::all());

        $user = User::find($user_id);
        dd($user);

        return view('welcome',['user'=> $user]);
        //return '<h1>Hola mundo desde el controlador: '. $user_id.'</h1>';
    }
}
