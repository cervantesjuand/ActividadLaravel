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
        try {
            $this->validate($request, [
                'name' => 'required | max:30',
                'lastname' => 'required | max:30',
                'email' => 'required | unique:users|email|max:60',
                'role' => 'required | max:20',
                'password' => 'required | min:6'
            ]);
    
            $user = User::create([
                'name' => $request->name,
                'lastname' => $request->lastname,
                'email' => $request->email,
                'role' => $request->role,
                'password' => bcrypt($request->password)
            ]);
    
            return redirect()->route('login') ;
        } catch (\Exception $e) {
             echo $e;
        }
    }

    public function storeView() {

        return view('auth.register');
        
    }

    public function loginView() {

        return view('auth.login');

    }


    public function dashboardView(User $user) {

        return view('dashboard',[
            'user' => $user
        ]);

    }

    public function login(Request $request){
        try {
        $this->validate($request, [
            'email' =>'required|email',
            'password' =>'required'
        ]);

        if (!auth()->attempt($request->only('email', 'password'), $request->remember)) {
            return back()->with('mensaje','Crendenciales incorrectas');
        }

        if(auth()->user()->role === "Administrador"){
            return redirect()->route('dashboard', auth()->user()) ;
        }else{
            return redirect()->route('hola');
        }
    }catch (\Exception $e){
        dd($e);
    }
    }
}
