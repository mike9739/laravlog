

@extends('dashboard.base')

@section('content')




    @csrf

        <h1> category id:{{$category->id}}</h1>
    <div class="text-right">
        <a href="{{route('category.index')}}" class="btn btn-dark text-right"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i>Regresar </a>
    </div>


     <div class="form-group">
        <label for="title">Title</label>
        <input readonly  class="form-control" type="text" name="title" value="{{$category->title}}">

    </div>

    <div class="form-group">
        <label for="url_clean">Url</label>
        <input readonly  class="form-control" type="text" name="url_clean"  value="{{$category->url_clean}}">

    </div>







@endsection
