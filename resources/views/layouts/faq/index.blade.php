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
               
                <button data-action="{{ route('faq.edit',$faq->id) }}" class="btn btn-primary" data-toggle="modal"
                data-target="#confirm-edit{{ $faq->id }}">
                    <i class="glyphicon glyphicon-edit"></i>
                </button>
            </td>
            <td>
                <button class="btn btn-danger" data-action="{{ route('faq.destroy',$faq->id) }}" data-name="{{ $faq->question }}" data-toggle="modal"
                 data-target="#confirm-delete">
                     <i class="glyphicon glyphicon-trash"></i>
                </button>
                              
            </td>
        </tr>

<div class="modal fade" id="confirm-edit{{ $faq->id }}" tabindex="-1"
                 role="dialog" aria-labelledby="myModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3>Desea editar este registro?</h3>
                        </div>
                        <div class="modal-body">
                            
                        <form action="{{ route('faq.update', $faq->id) }}" method="POST">
    {!! csrf_field() !!} <!--  asi evitamos que un robot use nuestro formulario se utiliza put para poder editar el otro controlador que ya fue creado -->
    {!! method_field('PUT') !!}
    <div class="form-group has-feedback">
        <input type="text" class="form-control" id="question" name="question" placeholder="Ingresa Titulo" value="{{ $faq->question }}">
    </div>

   
    <div class="form-group has-feedback">
        <textarea class="form-control" id="response" name="response" placeholder="Ingresa Contenido">{{ $faq->response }}</textarea>
    </div>

   
    </form>
                        </div>
                        <div class="modal-footer">
                            <form class="form-inline form-edit"
                                  role="form"
                                  method="POST"
                                  action="">
    <button class="form-control btn btn-warning">
    Guardar
    </button>
                                
                                <button type="button"
                                        class="btn btn-default"
                                        data-dismiss="modal">Cancelar
                                </button>
                                <button id="edit-btn"
                                        class="btn btn-primary"
                                        title="editar">Editar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
              </div>  
        @endforeach
        
       
        </table>
</div>
<div class="modal fade" id="confirm-delete" tabindex="-1"
                 role="dialog" aria-labelledby="myModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">

                            <h3>¿Seguro que desea eliminar este
                                registro?</h3>
                        </div>
                        <div class="modal-body">
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

              @include('admin.footerAdmin')

<script type="application/javascript">
        $('#confirm-delete').on('show.bs.modal', function (e) {
            $(this).find('.form-delete').attr('action', $(e.relatedTarget).data('action'));
            $(this).find('.nombre').text($(e.relatedTarget).data('name'));
        });
    </script>
</body>
</html>