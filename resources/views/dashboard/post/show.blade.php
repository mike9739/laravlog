

@extends('dashboard.base')

@section('content')




    @csrf

        <h1> Post id:{{$post->id}}</h1>
    <div class="text-right">
        <a href="{{route('post.index')}}" class="btn btn-dark text-right"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i>Regresar </a>
    </div>


     <div class="form-group">
        <label for="title">Title</label>
        <input readonly  class="form-control" type="text" name="title" value="{{$post->title}}">

    </div>

    <div class="form-group">
        <label for="url_clean">Url</label>
        <input readonly  class="form-control" type="text" name="url_clean"  value="{{$post->url_clean}}">

    </div>

    <div class="form-group">
        <label for="content">Content</label>
        <textarea readonly  class="form-control" name="content"rows="3">{{$post->content}}</textarea>

    </div>





@endsection
