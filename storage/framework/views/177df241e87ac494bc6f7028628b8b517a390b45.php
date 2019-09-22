<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">	
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />

	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">

		<?php $__env->startSection('meta_description'); ?>	

		<?php echo $__env->yieldSection(); ?>
		<?php $__env->startSection('meta_keywords'); ?>		

		<?php echo $__env->yieldSection(); ?>		
		
		<?php echo $__env->make('_layouts.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<script>
		window.Laravel = <?php echo json_encode([
		'csrfToken' => csrf_token(),
		]); ?>;
		</script>	
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>	
	</head>
	<body>	
		<?php
			if(!isset($_COOKIE['temp_user_id'])) {
			     	$cookie_name = "temp_user_id";
					$cookie_value = rand();
					setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 
			} 
		?>
            
            <?php echo $__env->make('_layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>          

                <?php $__env->startSection('slider'); ?>                    

                <?php echo $__env->yieldSection(); ?>
                <?php $__env->startSection('heading'); ?>

                <?php echo $__env->yieldSection(); ?>
                <?php $__env->startSection('content'); ?>                		

                <?php echo $__env->yieldSection(); ?>		

            <?php echo $__env->make('_layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	        <?php echo $__env->make('_layouts.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	</body>
</html><?php /**PATH C:\xampp\htdocs\tour\resources\views/_layouts/layout.blade.php ENDPATH**/ ?>