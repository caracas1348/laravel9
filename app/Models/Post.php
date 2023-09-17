<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //protected $fillable = ['title','body'];
    protected $guarded = [];
              //$guarded //son los campos que no se pueden asignar de forma masiva o sea si se deja vacio deja pasar todos los campos
    //protected $table = 'posts';// por defecto toma el nombre de la clase en plural, pero si quieres que tenga otro nombre cambiar el valor del atributo
}
