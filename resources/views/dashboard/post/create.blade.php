

@extends('dashboard.base')

@section('content')
{{-- @include('dashboard.partials.validation-error') --}}



<form action="{{route("post.store")}}" method="post">
    @csrf

        <h1>Formulario para posts</h1>
    <div class="text-right">
        <a href="{{route('post.index')}}" class="btn btn-dark text-right"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i>Regresar </a>
    </div>


     <div class="form-group">
        <label for="title">Title</label>
        <input  class="form-control" type="text" name="title" value="{{old('title')}}">
        @error('title')
        <div class="alert alert-danger mt-3" role="alert">
            Por favor inserte un titulo valido
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="url_clean">Url</label>
        <input  class="form-control" type="text" name="url_clean"  value="{{old('url_clean')}}">
        @error('url_clean')
        <div class="alert alert-danger mt-3" role="alert">
            Por favor inserte una url valida
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="content">Content</label>
        <textarea  class="form-control" name="content"rows="3">{{old('content')}}</textarea>
        @error('content')
        <div class="alert alert-danger mt-3" role="alert">
            Por favor inserte un contenido valido
        </div>
        @enderror
    </div>

   <input type="submit" value="Enviar" class="btn btn-primary text-center" >

    {{-- MUESTRA LOS ERRORES DE VALIDACION --}}
    {{-- @if($errors->any)
        @foreach ($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
           Error: {{$error}}
          </div>

        @endforeach
    @endif --}}



</form>
@endsection
