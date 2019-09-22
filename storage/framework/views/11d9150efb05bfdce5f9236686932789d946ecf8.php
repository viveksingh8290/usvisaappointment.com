<?php $__env->startSection('meta_description'); ?>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?> 
    <?php if(!empty($embassyInfoPage)): ?>
    <?php $__currentLoopData = $embassyInfoPage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
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
<?php if(!empty($embassyInfoSection2)): ?>
        <?php $__currentLoopData = $embassyInfoSection2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
        <?php
            $arr = json_decode($product_data->content, true);
        ?> 
   <div class="content pdb0">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h2><?php echo e($arr['main_heading']); ?></h2>
                    <p class="lead"><?php echo e($arr['sub_heading']); ?></p>
                    <p><?php echo e($arr['detail_text']); ?>  </p>
                    <p class="text-default"><?php echo e($arr['extra_text']); ?></p>
                </div>
                
            </div>
        </div>  
    </div>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('_layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\OSAD\Desktop\tour\tour\resources\views/embassy-info.blade.php ENDPATH**/ ?>