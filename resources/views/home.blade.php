@extends('_layouts.layout')
@section('meta_description')


@stop
@section('content')		   

	<div class="slider">
        <div class="slider-carsoule owl-carousel owl-theme">
        @if(!empty($banner))
            @foreach($banner as $product_data)  
            <?php
                $arr = json_decode($product_data->content, true);
            ?>
            <div class="item">
                <img src="{{ $product_data->image }}" alt="USA Visa">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-sm-8 col-md-9 col-8">
                            <div class="slider-captions">  
                                <h1 class="slider-title dotted-line">{{ $arr['main_heading'] }}</h1>
                                <p class="slider-text"> {{ $arr['sub_heading'] }} </p>
                                <a href="{{ $arr['button_action'] }}" class="btn btn-default btn-lg">{{ $arr['button_name'] }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        @endif
        </div>
    </div>
    <div class="slanting-pattern"></div>
@if(!empty($section_2))
        @foreach($section_2 as $product_data)  
        <?php
            $arr = json_decode($product_data->content, true);
        ?> 
    <div class="space-large">
        <div class="container">
            <div class="row">
                <div class="offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="section-title text-center">
                        <h2>{{ $arr['main_heading'] }}</h2>
                        <p> {{ $arr['sub_heading'] }}</p>
                    </div>
                </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                <a href="{{ $arr['button_action'] }}" class="btn btn-default btn-lg">{{ $arr['button_name'] }}</a>
            </div>
            </div>            
        </div>
    </div>
    @endforeach
@endif



    <div class="space-medium spaces">
        <div class="container">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
                    @if(!empty($section_3_text))
                        @foreach($section_3_text as $product_data)  
                        <?php
                            $arr = json_decode($product_data->content, true);
                        ?>
                        <div class="section-title text-center">
                            <!-- section title start-->
                            <h2>{{ $arr['main_heading'] }} </h2>
                            <p class="lead">{{ $arr['sub_heading'] }} </p>
                        </div>
                        @endforeach
                    @endif
                    <!-- /.section title start-->
                </div>
            </div>
            <div class="space-medium pdb0">
                <div class="row">
                    @if(!empty($section_3_image))
                        @foreach($section_3_image as $product_data)
                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-4 col-6">
                                <div class="country-block text-center">
                                    <div class="country-block-img mb30">
                                        <img src="{{ $product_data->image }}" alt="" class="img-fluid flag-medium"></div>
                                    <h3 class="country-name">{{ $product_data->other_name }}</h3>
                                </div>
                            </div>
                        @endforeach
                    @endif             
                    
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="space-medium">      
        <div class="container">
        @if(!empty($section_4))
            @foreach($section_4 as $product_data)
                
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="testimonial-img">
                        <img src="{{ $product_data->image }}" alt="USA visa" class="img-fluid">
                        <span class="testimonial-badge"><i class="fa fa-quote-right"></i></span>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-6 col-12">
                    <div class="testimonial-block">
                       
                        <div class="testimonial-content">
                            <p class="testimonial-text">“{{ $product_data->content }}”</p>
                        </div>
                        <div class="testimonial-info">
                            <h4 class="testimonial-name">{{ $product_data->other_name }}</h4>
                           
                        </div>
                       
                    </div>
                  
                </div>
            </div>
            @endforeach
        @endif  
        </div>
    </div>
   

@stop

