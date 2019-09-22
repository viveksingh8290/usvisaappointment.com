<?php $__env->startSection('meta_description'); ?>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>         
   
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <h1 class="page-title">404</h1>
                        <p class="page-description">Under Development
                        </p>
                        <span class="success-message">
                            <?php if(session()->has('message')): ?>
                                <div class="alert alert-success text-center">
                                    <?php echo e(session()->get('message')); ?>

                                </div>
                                <?php endif; ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('_layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tour\resources\views/404.blade.php ENDPATH**/ ?>