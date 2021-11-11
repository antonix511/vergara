<?php

namespace App\Http\Controllers;

use App\Models\AlumnoCurso;

class AlumnoCursoGetController extends Controller
{
    public function __invoke()
    {
        $alumno = AlumnoCurso::all();
        return response()->json(['alumnos' => $alumno]);
    }
}
