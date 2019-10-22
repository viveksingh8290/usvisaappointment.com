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
                        <li><a href="{{ url('faq-add') }}">FAQ Add</a> <span class="bread-slash">/</span></li>
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
                                    <li class="active"><a href="#description"><i class="fa fa-pencil" aria-hidden="true"></i>FAQ Add</a></li>
                                </ul>
                                <div id="myTabContent" class="tab-content custom-product-edit">                                    
                                    <div class="product-tab-list tab-pane fade active in" id="description">
                                        {!! Form::open(['route' => ['faq.add'], 'id' => 'faqadd', 'files' => true]) !!}
                                        <div class="row">
                                            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                                <div class="review-content-section">                                
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon">Question</span>
                                                        <input type="text" class="form-control" name="ques" placeholder="Question" value="">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon">Answer</span>
                                                        <input type="text" class="form-control" name="ans" placeholder="Answer" value="">
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