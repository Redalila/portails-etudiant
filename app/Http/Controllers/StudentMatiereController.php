<?php

namespace App\Http\Controllers;

use App\Models\Matiere;

class StudentMatiereController extends Controller
{
    public function index()
    {
        $matieres = Matiere::all();

        return view('student_matiere', ['matieres' => $matieres]);
    }

    public function show($id)
    {
        return view('meet', ['matiere' => Matiere::findOrFail($id)]);
    }
}
