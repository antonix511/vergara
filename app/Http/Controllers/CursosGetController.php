<?php

namespace App\Http\Controllers;

use App\Models\Cursos;
use Illuminate\Http\Request;

class CursosGetController extends Controller
{
    public function __invoke()
    {
        $cursos = Cursos::all();
        return response()->json(['cursos' => $cursos->toArray()]);
    }
}
