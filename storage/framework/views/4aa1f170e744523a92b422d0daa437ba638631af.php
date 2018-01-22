<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<?php echo $__env->make('layouts/general.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>
<body>

<div class="col-md-8">
    
                 <h1 class="page-header">
                     Listado de Faq
                      <small>Modulo de Faqs</small>
                  </h1>

             
             <div class="alert alert-success alert-dismissible" role="alert">
             <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
             <strong>Info!</strong> 
            </div>
          

                <a href="<?php echo e(route('faq.create')); ?>" class="btn btn-success">
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

            <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($faq->id); ?></td>
            <td><?php echo e($faq->question); ?></td>
            <td><?php echo e($faq->response); ?></td>
           
            
            <td>
               
                <a href="edit.html" class="btn btn-primary">
                    <i class="glyphicon glyphicon-edit"></i>
                </a>
            </td>
            <td>
                <button class="btn btn-danger" data-action="destroy.html" data-name="<?php echo e($faq->question); ?>" data-toggle="modal"
                 data-target="#confirm-delete">
                     <i class="glyphicon glyphicon-trash"></i>
                </button>
                              
            </td>
        </tr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
        <tr>
            <td colspan="8">prueba </td>
        </tr>
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
                                <?php echo method_field('DELETE'); ?>

                                <?php echo csrf_field(); ?>

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

</body>
</html>
<?php echo $__env->make('layouts/general.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>