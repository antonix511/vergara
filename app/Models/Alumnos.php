<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumnos extends Model
{
    use HasFactory;

    protected $table = 'alumnos';

    protected $primaryKey = 'codalu';

    public $timestamps = false;

    protected $fillable = [
        'codalu',
        'nomalu',
        'apealu'
    ];
}
