@extends('administrator.layout.administrator')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default card-view">
            <div class="panel-heading">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark">Category View</h6>
                    </div>
                    <div class="pull-right">
                       <a href="{{route('admin_category')}}" class="btn btn-danger">Go Back</a>
                    </div>
                </div>
            </div>
            <div class="panel-wrapper collapse in">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-wrap">
                                <form class="form-horizontal" role="form">
                                    <div class="form-body">
                                        {{-- <h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-account mr-10"></i>Person's Info</h6> --}}
                                        <hr class="light-grey-hr"/>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Name:</label>
                                                    <div class="col-md-9">
                                                        <p class="form-control-static"> {{$select->name}} </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Image:</label>
                                                    <div class="col-md-9">
                                                        <p class="form-control-static"> <img src="{{asset('/backend/uploads/category/'.$select->image)}}" alt="category" width="100px"> </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Description:</label>
                                                    <div class="col-md-9">
                                                             {!! $select->description !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Status:</label>
                                                    <div class="col-md-9">
                                                        <p class="form-control-static" ><span class="text-success">{{$select->status?"Enable":"Disable"}} </span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
        CKEDITOR.replace('description', {height: 150});
</script>
@endpush
