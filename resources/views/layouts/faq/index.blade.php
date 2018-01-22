<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
@include('layouts/general.head')
</head>
<body>
@extends('layouts/general.header')
<div class="col-md-8">
    
                 <h1 class="page-header">
                     Listado de Faq
                      <small>Modulo de Faqs</small>
                  </h1>

             
             <div class="alert alert-success alert-dismissible" role="alert">
             <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
             <strong>Info!</strong> 
            </div>
          

                <a href="{{ route('faq.create') }}" class="btn btn-success">
                <i class="glyphicon glyphicon-list"></i> New Faq
                </a>

             <hr>

        <table class="table table-bordered">
            <tr>
                <th>#</th>
                <th>Question</th>
                <th>Answer</th>
               
                <th colspan="2">Actions</th>
            </tr>

            @foreach($faqs as $faq)
        <tr>
            <td>{{ $faq->id }}</td>
            <td>{{ $faq->question }}</td>
            <td>{{ $faq->response }}</td>
           
            
            <td>
               
                <a href="{{ route('faq.edit',$faq->id) }}" class="btn btn-primary">
                    <i class="glyphicon glyphicon-edit"></i>
                </a>
            </td>
            <td>
                <button class="btn btn-danger" data-action="{{ route('faq.destroy',$faq->id) }}" data-name="{{ $faq->question }}" data-toggle="modal"
                 data-target="#confirm-delete">
                     <i class="glyphicon glyphicon-trash"></i>
                </button>
                              
            </td>
        </tr>

        @endforeach
        
       
        </table>
</div>
<div class="modal fade" id="confirm-delete" tabindex="-1"
                 role="dialog" aria-labelledby="myModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">

                        </div>
                        <div class="modal-body">
                            <p>¿Seguro que desea eliminar este
                                registro?</p>
                            <p class="nombre"></p>
                        </div>
                        <div class="modal-footer">
                            <form class="form-inline form-delete"
                                  role="form"
                                  method="POST"
                                  action="">
                                {!! method_field('DELETE') !!}
                                {!! csrf_field() !!}
                                <button type="button"
                                        class="btn btn-default"
                                        data-dismiss="modal">Cancelar
                                </button>
                                <button id="delete-btn"
                                        class="btn btn-danger"
                                        title="Eliminar">Eliminar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
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