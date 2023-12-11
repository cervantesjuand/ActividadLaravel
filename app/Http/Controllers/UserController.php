<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required | max:30',
            'lastname' => 'required | max:30',
            'email' => 'required | unique:users|email|max:60',
            'role' => 'required | max:20',
            'password' => 'required | confirmed|min:6'
        ]);

        $user = User::create([
            'name' => $request->name,
            'apellidos' => $request->apellidos,
            'email' => $request->email,
            'role' => $request->rol,
            'password' => bcrypt($request->password)
        ]);
    }
}
