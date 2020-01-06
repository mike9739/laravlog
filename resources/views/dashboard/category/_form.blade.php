

    @csrf

        <h1>Formulario para categorías</h1>
    <div class="text-right">
        <a href="{{route('category.index')}}" class="btn btn-dark text-right"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i>Regresar </a>
    </div>


     <div class="form-group">
        <label for="title">Title</label>
        <input  class="form-control" type="text" name="title" value="{{old('title',$category->title)}}">
        @error('title')
        <div class="alert alert-danger mt-3" role="alert">
            Por favor inserte un titulo valido
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="url_clean">Url</label>
        <input  class="form-control" type="text" name="url_clean"  value="{{old('url_clean',$category->url_clean)}}">
        @error('url_clean')
        <div class="alert alert-danger mt-3" role="alert">
            Por favor inserte una url valida
        </div>
        @enderror
    </div>



   {{-- <button type="submit" class="btn btn-primary" >Enviar <i class="fa fa-paper-plane" aria-hidden="true"></i></button> --}}

    {{-- MUESTRA LOS ERRORES DE VALIDACION --}}
    {{-- @if($errors->any)
        @foreach ($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
           Error: {{$error}}
          </div>

        @endforeach
    @endif --}}



