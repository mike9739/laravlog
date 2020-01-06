

@extends('dashboard.base')

@section('content')
{{-- @include('dashboard.partials.validation-error') --}}
<div class="row">
    <div class="col text-right">
        <a href="{{route('category.create')}}" class="btn btn-primary mb-3">
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
        <th scope="col">Creación</th>
        <th scope="col">Actualización</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
        <tr>
        <td>{{$category->id}}</td>
        <td>{{$category->title}}</td>
        <td>{{$category->created_at->format('d-m-Y')}}</td>
        <td>{{$category->updated_at->format('d-m-Y')}}</td>
        <td>
            <a href="{{route('category.show',$category->id)}}" class="btn btn-info"><i class="fa fa-eye" aria-hidden="true"></i> Ver </a>
            <a href="{{route('category.edit',$category->id)}}" class="btn btn-dark"><i class="fas fa-edit "></i>Editar</a>
            <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal" data-id="{{$category->id}}" ><i class="fas fa-trash "></i> Eliminar</button>


        </td>

        </tr>

        @endforeach
    </tbody>
  </table>
<div class="text-center">
    {{$categories->links()}}
</div>


{{-- modal --}}
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>¿Seguro que desea borrar el registro seleccionado?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                <form id="formDelete" method="POST" action="{{ route('category.destroy',0) }}"
                    data-action="{{ route('category.destroy',0) }}">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger">Borrar</button>
                </form>


            </div>
        </div>
    </div>
</div>

<script>
    window.onload = function(){
    $('#deleteModal').on('show.bs.modal', function (event) {

  var button = $(event.relatedTarget) // Button that triggered the modal
  var id = button.data('id') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.

  action = $('#formDelete').attr('data-action').slice(0,-1)
  action += id
  console.log(action)

  $('#formDelete').attr('action',action)

  var modal = $(this)
  modal.find('.modal-title').text('Se eliminará la categoría: ' + id)
})
    }
</script>

@endsection

