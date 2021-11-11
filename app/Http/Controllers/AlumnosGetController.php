<?php

namespace App\Http\Controllers;

use App\Models\Alumnos;
use Illuminate\Http\Request;

class AlumnosGetController extends Controller
{
    public function __invoke()
    {
        $alumno = Alumnos::all();
        return response()->json(['alumnos' => $alumno->toArray()]);
    }
}
