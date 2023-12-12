<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{

    public function index(Request $request){
        return view('hola')
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'user_id' => 'required | numeric',
            'birth_date' => 'required | date'
        ]);

        $student = Student::create([
            'user_id' => $request->user_id,
            'birth_date' => $request->birth_date
        ]);

        return echo "Usuario creado";
    }
}
