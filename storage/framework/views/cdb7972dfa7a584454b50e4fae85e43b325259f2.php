<!DOCTYPE html>
<html lang="en">
<head>
<?php echo $__env->make('layouts/general.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>
<body>
<?php echo $__env->make('layouts/general.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<?php echo $__env->make('layouts/index.slider', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts/about.service', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts/index.lastest-products', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts/pricing.clients-logo', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts/index.testimonials-h', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts/pricing.info-pricing', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts/index.client-1', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts/index.portafolio', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>



<?php echo $__env->make('layouts/general.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>
</html>