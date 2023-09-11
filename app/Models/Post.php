<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //protected $table = 'posts';// por defecto toma el nombre de la clase en plural, pero si quieres que tenga otro nombre cambiar el valor del atributo
}
