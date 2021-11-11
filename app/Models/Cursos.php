<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cursos extends Model
{
    use HasFactory;

    protected $primaryKey = 'codcur';

    protected $table = 'cursos';

    protected $fillable = [
        'codcur',
        'nomcur',
        'credito'
    ];

    public $timestamps = false;
}
