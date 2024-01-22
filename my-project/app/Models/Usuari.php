<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuari extends Model
{
    use HasFactory;

    protected $table = 'Usuaris';

    // S'indiquen les dades que es volen omplir amb $fillable
    protected $fillable = [
        'name',
        'cognom',
        'email',
        'password',
        'rol',
        'actiu'
    ];

    protected $hidden = [];
}
