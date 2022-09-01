@extends('administrator.layout.administrator')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default card-view">
            <div class="panel-heading">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark">Customer Tree View</h6>
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
                                                <h3>Customer List</h3>
                                                 <ul id="tree1">
                                                    <li>
                                                     {{ $customer->username}}
                                                       @if(count($customer->childs))
                                                         @include('administrator.customer_module.manageChild',['childs' => $customer->childs])
                                                        @endif
                                                     </li>
                                                    </ul>
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
</div>
@endsection
@push('scripts')

<script src="{{asset('/backend/developer/js/customerView.js')}}"></script>
<script src="{{asset('/backend/developer/js/treeview.js')}}"></script>
@endpush
