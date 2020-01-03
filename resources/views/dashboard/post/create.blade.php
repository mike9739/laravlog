

@extends('dashboard.base')

@section('content')
{{-- @include('dashboard.partials.validation-error') --}}
<form action="{{route("post.store")}}" method="post">
 @include('dashboard.post._form')
 <button type="submit" class="btn btn-primary" >Enviar <i class="fa fa-paper-plane" aria-hidden="true"></i></button>
</form>
@endsection
