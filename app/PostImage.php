<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Post;

class PostImage extends Model
{
    protected $fillable = ['post_id','image',];

    //Se realiza la relacion entre el modelo POST con el MODELO POST_IMAGE

    public function post(){
        return $this->belongsTo(Post::class);
    }


}
