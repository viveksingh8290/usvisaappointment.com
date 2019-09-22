@extends('dashboard.layout')
@section('contents')
     @include('dashboard.leftsidebar')
     <div class="all-content-wrapper"> 
        @include('dashboard.navbar')
        <!-- breadcome -->
            <div class="row" style="padding-top: 10px; background: #D11F04; margin-right: 0px;">
                <div class="col-xs-6 col-md-6 col-lg-6 col-sm-6 vcenter pull-left">
                    <ul class="pull-left vcenter" style="padding-left: 20px; color: #ffffff; padding-top: 10px;">                        
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
                        <li><a href="{{ url('edit-section2-banner') }}">Section 2</a> <span class="bread-slash">/</span></li>
                        <li><span class="bread-blod">Update</span> </li>
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
                                    <li class="active"><a href="#description"><i class="fa fa-pencil" aria-hidden="true"></i> Section 2 Update</a></li>
                                    
                                </ul>
                                <div id="myTabContent" class="tab-content custom-product-edit">                                    
                                    <div class="product-tab-list tab-pane fade active in" id="description">
                                        {!! Form::open(['route' => ['section2.update'], 'id' => 'section2Form', 'files' => true]) !!}
                                        <div class="row">                                            
                                             @if(!empty($section2))
                                                    @foreach($section2 as $product_data)
                                                    <?php
                                                        $arr = json_decode($product_data->content, true);
                                                    ?>
                                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                            
                                                        </div>
                                                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                                            <div class="review-content-section">                                
                                                                <div class="input-group mg-b-pro-edt">
                                                                    <span class="input-group-addon">Main Heading</span>
                                                                    <input type="text" class="form-control" name="main_heading" placeholder=" Main Heading" value="{{ $arr['main_heading'] }}">
                                                                </div>
                                                                <div class="input-group mg-b-pro-edt">
                                                                    <span class="input-group-addon">Sub Heading</span>
                                                                    <input type="text" class="form-control" name="sub_heading" placeholder=" Sub Heading" value="{{ $arr['sub_heading'] }}">
                                                                </div>
                                                                <div class="input-group mg-b-pro-edt">
                                                                    <span class="input-group-addon">Button Name</span>
                                                                    <input type="text" class="form-control" name="button_name" placeholder="button_name" value="{{ $arr['button_name'] }}">
                                                                </div>
                                                                <div class="input-group mg-b-pro-edt">
                                                                    <span class="input-group-addon">Button Action</span>
                                                                    <input type="text" class="form-control" name="button_action" placeholder="button_action" value="{{ $arr['button_action'] }}">
                                                                </div>
                                                                <div class="input-group mg-b-pro-edt">
                                                                    <span class="input-group-addon">Active</span>
                                                                    <select name="active" class="form-control pro-edt-select form-control-primary">                                                     
                                                                        <option value="0" <?php if($product_data->active == '0'){ echo 'selected'; }?> >0</option> 
                                                                        <option value="1" <?php if($product_data->active == '1'){ echo 'selected'; }?> >1</option>   
                                                                    </select>
                                                                </div>                              
                                                                                                                            
                                                                
                                                                <input type="hidden" class="form-control" name="id" value="{{ $product_data->id }}">
                                                            </div>
                                                        </div>                                                          
                                                    @endforeach
                                            @endif                                                                                    
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