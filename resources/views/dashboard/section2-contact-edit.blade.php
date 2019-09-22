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
                        
                        <li><span class="bread-blod">Contact us section 3</span> </li>
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
                                    <li class="active"><a href="#description"><i class="fa fa-pencil" aria-hidden="true"></i> Contact us section 3</a></li>
                                    
                                </ul>
                                <div id="myTabContent" class="tab-content custom-product-edit">                                    
                                    <div class="product-tab-list tab-pane fade active in" id="description">
                                        {!! Form::open(['route' => ['section2ContactUpdate.update'], 'id' => 'section2ContactUpdate', 'files' => true]) !!}
                                        <div class="row">                                            
                                             @if(!empty($section2))
                                                    @foreach($section2 as $product_data)
                                                   <?php                                                   
                                                        $arr = json_decode($product_data->content, true);
                                                    ?>

                                                       
                                                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                                            <div class="review-content-section">                                
                                                                <div class="input-group mg-b-pro-edt">
                                                                    <span class="input-group-addon">Main Heading Left</span>
                                                                    <input type="text" class="form-control" name="main_heading_left" placeholder="main_heading_left" value="{{ $arr['main_heading_left'] }}">
                                                                </div>
                                                                <div class="input-group mg-b-pro-edt">
                                                                    <span class="input-group-addon">Sub Heading Left</span>
                                                                    <input type="text" class="form-control" name="sub_heading_left" placeholder="sub_heading_left" value="{{ $arr['sub_heading_left'] }}">
                                                                </div>
                                                                <div class="input-group mg-b-pro-edt">
                                                                    <span class="input-group-addon">Main Heading Right</span>
                                                                    <input type="text" class="form-control" name="main_heading_right" placeholder="main_heading_right" value="{{ $arr['main_heading_right'] }}">
                                                                </div>
                                                                <div class="input-group mg-b-pro-edt">
                                                                    <span class="input-group-addon">Sub Heading Right</span>
                                                                    <input type="text" class="form-control" name="sub_heading_right" placeholder="sub_heading_right" value="{{ $arr['sub_heading_right'] }}">
                                                                </div>

                                                                <div class="input-group mg-b-pro-edt">
                                                                    <span class="input-group-addon">Phone </span>
                                                                    <input type="text" class="form-control" name="phone" placeholder="phone" value="{{ $arr['phone'] }}">
                                                                </div>
                                                                <div class="input-group mg-b-pro-edt">
                                                                    <span class="input-group-addon">Email</span>
                                                                    <input type="text" class="form-control" name="email" placeholder="email" value="{{ $arr['email'] }}">
                                                                </div>
                                                                <div class="input-group mg-b-pro-edt">
                                                                    <span class="input-group-addon">Inquiry </span>
                                                                    <input type="text" class="form-control" name="inquiry" placeholder="inquiry" value="{{ $arr['inquiry'] }}">
                                                                </div>
                                                                <div class="input-group mg-b-pro-edt">
                                                                    <span class="input-group-addon">Work </span>
                                                                    <input type="text" class="form-control" name="work" placeholder="work" value="{{ $arr['work'] }}">
                                                                </div>
                                                                <div class="input-group mg-b-pro-edt">
                                                                    <span class="input-group-addon">Feedback </span>
                                                                    <input type="text" class="form-control" name="feedback" placeholder="feedback" value="{{ $arr['feedback'] }}">
                                                                </div>
                                                                <div class="input-group mg-b-pro-edt">
                                                                    <span class="input-group-addon">alliance </span>
                                                                    <input type="text" class="form-control" name="alliance" placeholder="alliance" value="{{ $arr['alliance'] }}">
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