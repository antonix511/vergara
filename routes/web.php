<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnosGetController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('alumnos')->group(function () {
    Route::get('/', [AlumnosGetController::class, '__invoke']);
});

Route::prefix('cursos')->group(function () {
    Route::get('/', [\App\Http\Controllers\CursosGetController::class, '__invoke']);
} );

Route::prefix('curso-alumno')->group(function () {
    Route::get('/', [\App\Http\Controllers\AlumnoCursoGetController::class, '__invoke']);
});
