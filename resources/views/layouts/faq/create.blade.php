<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
@extends('layouts/general.head')
</head>
<body>
@extends('layouts/general.header')
<div class="col-md-8">
    
                 <h1 class="page-header">
                     Listado de Faq
                      <small>Modulo de Faqs</small>
                  </h1>

    <form action="{{ route('faqs') }}" method="POST" enctype="multipart/form-data">
    {!! csrf_field() !!} <!--  asi evitamos que un robot use nuestro formulario -->
    {!! method_field('POST') !!}


 

    <!-- <div class="form-group has-feedback {{ $errors->has('question') ? 'has-error' : '' }}">
        <input type="text" class="form-control" id="question" name="question" placeholder="Ingresa Titulo" value="{{ old('question') }}">
        @if($errors->has('question'))
            <span class="help-block">
                <strong>{{ $errors->first('question') }}</strong>
            </span>

        @endif
    </div> -->

    <div class="form-group has-feedback">
            <input type="text" class="form-control" id="question" name="question" 
            placeholder="Ingrese question" value="{{ old('question') }}">
        </div>

    <div class="form-group has-feedback">
        <textarea class="form-control" id="response" name="response" placeholder="Ingresa Respuesta">{{ old('content') }}</textarea>
    </div>

   
    <button class="form-control btn btn-primary">
    Enviar
    </button>
    </form>

</div>
<!-- Back To Top -->
<a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

<!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- CORE PLUGINS -->
<script src="vendor/jquery.min.js" type="text/javascript"></script>
<script src="vendor/jquery-migrate.min.js" type="text/javascript"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

<!-- PAGE LEVEL PLUGINS -->
<script src="vendor/jquery.easing.js" type="text/javascript"></script>
<script src="vendor/jquery.back-to-top.js" type="text/javascript"></script>
<script src="vendor/jquery.smooth-scroll.js" type="text/javascript"></script>
<script src="vendor/jquery.wow.min.js" type="text/javascript"></script>
<script src="vendor/jquery.parallax.min.js" type="text/javascript"></script>
<script src="vendor/swiper/js/swiper.jquery.min.js" type="text/javascript"></script>

<!-- PAGE LEVEL SCRIPTS -->
<script src="js/layout.min.js" type="text/javascript"></script>
<script src="js/components/swiper.min.js" type="text/javascript"></script>
<script src="js/components/wow.min.js" type="text/javascript"></script>
</body>
</html>
