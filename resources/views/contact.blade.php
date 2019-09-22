@extends('_layouts.layout')
@section('meta_description')


@stop
@section('content')         

@if(!empty($contactBanner))
    @foreach($contactBanner as $product_data)  
    <?php
        $arr = json_decode($product_data->content, true);
    ?>   
        <div class="page-header" style="background: url({{ $product_data->image }}) !important;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <h1 class="page-title">{{ $arr['main_heading'] }}</h1>
                        <p class="page-description">{{ $arr['sub_heading'] }}
                        </p>
                        <span class="success-message">
                            @if(session()->has('message'))
                                <div class="alert alert-success text-center">
                                    {{ session()->get('message') }}
                                </div>
                                @endif
                        </span>
                    </div>
                </div>
            </div>
        </div>

    @endforeach
@endif
    

    <div class="clearfix"></div>
@if(!empty($contactSection2))
    @foreach($contactSection2 as $product_data)  
    <?php
        $arr = json_decode($product_data->content, true);
    ?> 
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-7 col-sm-12 col-12">
                    <div class="contact-form-head">
                        <h2 class="mb0">{{ $arr['main_heading_left'] }}</h2>
                        <p>{{ $arr['sub_heading_left'] }}</p>
                    </div>
                    
                    <div class="contact-form mt30">

                        {!! Form::open(['route' => ['contact.insert'], 'id' => 'contactUsForm']) !!}

                            <div class="form-group">
                                <label for="name">Name <span class="required">*</span></label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required="">
                            </div>
                            <div class="form-group">
                                <label for="mobileno">Mobile No <span class="required">*</span></label>
                                <input type="text" class="form-control" id="mobileno" name="phone" placeholder="Mobile No" required="">
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address <span class="required">*</span></label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required="">
                            </div>
                          
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-default">Submit</button>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
                <div class="offset-xl-1 col-xl-6 offset-lg-1 col-lg-5 col-md-5 col-sm-12 col-12">
                    <h2>{{ $arr['main_heading_right'] }}</h2>
                    <p>{{ $arr['sub_heading_right'] }}</p>
                    <h4 class="mb0">Phone</h4>
                    <p>{{ $arr['phone'] }}</p>
                    <div class="row mb30">
                        <div class="col">
                            <h4 class="mb0">Email</h4>
                            <p>{{ $arr['email'] }}</p>
                        </div>
                    </div>
                    <div class="row mb20">
                        <div class="col mb10">
                            <h4 class="mb0">Inquire with us</h4>
                            <p>{{ $arr['inquiry'] }}</p>
                        </div>
                        <div class="col mb10">
                            <h4 class="mb0">Send your feedback</h4>
                            <p>{{ $arr['feedback'] }}</p>
                        </div>
                    </div>
                    <div class="row mb20">
                        <div class="col mb10">
                            <h4 class="mb0">Work with us</h4>
                            <p>{{ $arr['work'] }}</p>
                        </div>
                        <div class="col mb10">
                            <h4 class="mb0">For Alliance with us</h4>
                            <p>{{ $arr['alliance'] }}</p>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endif

@stop

