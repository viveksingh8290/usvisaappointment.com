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
                        <li><span class="bread-blod">Contact Enquiry List</span> </li>
                    </ul>
                </div>
            </div> 
        <!-- breadcome -->  
        <div class="data-table-area mg-tb-15" >
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="height: 500px;">
                        <div class="sparkline13-list" style="height: 500px;">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Contact Enquiry <span class="table-project-n">List</span></h1>
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
                                                <th data-field="id">S.No</th>
                                                <th data-field="Name">Name</th>
                                                <th data-field="Email">Email</th>
                                                <th data-field="Phone">Phone</th>
                                                <th data-field="Message">Message</th>
                                                <th data-field="Status">Status</th>
                                                <th data-field="Updated At">Updated At</th>
                                                <th data-field="Created At">Created At</th>                                                                       
                                                <th data-field="action">Setting</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1 ;?>
                                            @if(isset($contact))
                                                @foreach($contact as $product_data)
                                                    <tr>
                                                        <td></td>
                                                        <td>{{ $i }}</td>
                                                        <td>{{ $product_data->name }}</td>
                                                        <td>{{ $product_data->email }} </td>
                                                        <td>{{ $product_data->phone }}</td>
                                                        <td>{{ $product_data->message }} </td>
                                                        <td>{{ $product_data->status }} </td>
                                                        <td>{{ $product_data->updated_at }} </td>
                                                        <td>{{ $product_data->created_at }} </td>
                                                        
                                                        <td>                                        
                                                            <button data-toggle="tooltip" title="Edit" class="pd-setting-ed">
                                                                <a href="#contactEnqModal{{ $product_data->id}}" data-toggle="modal">
                                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                                </a>
                                                            </button>
                                                            <button data-toggle="tooltip" title="Trash" class="pd-setting-ed">
                                                                <a href="{{ url('contact-enquiry-trash/'.$product_data->id) }}" onclick="return confirm('Are you sure?')">
                                                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                                </a>                                                                
                                                            </button>
                                                        </td>                                           
                                                    </tr>
                                                    <?php $i++; ?>
                                                    <!-- Modal -->
                                                  <div class="modal fade" id="contactEnqModal{{ $product_data->id}}" role="dialog">
                                                    <div class="modal-dialog modal-sm">
                                                      <div class="modal-content">
                                                        <div class="modal-header">
                                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                          <h4 class="modal-title">Update Status</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                          {!! Form::open(['route' => ['contact.updateStatus'], 'id' => 'updateStatus']) !!}
                                                                <div class="form-group">
                                                                        <label for="message">Status</label>
                                                                        <input type="text" class="form-control" id="statuss" name="status" placeholder="Status" value="{{ $product_data->status }}">
                                                                        <input type="hidden" class="form-control" name="status_id" value="{{ $product_data->id }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <button type="submit" class="btn btn-default">Submit</button>
                                                                    </div>
                                                          {!! Form::close() !!}
                                                        </div>                                     
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

@endsection