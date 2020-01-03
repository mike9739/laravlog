

@extends('dashboard.base')

@section('content')
@include('dashboard.partials.validation-error')

<form action="{{route("post.update",$post->id)}}" method="post">
 {{-- fijamos la peticion en put --}}
 @method('PUT')
 @include('dashboard.post._form')
 <button type="submit" class="btn btn-primary" >Editar <i class="fas fa-edit "></i></button>
</form>


@endsection
