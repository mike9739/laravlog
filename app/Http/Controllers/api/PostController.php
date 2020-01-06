<?php

namespace App\Http\Controllers\api;

use App\Category;
use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class PostController extends ApiResponseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //para hacer un join con varias tablas se utiliza join('nombre de la tabla','id_con lo que se va conectar')
        $post = Post::join('post_images','post_images.post_id','=','posts.id')
        ->join('categories','categories.id','=','posts.category_id')
        ->select('posts.*','categories.title as category','post_images.image')
        ->orderBy('posts.created_at','desc')->paginate(10);
        return $this->successResponse($post);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
        $post->image;
        $post->category;
        return $this->successResponse($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
       /**
     * Return a list of all the post of one category
     *
     * @param  Category $category
     * @return \Illuminate\Http\Response
     */
    public function category(Category $category)
    {
        return $this->successResponse(["posts"=>$category->post()->paginate(10),"category"=>$category]);
    }


    public function url_clean(String $url_clean)
    {
        //
        $post= Post::where('url_clean',$url_clean)->firstOrFail();
        $post->image;
        $post->category;
        return $this->successResponse($post);
    }

}
