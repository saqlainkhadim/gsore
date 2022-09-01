@extends('administrator.layout.administrator')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default card-view">
            <div class="panel-heading">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark">Customer View</h6>
                    </div>
                    <div class="pull-right">
                       <a href="{{url()->previous()}}" class="btn btn-danger">Go Back</a>
                    </div>
                </div>
            </div>
            <div class="panel-wrapper collapse in">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-wrap">
                                    <div class="form-body">
                                        <hr class="light-grey-hr"/>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Username:</label>
                                                    <div class="col-md-9">
                                                        <p class="form-control-static"> {{$select->username}} </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Email:</label>
                                                    <div class="col-md-9">
                                                        <p class="form-control-static"> {{$select->email}} </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Mobile No:</label>
                                                    <div class="col-md-9">
                                                        <p class="form-control-static"> {{$select->mobile}} </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="panel-heading">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark">Order Lists</h6>
                    </div>
                </div>
            </div>
            <div class="panel-wrapper collapse in">
                <div class="panel-body">
                    <div class="table-wrap mt-40">
                        <div class="table-responsive">
                            <table id="customer_order" class="table mb-0">
                                <thead>
                                <tr>
                                    <th>Sr.</th>
                                    <th>Event Name</th>
                                    <th>User Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
    var customer_id="{{$select->id}}";
</script>
<script src="{{asset('/backend/developer/js/customerView.js')}}"></script>
@endpush
