<?php $__env->startSection('contents'); ?>	

<div class="color-line"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="back-link back-backend">
                    <a href="<?php echo e(url('home')); ?>" class="btn btn-primary">Back to Website</a>
                </div>
            </div> 
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
            <div class="col-md-4 col-md-4 col-sm-4 col-xs-12">
                <div class="text-center m-b-md custom-login">
                    <h3>PLEASE PROVE YOUR IDENTITY</h3>
                    <p>Please enter your credential correctly, After 3 wrong attempts your id will be blocked !!</p>
                </div>
                <div class="hpanel">
                    <div class="panel-body">
                        <form action="login" id="loginForm" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label class="control-label" for="username">Email</label>
                                <input type="email" placeholder="example@example.com" title="Please enter your email id" required="" name="email" id="email" class="form-control">
                                <span class="help-block small">Your unique email id</span>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" id="password" title="Please enter your password" placeholder="*********" required="" name="password" class="form-control">
                                <span class="help-block small">Your strong password</span>
                            </div>                            
                            <button class="btn btn-success btn-block loginbtn" type="submit">Login</button>
                            <a class="btn btn-default btn-block" href="#">Forgot Password</a>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\OSAD\Desktop\tour\tour\resources\views/dashboard/login.blade.php ENDPATH**/ ?>