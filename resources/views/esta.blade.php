@extends('_layouts.layout')
@section('meta_description')


@stop
@section('content')	
	@if(!empty($estaPage))
    @foreach($estaPage as $product_data)  
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
@if(!empty($estaPageSection2))
        @foreach($estaPageSection2 as $product_data)  
        <?php
            $arr = json_decode($product_data->content, true);
        ?> 
   <div class="content pdb0">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h2>{{ $arr['main_heading'] }}</h2>
                    <p class="lead">{{ $arr['sub_heading'] }}</p>
                    <p>{{ $arr['detail_text'] }}  </p>
                    <p class="text-default">{{ $arr['extra_text'] }}</p>
                </div>
                
            </div>
        </div>  
    </div>
     @endforeach
  @endif
@stop