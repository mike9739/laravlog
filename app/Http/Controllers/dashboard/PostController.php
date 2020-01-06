<?php

namespace App\Http\Controllers\dashboard;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostPost;
use App\Post;
use App\PostImage;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //VERIFICA QUE EL USUARIO SE ENCUENTRE LOGUEADO
    public function __construct()
    {
        $this->middleware(['auth','isAdmin']);
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $posts = Post::orderBy('created_at','desc')->paginate(10);

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
        $categories = Category::pluck('id','title');
        return view("dashboard.post.create",['post'=>new Post,'categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostPost $request)
    {

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
        $categories = Category::pluck('id','title');
        return view('dashboard.post.edit',["post"=>$post,"categories"=>$categories]);

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
     *
     *
     * Upload an image and asosiate with a post
     * @param Request $request
     * @param Post $post
     */
    public function uploadImage(Request $request , Post $post){
        $request->validate(['required|image'=>'mimes:jpeg,bmp,png|max:10240']);

        $imageName = time()."." .$request->image->extension();
        $request->image->move(public_path('images'),$imageName);
        PostImage::create(['image'=> $imageName,'post_id'=>$post->id]);
        return back()->with('status','Imagen cargada con exito :D');

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
