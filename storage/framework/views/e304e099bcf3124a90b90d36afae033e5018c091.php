<div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 d-none d-sm-none d-lg-block d-xl-block">
                    <p class="welcome-text">

                        <marquee scrollamount="5" onmouseover="stop()" onmouseout="start()" style="color: #123b78;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</marquee></p>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="header-block">
                        <span class="header-link d-none d-xl-block"><a href="<?php echo e(url('talk-to-our-expert')); ?>" class="anchor-link">Talk to Our Expert</a></span>
                        <span class="header-link"><a href="tel:+91-123456789">+91-123456789</a></span>
                       
                        <span class="header-link"><a href="<?php echo e(url('application-step-one')); ?>" class="btn btn-default btn-sm">Apply Now</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <div class="header-classic">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12"><a href="/" class=""><img src="images/logo/usa-visa.png" alt="USA Visa"></a></div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
                    <div id="navigation" class="navigation">
                      <ul>
                            <li><a href="<?php echo e(url('home')); ?>">Home</a>
                            </li>
                            <li><a href="#">Visa</a>
                                 <ul>
                                    <li><a href="<?php echo e(url('B1')); ?>">B1</a></li>
                                    <li><a href="<?php echo e(url('B2')); ?>">B2</a></li>
                                    <li><a href="<?php echo e(url('B1-B2')); ?>">B1/B2</a></li>
                                    <li><a href="<?php echo e(url('J1')); ?>">J1</a></li>
                                    <li><a href="<?php echo e(url('F1')); ?>">F1</a></li>
                                    <li><a href="<?php echo e(url('C1-D')); ?>" onclick="c1d()">C1/D</a></li>
                                </ul>
                            </li>
                            <li><a href="<?php echo e(url('esta')); ?>">ESTA</a>
                            </li>
                            <li><a href="<?php echo e(url('embassy-info')); ?>">Embassy Info</a>
                            </li>
                            <li><a href="<?php echo e(url('about')); ?>">About Us</a>   
                            </li>                            
                            <li><a href="<?php echo e(url('contact-us')); ?>">Contact Us </a>                    
                            </li>
                         <li><a href="<?php echo e(url('application-step-one')); ?>">Apply For Visa</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script type="text/javascript">
    function c1d () {
        document.cookie = "url_path=c1d";
    }
</script><?php /**PATH C:\xampp\htdocs\usa_visa_latest\resources\views/_layouts/navbar.blade.php ENDPATH**/ ?>