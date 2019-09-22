@extends('_layouts.layout')
@section('meta_description')


@stop
@section('content')		   
@if(!empty($aboutBanner))
    @foreach($aboutBanner as $product_data)  
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
                </div>
            </div>
        </div>
    </div>
  @endforeach
@endif
   <div class="content pdb0">
    @if(!empty($aboutSection2))
        @foreach($aboutSection2 as $product_data)  
        <?php
            $arr = json_decode($product_data->content, true);
        ?> 
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <h2>{{ $arr['main_heading'] }}</h2>
                    <p class="lead">{{ $arr['sub_heading'] }} </p>
                    <p>{{ $arr['detail_text'] }} </p>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="image-block"><img src="{{ $product_data->image }}" alt="" class="img-fluid"></div>
                </div>
            </div>
        </div>
        @endforeach
    @endif
      

@if(!empty($aboutSection3))
    @foreach($aboutSection3 as $product_data)  
    <?php
        $arr = json_decode($product_data->content, true);
    ?> 
        <div class="space-medium bg-light">
            <div class="container">
                <div class="row">
                    <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                        <div class="section-title text-center">
                            <!-- section title start-->
                            <h2>{{ $arr['main_heading'] }}</h2>
                            <p> {{ $arr['sub_heading'] }}</p>
                        </div>
                        <!-- /.section title start-->
                    </div>
                </div>
                <div class="counter-section pdb0">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
                            <div class="counter-block text-center">
                                <h2 class="counter-title text-default">{{ $arr['figure1'] }}+</h2>
                                <p class="counter-text">{{ $arr['figure1_text'] }}</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
                            <div class="counter-block text-center">
                                <h2 class="counter-title text-secondary">{{ $arr['figure2'] }}+</h2>
                                <p class="counter-text"> {{ $arr['figure2_text'] }}</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
                            <div class="counter-block text-center">
                                <h2 class="counter-title text-warning">{{ $arr['figure3'] }}+</h2>
                                <p class="counter-text">{{ $arr['figure3_text'] }}</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
                            <div class="counter-block text-center">
                                <h2 class="counter-title text-default">{{ $arr['figure4'] }}+</h2>
                                <p class="counter-text">{{ $arr['figure4_text'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
@endif
        
    </div>
   

@stop

