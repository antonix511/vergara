<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlumnoCurso extends Model
{
    use HasFactory;

    protected $table = 'alu_cur';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'codalu',
        'codcur',
        'nota'
    ];
}
