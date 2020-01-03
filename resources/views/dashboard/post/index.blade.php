

@extends('dashboard.base')

@section('content')
{{-- @include('dashboard.partials.validation-error') --}}
<div class="row">
    <div class="col text-right">
        <a href="{{route('post.create')}}" class="btn btn-primary mb-3">
      <i class="fa fa-plus"></i>
      Agregar
        </a>
    </div>
</div>


<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Titulo</th>
        <th scope="col">Posteado</th>
        <th scope="col">Creación</th>
        <th scope="col">Actualización</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
        <tr>
        <td>{{$post->id}}</td>
        <td>{{$post->title}}</td>

        <td>{{$post->posted}}</td>
        <td>{{$post->created_at->format('d-m-Y')}}</td>
        <td>{{$post->updated_at->format('d-m-Y')}}</td>
        <td>
            <a href="{{route('post.show',$post->id)}}" class="btn btn-success"><i class="fa fa-eye" aria-hidden="true"></i> Ver </a>
        </td>

        </tr>

        @endforeach
    </tbody>
  </table>
<div class="text-center">
    {{$posts->links()}}
</div>




@endsection

