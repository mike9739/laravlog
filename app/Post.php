<?php
// modelo para el controlador de Post
namespace App;
use App\Category;
use App\PostImage;
use Illuminate\Database\Eloquent\Model;


/**
 * CREAR UNA INSTANSIA de la tabla post
 *
 *
 */

class Post extends Model
{
    //
    protected $fillable = ['title','url_clean','content','category_id','posted'];


    /**
     *
     *
     * Funcion para hacer una busqueda enlazada, recibe un category_id y nos devuelve ela categoria a la que pertenece
     *
     *
     *
     *  */
    public function category(){
        return $this->belongsTo(Category::class);
    }
    /**
     *
     * Funcion para enlazar imagen con post
     */
    public function image(){
        return $this->hasOne(PostImage::class);
    }

}
