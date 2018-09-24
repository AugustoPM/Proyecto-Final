<!DOCTYPE html>
<html lang="en">
<head>
<?php echo $__env->make('layouts/general.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>
<body>
<?php echo $__env->make('layouts/general.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<?php echo $__env->make('layouts/index.slider', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts/about.service', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!-- Latest Products -->
<div class="content-lg container">
<div class="row margin-b-40">
    <div class="col-sm-6">
        <h2>Ultimos Productos</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna aliqua enim minim veniam exercitation</p>
    </div>
</div>
<!--// end row -->

<?php echo $__env->make('layouts/products.producto', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts/pricing.clients-logo', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts/index.testimonials-h', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts/pricing.info-pricing', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts/products.clients', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts/index.portafolio', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>



<?php echo $__env->make('layouts/general.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>
</html>