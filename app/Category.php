<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;

class Category extends Model
{
    // asignacion del fillable

    protected $fillable =['title','url_clean'];

    public function post(){
        return $this->hasMany(Post::class);
    }

}
