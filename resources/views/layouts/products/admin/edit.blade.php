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
                     Editado de Productos
                      <small>Modulo de Produccion</small>
                  </h1>

                  <form action="{{ route('product.update', $product->id) }}" method="POST">
    {!! csrf_field() !!} <!--  asi evitamos que un robot use nuestro formulario se utiliza put para poder editar el otro controlador que ya fue creado -->
    {!! method_field('PUT') !!}
    <div class="form-group has-feedback">
        <input type="text" class="form-control" id="title" name="title" placeholder="Ingresa Producto" value="{{ $product->title }}">
    </div>

   
    <div class="form-group has-feedback">
        <textarea class="form-control" id="subtitle" name="subtitle" placeholder="Ingresa Categoria">{{ $product->subtitle }}</textarea>
    </div>

    <div class="form-group has-feedback">
        <textarea class="form-control" id="text" name="text" placeholder="Ingresa Descripcion">{{ $product->text }}</textarea>
    </div>
   
    <button class="form-control btn btn-warning">
    Guardar
    </button>
    </form>

</div>   

@include('admin.footer')
</body>
</html>             