<!DOCTYPE html>
<html lang="en">
	<head> 
		<meta charset="utf-8">
	    <meta http-equiv="x-ua-compatible" content="ie=edge">
	    <title>Admin Panel - USA Visa</title>
	    <meta name="description" content="">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<?php $__env->startSection('meta_description'); ?>	

		<?php echo $__env->yieldSection(); ?>
		<?php $__env->startSection('meta_keywords'); ?>		

		<?php echo $__env->yieldSection(); ?>		
		<?php echo $__env->make('dashboard.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</head>
	<body>
		<?php $__env->startSection('contents'); ?>                		

        <?php echo $__env->yieldSection(); ?>
	    <?php echo $__env->make('dashboard.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</body>
</html><?php /**PATH C:\Users\OSAD\Desktop\tour\tour\resources\views/dashboard/layout.blade.php ENDPATH**/ ?>