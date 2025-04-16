<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = 'roles'; // si la tabla se llama "roles"
    public $timestamps = false;

    protected $fillable = ['nombre']; // ajusta según tus columnas
}
