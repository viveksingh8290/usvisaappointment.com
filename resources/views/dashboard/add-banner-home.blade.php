@extends('dashboard.layout')
@section('contents')
     @include('dashboard.leftsidebar')
     <div class="all-content-wrapper"> 
        @include('dashboard.navbar')
        <!-- breadcome -->
            <div class="row" style="padding-top: 40px; background: #D11F04; margin-right: 0px;">
                <div class="col-xs-6 col-md-6 col-lg-6 col-sm-6 vcenter pull-left">
                    <ul class="pull-left vcenter" style="padding-left: 20px; color: #ffffff; padding-top: 50px;">                        
                        <li>
                            @if(session()->has('success_msg'))
                             <span class="bread-blod">{{ session()->get('success_msg') }} </span>     
                            @endif                                                       
                        </li>
                    </ul>
                </div>
                <div class="col-xs-6 col-md-6 col-lg-6 col-sm-6 vcenter pull-right">
                    <ul class="breadcome-menu vcenter" style="padding-right: 20px; padding-bottom: 10px;">
                        <li><a href="{{ url('dashboard') }}">Home</a> <span class="bread-slash">/</span></li>
                        <li><a href="{{ url('banner-section-home') }}">Banner</a> <span class="bread-slash">/</span></li>
                        <li><span class="bread-blod">Add</span> </li>
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
                                    <li class="active"><a href="#Banner"><i class="fa fa-pencil" aria-hidden="true"></i> Add Banner</a></li>
                                    
                                </ul>
                                <div id="myTabContent" class="tab-content custom-product-edit">                                    
                                    <div class="product-tab-list tab-pane fade active in" id="description">
                                        {!! Form::open(['route' => ['bannerAddHome.insert'], 'id' => 'bannerAddHome', 'files' => true]) !!}
                                        <div class="row">                                            
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="review-content-section">                                
                                                                <div class="input-group mg-b-pro-edt">
                                                                    <span class="input-group-addon">Main Heading</span>
                                                                    <input type="text" class="form-control" name="main_heading" placeholder="Main Heading" />
                                                                </div>
                                                                <div class="input-group mg-b-pro-edt">
                                                                    <span class="input-group-addon">Sub Heading</span>
                                                                    <input type="text" class="form-control" name="sub_heading" placeholder="Sub Heading" />
                                                                </div>
                                                                <div class="input-group mg-b-pro-edt">
                                                                    <span class="input-group-addon">Button Name</span>
                                                                    <input type="text" class="form-control" name="button_name" placeholder="Package Sale Price" />
                                                                </div>
                                                                <div class="input-group mg-b-pro-edt">
                                                                    <span class="input-group-addon">Button Action</span>
                                                                    <input type="text" class="form-control" name="button_action" placeholder="Package Sale Price" />
                                                                </div>
                                                                <div class="input-group mg-b-pro-edt">
                                                                    <span class="input-group-addon">Banner Image</span>
                                                                    <input type="file" class="form-control" name="banner_image" required >
                                                                </div>    
                                                                
                                                            </div>
                                                        </div>                                                          
                                                             
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
                                    {!! Form::close() !!}                                   
                                    
                                </div>
                            </div>
                            <!-- col-12 end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @include('dashboard.footer')
    </div>

@endsection