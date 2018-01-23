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
                     Listado de Faqs Description
                      <small>Modulo de Faqs Description</small>
                  </h1>

             
             <!-- <div class="alert alert-success alert-dismissible" role="alert">
             <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
             <strong>Info!</strong> 
            </div> -->
          

                <a href="{{ route('faq.create') }}" class="btn btn-success">
                <i class="glyphicon glyphicon-list"></i> New Faq
                </a>

             <hr>

             <table class="table table-bordered">
             <tr>
                 <th>#</th>
                 <th>Titulo</th>
                 <th>Parrafo 1</th>
                 <th>Parrafo 2</th>
                
                 <th colspan="2">Actions</th>
             </tr>
 
             @foreach($faq2s as $faq2)
         <tr>
             <td>{{ $faq2->id }}</td>
             <td>{{ $faq2->title }}</td>
             <td>{{ $faq2->description }}</td>
             <td>{{ $faq2->description2 }}</td>
             
             <td>
                
                 <button data-action="{{ route('faq.edit',$faq2->id) }}" class="btn btn-primary" data-toggle="modal"
                 data-target="#confirm-edit{{ $faq2->id }}">
                     <i class="glyphicon glyphicon-edit"></i>
                 </button>
             </td>
             <td>
                 <button class="btn btn-danger" data-action="{{ route('faq.destroy',$faq2->id) }}" data-name="{{ $faq2->title }}" data-toggle="modal"
                  data-target="#confirm-delete">
                      <i class="glyphicon glyphicon-trash"></i>
                 </button>
                               
             </td>
         </tr>
 
 <div class="modal fade" id="confirm-edit{{ $faq2->id }}" tabindex="-1"
                  role="dialog" aria-labelledby="myModalLabel"
                  aria-hidden="true">
                 <div class="modal-dialog">
                     <div class="modal-content">
                         <div class="modal-header">
                             <h3>Desea editar este registro?</h3>
                         </div>
                         <div class="modal-body">
                             
                         <form action="{{ route('faq.update', $faq2->id) }}" method="POST">
     {!! csrf_field() !!} <!--  asi evitamos que un robot use nuestro formulario se utiliza put para poder editar el otro controlador que ya fue creado -->
     {!! method_field('PUT') !!}
     <div class="form-group has-feedback">
         <input type="text" class="form-control" id="title" name="title" placeholder="Ingresa Titulo" value="{{ $faq2->title }}">
     </div>
 
    
     <div class="form-group has-feedback">
         <textarea class="form-control" id="description" name="description" placeholder="Ingresa Contenido">{{ $faq2->description }}</textarea>
     </div>

     <div class="form-group has-feedback">
         <textarea class="form-control" id="description2" name="description2" placeholder="Ingresa Contenido">{{ $faq2->description2 }}</textarea>
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

              @include('admin.footer')
</body>
</html>