<?php
// modelo para el controlador de Post
namespace App;

use Illuminate\Database\Eloquent\Model;


/**
 * CREAR UNA INSTANSIA de la tabla post
 *
 *
 */

class Post extends Model
{
    //
    protected $fillable = ['title','url_clean','content'];

}
