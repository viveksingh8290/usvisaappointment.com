<?php $__env->startSection('contents'); ?>
     <?php echo $__env->make('dashboard.leftsidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
     <div class="all-content-wrapper"> 
        <?php echo $__env->make('dashboard.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- breadcome -->
            <div class="row" style="padding-top: 10px; background: #D11F04; margin-right: 0px;">
                <div class="col-xs-6 col-md-6 col-lg-6 col-sm-6 vcenter pull-left">
                    <ul class="pull-left vcenter" style="padding-left: 20px; color: #ffffff; padding-top: 10px;">                        
                        <li>
                            <?php if(session()->has('success_msg')): ?>
                             <span class="bread-blod"><?php echo e(session()->get('success_msg')); ?> </span>                           
                            <?php endif; ?>                                                       
                        </li>
                    </ul>
                </div>
                <div class="col-xs-6 col-md-6 col-lg-6 col-sm-6 vcenter pull-right">
                    <ul class="breadcome-menu vcenter" style="padding-right: 20px; padding-bottom: 10px;">
                        <li><a href="<?php echo e(url('dashboard')); ?>">Home</a> <span class="bread-slash">/</span></li>
                        
                        <li><span class="bread-blod">Section 4</span> </li>
                    </ul>
                </div>
            </div> 
        <!-- breadcome --> 
        <div class="single-product-tab-area mg-tb-15">
            <!-- Single pro tab review Start-->
            <div class="single-pro-review-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-tab-pro-inner">
                                <ul id="myTab3" class="tab-review-design">
                                    <li class="active"><a href="#description"><i class="fa fa-pencil" aria-hidden="true"></i> Section 4</a></li>
                                    
                                </ul>
                                <div id="myTabContent" class="tab-content custom-product-edit">                                    
                                    <div class="product-tab-list tab-pane fade active in" id="description">
                                        <?php echo Form::open(['route' => ['section4Update.update'], 'id' => 'section4Update', 'files' => true]); ?>

                                        <div class="row">                                            
                                             <?php if(!empty($section4)): ?>
                                                    <?php $__currentLoopData = $section4; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                   
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="review-content-section">
                                                                <div class="input-group mg-b-pro-edt">
                                                                    <div class="pro-edt-img">
                                                                        <img src="<?php echo e(url($product_data->image)); ?>" alt="" />
                                                                    </div>
                                                                </div>
                                                                <div class="input-group mg-b-pro-edt">
                                                                    <span class="input-group-addon">Image</span>
                                                                    <input type="file" class="form-control" name="image" placeholder="Banner Image">
                                                                    <input type="hidden" name="previous_image" value="<?php echo e($product_data->image); ?>">
                                                                </div>                                                                
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="review-content-section">                                
                                                                <div class="input-group mg-b-pro-edt">
                                                                    <span class="input-group-addon">Message</span>
                                                                    <input type="text" class="form-control" name="content" placeholder="message" value="<?php echo e($product_data->content); ?>">
                                                                </div>
                                                                <div class="input-group mg-b-pro-edt">
                                                                    <span class="input-group-addon">By</span>
                                                                    <input type="text" class="form-control" name="other_name" placeholder="Name" value="<?php echo e($product_data->other_name); ?>">
                                                                </div>
                                                                
                                                                <div class="input-group mg-b-pro-edt">
                                                                    <span class="input-group-addon">Active</span>
                                                                    <select name="active" class="form-control pro-edt-select form-control-primary">                                                     
                                                                        <option value="0" <?php if($product_data->active == '0'){ echo 'selected'; }?> >0</option> 
                                                                        <option value="1" <?php if($product_data->active == '1'){ echo 'selected'; }?> >1</option>   
                                                                    </select>
                                                                </div>                              
                                                                                                                            
                                                                
                                                                <input type="hidden" class="form-control" name="id" value="<?php echo e($product_data->id); ?>">
                                                            </div>
                                                        </div>                                                          
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>                                                                                    
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="text-center mg-b-pro-edt custom-pro-edt-ds">
                                                    <input type="submit" name="submit" value="Save" class="btn btn-primary waves-effect waves-light m-r-10" />
                                                    <input type="button" name="discard" value="Discard" class="btn btn-warning waves-effect waves-light" />                                                   
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    <?php echo Form::close(); ?>                                   
                                    
                                </div>
                            </div>
                            <!-- col-12 end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php echo $__env->make('dashboard.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tour\resources\views/dashboard/section4.blade.php ENDPATH**/ ?>