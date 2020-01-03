<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostPost;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at','desc')->paginate(4);

        return view("dashboard.post.index",['posts'=>$posts]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("dashboard.post.create",['post'=>new Post]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostPost $request)
    {
        //VALIDACION DEL FORMULARIO
    //    $request->validate([
    //        'title'=>'required| min:5 | max:500',
    //        'url_clean' => 'required | min:5 | max:500',
    //        'content' => 'required | min:5'
    //    ]);
        echo "El titulo es: ".$request->input('title');
        Post::create($request -> validated());



        return back()->with('status','Post creado con exito');





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
        //$post = Post::findorFail($id);

            # code...
         return view('dashboard.post.show',["post"=>$post]);




    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
        return view('dashboard.post.edit',["post"=>$post]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePostPost $request,Post $post)
    {
        $post->update($request->validated());
        return back()->with('status','Post actualizado con exito');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
        $post->delete($post);

        return back()->with('status','Post eliminado');

    }
}
