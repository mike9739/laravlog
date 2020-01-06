

@extends('dashboard.base')

@section('content')
@include('dashboard.partials.validation-error')

<form action="{{route("post.update",$post->id)}}" method="post">
 {{-- fijamos la peticion en put --}}
 @method('PUT')
 @include('dashboard.post._form')
 <button type="submit" class="btn btn-primary" >Editar <i class="fas fa-edit "></i></button>
</form>
<br>
<form action="{{route("post.image",$post)}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col">
            <input type="file" name="image" id="" class="form-control">
        </div>
        <div class="col">
            <button type="submit"  class="btn btn-dark"><i class="fa fa-upload" aria-hidden="true"></i>Subir</button>

        </div>
    </div>


</form>

@endsection
