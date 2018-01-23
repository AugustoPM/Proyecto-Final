<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
@include('layouts/general.head')
</head>
<body>
@include('admin.header')
@include('admin.parallaxAdmin')
<div class="col-md-8">
    
                 <h1 class="page-header">
                     Listado de Personal
                      <small>Modulo de Personal</small>
                  </h1>

                  <form action="{{ route('teams.update', $team->id ) }}" method="POST">
    {!! csrf_field() !!} <!--  asi evitamos que un robot use nuestro formulario se utiliza put para poder editar el otro controlador que ya fue creado -->
    {!! method_field('PUT') !!}
    <div class="form-group has-feedback">
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa nombre" value="{{ $team->nombre }}">
    </div>

   
    <div class="form-group has-feedback">
        <textarea class="form-control" id="cargo" name="cargo" placeholder="Ingresa cargo">{{ $team->cargo }}</textarea>
    </div>
    <div class="form-group has-feedback">
        <textarea class="form-control" id="mensaje" name="mensaje" placeholder="Ingresa mensaje">{{ $team->mensaje }}</textarea>
    </div>
    

   
    <button class="form-control btn btn-warning">
    Guardar
    </button>
    </form>

    @include('admin.footer')
</body>
</html>             