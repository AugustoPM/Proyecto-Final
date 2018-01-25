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
                <li>Services</li>
                <li>About Description</li>
                <li>Informacion de About</li>
                <li>Teams</li>
                <li>Testimonials</li>
                <li><a href="{{ route('products') }}">Productos</a></li>
                <li>Patrocinadores</li>
                <li><a href="{{ route('clients') }}">Clientela</a></li>
                <li><a href="{{ route('faqs') }}">FAQs</a></li>
                <li><a href="{{ route('faq2s') }}">Descripcion de FAQs</a></li>
                <li><a href="{{ route('contacts') }}">Ciudad</a></li>
         </ul>
           
            
          

   @include('admin.footer')
    
</body>
</html>