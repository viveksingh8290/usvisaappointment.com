<?php $__env->startSection('contents'); ?>
     <?php echo $__env->make('dashboard.leftsidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="all-content-wrapper"> 
        <?php echo $__env->make('dashboard.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- breadcome -->
            <div class="row" style="padding-top: 30px; background: #D11F04; margin-right: 0px;">
                <div class="col-xs-6 col-md-6 col-lg-6 col-sm-6 vcenter pull-left">
                    <ul class="pull-left vcenter" style="padding-left: 20px; color: #ffffff; padding-top: 50px;">                        
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
                        <li><span class="bread-blod">Banner's List</span> </li>
                    </ul>
                </div>
            </div> 
        <!-- breadcome -->  
        <div class="data-table-area mg-tb-15" >
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="min-height: 500px;">
                        <div class="sparkline13-list" style="min-height: 500px;">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Banner's <span class="table-project-n">List</span></h1>
                                </div>
                                <div class="add-product">
                                    <a href="<?php echo e(url('add-banner-home')); ?>">Add Banner</a>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar">
                                        <select class="form-control">
                                                <option value="">Export Basic</option>
                                                <option value="all">Export All</option>
                                                <option value="selected">Export Selected</option>
                                            </select>
                                    </div>
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <th data-field="state" data-checkbox="true"></th>                            
                                                <th data-field="Image">Image</th>
                                                <th data-field="Main Heading">Main Heading</th>
                                                <th data-field="Sub Heading">Sub Heading</th>
                                                <th data-field="Button Name">Button Name / Action</th>
                                                <th data-field="Active">Active</th>
                                                <th data-field="Updated At">Updated At</th>
                                                <th data-field="Created At">Created At</th>                                                                       
                                                <th data-field="action">Setting</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            <?php if(isset($banner)): ?>
                                                <?php $__currentLoopData = $banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php
                                                    $arr = json_decode($product_data->content, true);
                                                ?>
                                                    <tr>
                                                        <td></td>                                                        
                                                        <td><img src="<?php echo e($product_data->image); ?>" alt="banner image" style="width: 300px; height: 100px;">
                                                        </td>
                                                        <td><?php echo e($arr['main_heading']); ?> </td>
                                                        <td><?php echo e($arr['sub_heading']); ?> </td>
                                                        <td><?php echo e($arr['button_name']); ?> / <?php echo e($arr['button_action']); ?></td>
                                                        <td><?php echo e($product_data->active); ?> </td>
                                                        <td><?php echo e($product_data->updated_at); ?> </td>
                                                        <td><?php echo e($product_data->created_at); ?> </td>
                                                        
                                                        <td>                                        
                                                            <button data-toggle="tooltip" title="Edit" class="pd-setting-ed">
                                                                <a href="<?php echo e(url('banner-edit/'.$product_data->id)); ?>">
                                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                                </a>
                                                            </button>
                                                            <button data-toggle="tooltip" title="Trash" class="pd-setting-ed">
                                                                <a href="<?php echo e(url('banner-trash/'.$product_data->id)); ?>" onclick="return confirm('Are you sure?')">
                                                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                                </a>                                                                
                                                            </button>
                                                        </td>                                           
                                                    </tr>
                                                    
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                
                                            <?php else: ?>
                                                <tr>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>                                                                  
                                                </tr>
                                            <?php endif; ?>                                        
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
        <?php echo $__env->make('dashboard.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tour\resources\views/dashboard/banner-section-home.blade.php ENDPATH**/ ?>