<?php $__env->startSection('contents'); ?>
     <?php echo $__env->make('dashboard.leftsidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="all-content-wrapper"> 
        <?php echo $__env->make('dashboard.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- breadcome -->
            <div class="row" style="padding-top: 30px; background: #D11F04; margin-right: 0px;">
                <div class="col-xs-6 col-md-6 col-lg-6 col-sm-6 vcenter pull-left">
                    <ul class="pull-left vcenter" style="padding-left: 20px; color: #ffffff;">                        
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
                        <li><span class="bread-blod">Visa Enquiry List</span> </li>
                    </ul>
                </div>
            </div> 
       <!-- breadcome -->  
        <div class="data-table-area mg-tb-15" >
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="height: 500px;">
                        <div class="sparkline13-list" style="height: 500px;">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Visa Enquiry <span class="table-project-n">List</span></h1>
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
                                                <th data-field="id">S.No</th>
                                                <th data-field="User Id">User Id</th>
                                                <th data-field="Name">Name</th>
                                                <th data-field="DOB">DOB</th>
                                                <th data-field="Email">Email</th>
                                                <th data-field="Nationality">Nationality</th>
                                                <th data-field="Created At">Created At</th>                                                                       
                                                <th data-field="action">Setting</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1 ;?>
                                            <?php if(isset($PersonalInfo)): ?>
                                                <?php $__currentLoopData = $PersonalInfo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td></td>
                                                        <td><?php echo e($i); ?></td>
                                                        <td><?php echo e($product_data->user_id); ?> </td>
                                                        <td><?php echo e($product_data->first_name); ?> <?php echo e($product_data->middle_name); ?> <?php echo e($product_data->last_name); ?></td>
                                                        <td><?php echo e($product_data->date_of_birth); ?> </td>
                                                        <td><?php echo e($product_data->email); ?></td>
                                                        <td><?php echo e($product_data->nationality); ?> </td>
                                                        <td><?php echo e($product_data->created_at); ?> </td>
                                                        
                                                        <td>                                        
                                                            <button data-toggle="tooltip" title="Edit" class="pd-setting-ed">
                                                                <a href="<?php echo e(url('application-step-one-view/'.$product_data->user_id)); ?>" target="_blank">
                                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                                </a>
                                                            </button>
                                                            <button data-toggle="tooltip" title="Trash" class="pd-setting-ed">
                                                                <a href="<?php echo e(url('visa-enquiry-trash/'.$product_data->user_id)); ?>" onclick="return confirm('Are you sure?')">
                                                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                                </a>                                                                
                                                            </button>
                                                        </td>                                           
                                                    </tr>
                                                    <?php $i++; ?>                                                 
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
                                                    <td>-</td>                                           <td>-</td>                       
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
<?php echo $__env->make('dashboard.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\OSAD\Desktop\tour\tour\resources\views/dashboard/visa-enquiry.blade.php ENDPATH**/ ?>