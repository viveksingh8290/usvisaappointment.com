<?php $__env->startSection('meta_description'); ?>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>		   
<?php if(!empty($aboutBanner)): ?>
    <?php $__currentLoopData = $aboutBanner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
    <?php
        $arr = json_decode($product_data->content, true);
    ?>
	<div class="page-header" style="background: url(<?php echo e($product_data->image); ?>) !important;">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <h1 class="page-title"><?php echo e($arr['main_heading']); ?></h1>
                    <p class="page-description"><?php echo e($arr['sub_heading']); ?>

                    </p>
                </div>
            </div>
        </div>
    </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
   <div class="content pdb0">
    <?php if(!empty($aboutSection2)): ?>
        <?php $__currentLoopData = $aboutSection2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
        <?php
            $arr = json_decode($product_data->content, true);
        ?> 
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <h2><?php echo e($arr['main_heading']); ?></h2>
                    <p class="lead"><?php echo e($arr['sub_heading']); ?> </p>
                    <p><?php echo e($arr['detail_text']); ?> </p>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="image-block"><img src="<?php echo e($product_data->image); ?>" alt="" class="img-fluid"></div>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
      

<?php if(!empty($aboutSection3)): ?>
    <?php $__currentLoopData = $aboutSection3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
    <?php
        $arr = json_decode($product_data->content, true);
    ?> 
        <div class="space-medium bg-light">
            <div class="container">
                <div class="row">
                    <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                        <div class="section-title text-center">
                            <!-- section title start-->
                            <h2><?php echo e($arr['main_heading']); ?></h2>
                            <p> <?php echo e($arr['sub_heading']); ?></p>
                        </div>
                        <!-- /.section title start-->
                    </div>
                </div>
                <div class="counter-section pdb0">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
                            <div class="counter-block text-center">
                                <h2 class="counter-title text-default"><?php echo e($arr['figure1']); ?>+</h2>
                                <p class="counter-text"><?php echo e($arr['figure1_text']); ?></p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
                            <div class="counter-block text-center">
                                <h2 class="counter-title text-secondary"><?php echo e($arr['figure2']); ?>+</h2>
                                <p class="counter-text"> <?php echo e($arr['figure2_text']); ?></p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
                            <div class="counter-block text-center">
                                <h2 class="counter-title text-warning"><?php echo e($arr['figure3']); ?>+</h2>
                                <p class="counter-text"><?php echo e($arr['figure3_text']); ?></p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
                            <div class="counter-block text-center">
                                <h2 class="counter-title text-default"><?php echo e($arr['figure4']); ?>+</h2>
                                <p class="counter-text"><?php echo e($arr['figure4_text']); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
        
    </div>
   

<?php $__env->stopSection(); ?>


<?php echo $__env->make('_layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tour\resources\views/about.blade.php ENDPATH**/ ?>