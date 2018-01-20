<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<?php echo $__env->make('layouts/general.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>
<body>
<?php echo $__env->make('layouts/general.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<?php echo $__env->make('layouts/faq.parallax-faq', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts/faq.questions', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts/faq.gq', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts/pricing.info-pricing', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>





<?php echo $__env->make('layouts/general.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>
</html>

