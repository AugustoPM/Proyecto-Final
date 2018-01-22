<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
@include('layouts/general.head')
</head>
<body>
@include('admin.header')

<!--========== PARALLAX ==========-->
<div class="parallax-window" data-parallax="scroll" data-image-src="img/1920x1080/01.jpg">
            <div class="parallax-content container">
                <h1 class="carousel-title">Bienvenido Administrador</h1>
                <p>Modulo de Partes que pueden ser Modfifcadas</p>
            </div>
</div>
<!--========== PARALLAX ==========-->


             
             <div class="alert alert-success alert-dismissible" role="alert">
             <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
             <strong>Info!</strong> 
            </div>
          

               

             <hr>

         <ul class="list-of-parts">
           
                <li>Portadas</li>
                <li>Services</li>
                <li>About Description</li>
                <li>Informacion de About</li>
                <li>Teams</li>
                <li>Testimonials</li>
                <li><a href="{{ route('faqs') }}">Faqs</a></li>
                <li>Faqs Description</li>
         </ul>
           
            
          

   @include('admin.footerAdmin')
    
</body>
</html>