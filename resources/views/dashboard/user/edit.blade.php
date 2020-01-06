

@extends('dashboard.base')

@section('content')
@include('dashboard.partials.validation-error')

<form action="{{route("user.update",$user->id)}}" method="post">
 {{-- fijamos la peticion en put --}}
 @method('PUT')
 @include('dashboard.user._form',['pasw'=>false])
 <button type="submit" class="btn btn-primary" >Editar <i class="fas fa-edit "></i></button>
</form>


@endsection
