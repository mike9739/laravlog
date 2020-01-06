

@extends('dashboard.base')

@section('content')




    @csrf

        <h1> category id:{{$user->id}}</h1>
    <div class="text-right">
        <a href="{{route('user.index')}}" class="btn btn-dark text-right"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i>Regresar </a>
    </div>


     <div class="form-group">
        <label for="name">name</label>
        <input readonly  class="form-control" type="text" name="name" value="{{$user->name}}">

    </div>

    <div class="form-group">
        <label for="surame">Surname</label>
        <input readonly  class="form-control" type="text" name="surname"  value="{{$user->surname}}">

    </div>


    <div class="form-group">
        <label for="rol">Rol</label>
        <input readonly  class="form-control" type="text" name="rol"  value="{{$user->rol->key}}">

    </div>






@endsection
