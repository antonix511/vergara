<?php

namespace App\Http\Controllers;

use App\Models\Alumnos;
use Illuminate\Http\Request;

class AlumnoCursoGetController extends Controller
{
    public function __invoke()
    {
        $alumno = Alumnos::all();
        return response()->json(['alumnos' => $alumno]);
    }
}
