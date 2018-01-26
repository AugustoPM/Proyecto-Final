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
           
                <li>Portadas</li>
                <li>Services</li>
                <li>About Description</li>
                <li>Informacion de About</li>
                <li>Teams</li>
                <li>Testimonials</li>
                <li><a href="{{ route('faqs') }}">Faqs</a></li>
                <li><a href="{{ route('faq2s') }}">Faqs Description</a></li>
                <li><a href="{{ route('products') }}">Productos</a></li>
                <li><a href="{{ route('clients') }}">Clientes</a></li>
         </ul>
           
            
          

   @include('admin.footer')
    
</body>
</html>