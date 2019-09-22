@extends('_layouts.layout')
@section('meta_description')


@stop
@section('content')         
   
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <h1 class="page-title">404</h1>
                        <p class="page-description">Under Development
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
@stop

