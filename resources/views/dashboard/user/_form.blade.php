

    @csrf

        <h1>Formulario para Registro de Administradores</h1>
    <div class="text-right">
        <a href="{{route('user.index')}}" class="btn btn-dark text-right"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i>Regresar </a>
    </div>


     <div class="form-group">
        <label for="title">Nombre</label>
        <input  class="form-control" type="text" name="name" value="{{old('user',$user->name)}}">
        @error('name')
        <div class="alert alert-danger mt-3" role="alert">
            Por favor inserte un nombre valido
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="surname">Apellido</label>
        <input  class="form-control" type="text" name="surname"  value="{{old('surnname',$user->surname)}}">
        @error('url_clean')
        <div class="alert alert-danger mt-3" role="alert">
            Por favor inserte un apellido valido
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="email">Correo electronico</label>
        <input  class="form-control" type="email" name="email"  value="{{old('email',$user->email)}}">
        @error('email')
        <div class="alert alert-danger mt-3" role="alert">
            Por favor inserte un correo Valido
        </div>
        @enderror
    </div>
    @if ($pasw)
    <div class="form-group">
        <label for="Password">Password</label>
        <input  class="form-control" type="password" name="password"  value="{{old('password',$user->password)}}">
        @error('password')
        <div class="alert alert-danger mt-3" role="alert">
            Por favor inserte una contraseña valida
        </div>
        @enderror
    </div>
    @endif









