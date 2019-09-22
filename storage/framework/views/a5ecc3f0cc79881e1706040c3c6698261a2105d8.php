<?php $__env->startSection('meta_description'); ?>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>		   

	<div class="slider">
        <div class="slider-carsoule owl-carousel owl-theme">
        <?php if(!empty($banner)): ?>
            <?php $__currentLoopData = $banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
            <?php
                $arr = json_decode($product_data->content, true);
            ?>
            <div class="item">
                <img src="<?php echo e($product_data->image); ?>" alt="USA Visa">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-sm-8 col-md-9 col-8">
                            <div class="slider-captions">  
                                <h1 class="slider-title dotted-line"><?php echo e($arr['main_heading']); ?></h1>
                                <p class="slider-text"> <?php echo e($arr['sub_heading']); ?> </p>
                                <a href="<?php echo e($arr['button_action']); ?>" class="btn btn-default btn-lg"><?php echo e($arr['button_name']); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
        </div>
    </div>
    <div class="slanting-pattern"></div>
<?php if(!empty($section_2)): ?>
        <?php $__currentLoopData = $section_2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
        <?php
            $arr = json_decode($product_data->content, true);
        ?> 
    <div class="space-large">
        <div class="container">
            <div class="row">
                <div class="offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="section-title text-center">
                        <h2><?php echo e($arr['main_heading']); ?></h2>
                        <p> <?php echo e($arr['sub_heading']); ?></p>
                    </div>
                </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                <a href="<?php echo e($arr['button_action']); ?>" class="btn btn-default btn-lg"><?php echo e($arr['button_name']); ?></a>
            </div>
            </div>            
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>



    <div class="space-medium spaces">
        <div class="container">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
                    <?php if(!empty($section_3_text)): ?>
                        <?php $__currentLoopData = $section_3_text; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                        <?php
                            $arr = json_decode($product_data->content, true);
                        ?>
                        <div class="section-title text-center">
                            <!-- section title start-->
                            <h2><?php echo e($arr['main_heading']); ?> </h2>
                            <p class="lead"><?php echo e($arr['sub_heading']); ?> </p>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                    <!-- /.section title start-->
                </div>
            </div>
            <div class="space-medium pdb0">
                <div class="row">
                    <?php if(!empty($section_3_image)): ?>
                        <?php $__currentLoopData = $section_3_image; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-4 col-6">
                                <div class="country-block text-center">
                                    <div class="country-block-img mb30">
                                        <img src="<?php echo e($product_data->image); ?>" alt="" class="img-fluid flag-medium"></div>
                                    <h3 class="country-name"><?php echo e($product_data->other_name); ?></h3>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>             
                    
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="space-medium">      
        <div class="container">
        <?php if(!empty($section_4)): ?>
            <?php $__currentLoopData = $section_4; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="testimonial-img">
                        <img src="<?php echo e($product_data->image); ?>" alt="USA visa" class="img-fluid">
                        <span class="testimonial-badge"><i class="fa fa-quote-right"></i></span>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-6 col-12">
                    <div class="testimonial-block">
                       
                        <div class="testimonial-content">
                            <p class="testimonial-text">“<?php echo e($product_data->content); ?>”</p>
                        </div>
                        <div class="testimonial-info">
                            <h4 class="testimonial-name"><?php echo e($product_data->other_name); ?></h4>
                           
                        </div>
                       
                    </div>
                  
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>  
        </div>
    </div>
   

<?php $__env->stopSection(); ?>


<?php echo $__env->make('_layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/usvisbbi/public_html/resources/views/home.blade.php ENDPATH**/ ?>