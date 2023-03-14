<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view("users", [
            "users" => $users,
        ]);
    }
    
    public function show (User $user, Request $request)
    {
        return view ("user", [
            "name" => "Olivetti",
            'user' => $user
        ]);
    }
}