
<?php $__env->startSection('meta_description'); ?>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>         

<?php if(!empty($contactBanner)): ?>
    <?php $__currentLoopData = $contactBanner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
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

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
    

    <div class="clearfix"></div>
<?php if(!empty($contactSection2)): ?>
    <?php $__currentLoopData = $contactSection2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
    <?php
        $arr = json_decode($product_data->content, true);
    ?> 
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-7 col-sm-12 col-12">
                    <div class="contact-form-head">
                        <h2 class="mb0"><?php echo e($arr['main_heading_left']); ?></h2>
                        <p><?php echo e($arr['sub_heading_left']); ?></p>
                    </div>
                    
                    <div class="contact-form mt30">

                        <?php echo Form::open(['route' => ['contact.insert'], 'id' => 'contactUsForm']); ?>


                            <div class="form-group">
                                <label for="name">Name <span class="required">*</span></label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required="">
                            </div>
                            <div class="form-group">
                                <label for="mobileno">Mobile No <span class="required">*</span></label>
                                <input type="text" class="form-control" id="mobileno" name="phone" placeholder="Mobile No" required="">
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address <span class="required">*</span></label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required="">
                            </div>
                          
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-default">Submit</button>
                            </div>
                        <?php echo Form::close(); ?>

                    </div>
                </div>
                <div class="offset-xl-1 col-xl-6 offset-lg-1 col-lg-5 col-md-5 col-sm-12 col-12">
                    <h2><?php echo e($arr['main_heading_right']); ?></h2>
                    <p><?php echo e($arr['sub_heading_right']); ?></p>
                    <h4 class="mb0">Phone</h4>
                    <p><?php echo e($arr['phone']); ?></p>
                    <div class="row mb30">
                        <div class="col">
                            <h4 class="mb0">Email</h4>
                            <p><?php echo e($arr['email']); ?></p>
                        </div>
                    </div>
                    <div class="row mb20">
                        <div class="col mb10">
                            <h4 class="mb0">Inquire with us</h4>
                            <p><?php echo e($arr['inquiry']); ?></p>
                        </div>
                        <div class="col mb10">
                            <h4 class="mb0">Send your feedback</h4>
                            <p><?php echo e($arr['feedback']); ?></p>
                        </div>
                    </div>
                    <div class="row mb20">
                        <div class="col mb10">
                            <h4 class="mb0">Work with us</h4>
                            <p><?php echo e($arr['work']); ?></p>
                        </div>
                        <div class="col mb10">
                            <h4 class="mb0">For Alliance with us</h4>
                            <p><?php echo e($arr['alliance']); ?></p>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('_layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/usvisbbi/public_html/resources/views/contact.blade.php ENDPATH**/ ?>