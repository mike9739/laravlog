

    @csrf

        <h1>Formulario para posts</h1>
    <div class="text-right">
        <a href="{{route('post.index')}}" class="btn btn-dark text-right"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i>Regresar </a>
    </div>


     <div class="form-group">
        <label for="title">Title</label>
        <input  class="form-control" type="text" name="title" value="{{old('title',$post->title)}}">
        @error('title')
        <div class="alert alert-danger mt-3" role="alert">
            Por favor inserte un titulo valido
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="url_clean">Url</label>
        <input  class="form-control" type="text" name="url_clean"  value="{{old('url_clean',$post->url_clean)}}">
        @error('url_clean')
        <div class="alert alert-danger mt-3" role="alert">
            Por favor inserte una url valida
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="category_id">Categorías</label>
        <select class="form-control" name="category_id" id="category_id">
            @foreach ($categories as $title => $id)
           <option {{ $post->category_id == $id ? 'selected="selected"' : '' }} value="{{$id}}">{{$title}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="posted">Publicado</label>
        <select class="form-control" name="posted" id="category_id">
           @include('dashboard.partials.option-posted',['selection'=>$post->posted])
        </select>
    </div>



    <div class="form-group">
        <label for="content">Content</label>
        <textarea  class="form-control" id="content" name="content"rows="3">{{old('content',$post->content)}}</textarea>
        @error('content')
        <div class="alert alert-danger mt-3" role="alert">
            Por favor inserte un contenido valido
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



