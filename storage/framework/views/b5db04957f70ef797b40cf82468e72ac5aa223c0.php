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
                        
                        <li><span class="bread-blod">About us section 3</span> </li>
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
                                    <li class="active"><a href="#description"><i class="fa fa-pencil" aria-hidden="true"></i> About us section 3</a></li>
                                    
                                </ul>
                                <div id="myTabContent" class="tab-content custom-product-edit">                                    
                                    <div class="product-tab-list tab-pane fade active in" id="description">
                                        <?php echo Form::open(['route' => ['section3AboutUpdate.update'], 'id' => 'section3AboutUpdate', 'files' => true]); ?>

                                        <div class="row">                                            
                                             <?php if(!empty($section3)): ?>
                                                    <?php $__currentLoopData = $section3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                   <?php                                                   
                                                        $arr = json_decode($product_data->content, true);
                                                    ?>

                                                       
                                                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                                            <div class="review-content-section">                                
                                                                <div class="input-group mg-b-pro-edt">
                                                                    <span class="input-group-addon">Main Heading</span>
                                                                    <input type="text" class="form-control" name="main_heading" placeholder="main_heading" value="<?php echo e($arr['main_heading']); ?>">
                                                                </div>
                                                                <div class="input-group mg-b-pro-edt">
                                                                    <span class="input-group-addon">Sub Heading</span>
                                                                    <input type="text" class="form-control" name="sub_heading" placeholder="sub_heading" value="<?php echo e($arr['sub_heading']); ?>">
                                                                </div>

                                                                <div class="input-group mg-b-pro-edt">
                                                                    <span class="input-group-addon">Figure 1 </span>
                                                                    <input type="text" class="form-control" name="figure1" placeholder="figure1" value="<?php echo e($arr['figure1']); ?>">
                                                                </div>
                                                                <div class="input-group mg-b-pro-edt">
                                                                    <span class="input-group-addon">Figure 1 Text</span>
                                                                    <input type="text" class="form-control" name="figure1_text" placeholder="figure1_text" value="<?php echo e($arr['figure1_text']); ?>">
                                                                </div>
                                                                <div class="input-group mg-b-pro-edt">
                                                                    <span class="input-group-addon">Figure 2 </span>
                                                                    <input type="text" class="form-control" name="figure2" placeholder="figure2" value="<?php echo e($arr['figure2']); ?>">
                                                                </div>
                                                                <div class="input-group mg-b-pro-edt">
                                                                    <span class="input-group-addon">Figure 2 Text </span>
                                                                    <input type="text" class="form-control" name="figure2_text" placeholder="figure2_text" value="<?php echo e($arr['figure2_text']); ?>">
                                                                </div>
                                                                <div class="input-group mg-b-pro-edt">
                                                                    <span class="input-group-addon">Figure 3 </span>
                                                                    <input type="text" class="form-control" name="figure3" placeholder="figure3" value="<?php echo e($arr['figure3']); ?>">
                                                                </div>
                                                                <div class="input-group mg-b-pro-edt">
                                                                    <span class="input-group-addon">Figure 3 Text </span>
                                                                    <input type="text" class="form-control" name="figure3_text" placeholder="figure3_text" value="<?php echo e($arr['figure3_text']); ?>">
                                                                </div>
                                                                <div class="input-group mg-b-pro-edt">
                                                                    <span class="input-group-addon">Figure 4 </span>
                                                                    <input type="text" class="form-control" name="figure4" placeholder="figure4" value="<?php echo e($arr['figure4']); ?>">
                                                                </div>
                                                                <div class="input-group mg-b-pro-edt">
                                                                    <span class="input-group-addon">Figure 4 Text </span>
                                                                    <input type="text" class="form-control" name="figure4_text" placeholder="figure4_text" value="<?php echo e($arr['figure4_text']); ?>">
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
<?php echo $__env->make('dashboard.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tour\resources\views/dashboard/section3-about-edit.blade.php ENDPATH**/ ?>