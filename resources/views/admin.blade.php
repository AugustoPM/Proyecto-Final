<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
@include('layouts/general.head')
</head>
<body>
@include('admin.header')

<!--========== PARALLAX ==========-->
@include('admin.parallaxAdmin')
<!--========== PARALLAX ==========-->


             
             <!-- <div class="alert alert-success alert-dismissible" role="alert">
             <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
             <strong>Info!</strong> 
            </div> -->
          

               

             <hr>

         <ul class="list-of-parts">

         <li><a href="{{ route('sliders') }}">Slider</a></li>
         <li><a href="{{ route('portadas') }}">Portadas</a></li>
                <li><a href="{{ route('pricings') }}">Precios</a></li>
                <li><a href="{{ route('reviews') }}">Opiniones</a></li>
                <li class="dropdown"><a href="" class="dropdown-toggle nav-item-child nav-item-hover" data-toggle="dropdown"
                            role="button"
                            aria-expanded="false"
                            aria-haspopup="true">
                            {{ $portadas[2]->titulo }} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                
                <li><a href="{{ route('infos') }}">Informacion de About</li>
                <li><a href="{{ route('abouts') }}">About Description</li>
                <li><a href="{{ route('services') }}">Services</li>
                <li><a href="{{ route('testimonials') }}">Testimonials</li>
                <li><a href="{{ route('teams') }}">Teams</li>
                </ul>
                <li><a href="{{ route('products') }}">Productos</a></li>
                <li><a href="{{ route('clients') }}">Clientela</a></li>
                <li><a href="{{ route('faqs') }}">FAQs</a></li>
                <li><a href="{{ route('faq2s') }}">Descripcion de FAQs</a></li>
                <li><a href="{{ route('contacts') }}">Ciudad</a></li>
         </ul>
           
            
          

   @include('admin.footer')
    
</body>
</html>