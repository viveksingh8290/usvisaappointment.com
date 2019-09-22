@extends('dashboard.layout')
@section('contents')
     @include('dashboard.leftsidebar')
    <div class="all-content-wrapper"> 
        @include('dashboard.navbar')
        <!-- breadcome -->
            <div class="row" style="padding-top: 30px; background: #D11F04; margin-right: 0px;">
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
                        <li><span class="bread-blod">Section 3 Images</span> </li>
                    </ul>
                </div>
            </div> 
        <!-- breadcome -->  
        <div class="data-table-area mg-tb-15" >
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="min-height: 500px;">
                        <div class="sparkline13-list" style="min-height: 500px;">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Section 3 Images <span class="table-project-n">List</span></h1>
                                </div>
                                <div class="add-product">
                                    <a data-toggle="modal" data-target="#section3AddImage" class="pointer" style="cursor: pointer;">Add New Images</a>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar">
                                        <select class="form-control">
                                                <option value="">Export Basic</option>
                                                <option value="all">Export All</option>
                                                <option value="selected">Export Selected</option>
                                            </select>
                                    </div>
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <th data-field="state" data-checkbox="true"></th>                            
                                                <th data-field="Image">Image</th>
                                                <th data-field="Text">Text</th>             
                                                <th data-field="Active">Active</th>
                                                <th data-field="Updated At">Updated At</th>
                                                <th data-field="Created At">Created At</th>         
                                                <th data-field="action">Setting</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            @if(isset($section3))
                                                @foreach($section3 as $product_data)
                                                
                                                    <tr>
                                                        <td></td>                                                        
                                                        <td><img src="{{ $product_data->image }}" alt="banner image" style="width: 300px; height: 100px;">
                                                        </td>
                                                        <td>{{ $product_data->other_name }} </td>  
                                                        <td>{{ $product_data->active }} </td>
                                                        <td>{{ $product_data->updated_at }} </td>
                                                        <td>{{ $product_data->created_at }} </td>
                                                        
                                                        <td>                                        
                                                            <button data-toggle="tooltip" title="Edit" class="pd-setting-ed">
                                                                <a data-toggle="modal" data-target="#section3Edit{{ $product_data->id }}" style="cursor: pointer;">
                                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                                </a>
                                                            </button>
                                                            <button data-toggle="tooltip" title="Trash" class="pd-setting-ed">
                                                                <a href="{{ url('section3-trash/'.$product_data->id) }}" onclick="return confirm('Are you sure?')">
                                                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                                </a>                                                                
                                                            </button>
                                                        </td>                                           
                                                    </tr>
                                                    <div id="section3Edit{{ $product_data->id }}" class="modal fade" role="dialog">
                                                          <div class="modal-dialog">
                                                            <!-- Modal content-->
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                    <h4 class="modal-title">Update Image</h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    {!! Form::open(['route' => ['section3UpdateImage.insert'], 'id' => 'section3UpdateImage', 'files' => true]) !!}
                                                                    <div class="row">
                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="review-content-section">
                                                                                <div class="input-group mg-b-pro-edt">
                                                                                    <span class="input-group-addon">Text</span>
                                                                                    <input type="text" class="form-control" name="other_name" placeholder="Text" value="{{ $product_data->other_name }}" />
                                                                                </div>
                                                                                
                                                                                <div class="input-group mg-b-pro-edt">
                                                                                    <span class="input-group-addon">Banner Image</span>
                                                                                    <input type="file" class="form-control" name="banner_image">
                                                                                    <input type="hidden" class="form-control" name="previous_image" value="{{ $product_data->image }}">
                                                                                    <input type="hidden" class="form-control" name="id" value="{{ $product_data->id }}">
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
                                                    </div>
                                                @endforeach
                                                
                                            @else
                                                <tr>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>                                                                  
                                                </tr>
                                            @endif                                        
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
        @include('dashboard.footer')
    </div>
    <div id="section3AddImage" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add Image</h4>
            </div>
            <div class="modal-body">
                {!! Form::open(['route' => ['section3AddImage.insert'], 'id' => 'section3AddImage', 'files' => true]) !!}
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="review-content-section">
                            <div class="input-group mg-b-pro-edt">
                                <span class="input-group-addon">Text</span>
                                <input type="text" class="form-control" name="other_name" placeholder="Main Heading" />
                            </div>
                            
                            <div class="input-group mg-b-pro-edt">
                                <span class="input-group-addon">Banner Image</span>
                                <input type="file" class="form-control" name="banner_image" required>
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
</div>

@endsection