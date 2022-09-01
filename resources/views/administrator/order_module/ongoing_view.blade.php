@extends('administrator.layout.administrator')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default card-view">
            <div class="panel-heading">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark">Pending Order View</h6>
                    </div>
                    <div class="pull-right">
                       <a href="{{url()->previous()}}" class="btn btn-danger">Go Back</a>
                    </div>
                </div>
            </div>
            <div class="panel-wrapper collapse in" id="report_left_inner">
                <div class="panel-body">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-wrap">
                                <form class="form-horizontal" role="form">
                                    <div class="form-body">
                                        {{-- <h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-account mr-10"></i>Person's Info</h6> --}}
                                        <hr class="light-grey-hr"/>
                                        {{-- <div class="pull-right">
                                            <button onclick="PrintElem()" class="btn btn-primary">Print</button>
                                            {{-- <a href="" >Print</a> --}}
                                         {{-- </div> --}}
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Name:</label>
                                                    <div class="col-md-9">
                                                        <p class="form-control-static"> {!! $select->user_detail?$select->user_detail->username:"" !!} </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Email:</label>
                                                    <div class="col-md-9">
                                                        <p class="form-control-static"> {!! $select->user_detail?$select->user_detail->email:"" !!} </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Phone Number:</label>
                                                    <div class="col-md-9">
                                                        <p class="form-control-static"> {!! $select->user_detail?$select->user_detail->mobile:"" !!} </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Pincode:</label>
                                                    <div class="col-md-9">
                                                        <p class="form-control-static"> {!! $select->user_detail?$select->user_detail->pincode:"" !!} </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Payment Status:</label>
                                                    <div class="col-md-9">
                                                        <p class="form-control-static"> {{ucfirst($select->payment_status)}} </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Current Status:</label>
                                                    <div class="col-md-9">
                                                        <p class="form-control-static"> {{ucfirst($select->current_status)}} </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Receipt:</label>
                                                    <div class="col-md-9">
                                                        <p class="form-control-static"> <a href="{{asset('/front/uploads/order/'.$select->image)}}" download="receipt"> <img src="{{asset('/front/uploads/order/'.$select->image)}}" alt="recipt" width="300px" ></a> </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}

                                        {{-- <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group" style="margin: 0 -18px;
                                                padding: 10px 0;">
                                                    <div class="col-md-10" style="float: right;">
                                                        <h5>Order Details</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="border-top: 1px solid #ccc;">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3"></label>
                                                    <div class="col-md-9">
                                                        <p class="form-control-static"> Package Detail</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3"></label>
                                                    <div class="col-md-9">
                                                        <p class="form-control-static"> {{$select->event_data->title}}</p>
                                                    </div>
                                                </div>
                                            </div> --}}
                                            {{-- <div class="col-md-3">
                                                <div class="form-group">
                                                        <p class="form-control-static"><i class="fa fa-inr" aria-hidden="true"></i>
                                                            {{$select->event_data->price}} * 1 </p>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                        <p class="form-control-static"><i class="fa fa-inr" aria-hidden="true"></i>{{$select->event_data->price}} </p>
                                                </div>
                                            </div>
                                        </div> --}}
{{--
                                        @forelse($select->order_meta as $ks => $vs)
                                        <div class="row" style="border: 1px solid #ccc;">
                                            @if($ks == 0)
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label col-md-6">Additional Features</label>
                                                    <div class="col-md-6">
                                                        <p class="form-control-static"> {{$ks+1}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            @else
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label col-md-6"></label>
                                                    <div class="col-md-6">
                                                        <p class="form-control-static"> {{$ks+1}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3"></label>
                                                    <div class="col-md-6">
                                                        <p class="form-control-static"> {{$vs->name}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                        <p class="form-control-static"><i class="fa fa-inr" aria-hidden="true"></i>
                                                            {{$vs->unitPrice}} * {{$vs->qty}} </p>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group"><?php $amount = $vs->unitPrice * $vs->qty; ?>
                                                        <p class="form-control-static"><i class="fa fa-inr" aria-hidden="true"></i>{{$amount}} </p>
                                                </div>
                                            </div>
                                        </div>
                                        @empty
                                        <div class="row" style="border-top: 1px solid #ccc;">
                                            <div class="col-md-6">
                                                <div class="form-group" style="margin: 0 -18px;
                                                padding: 10px 0;">
                                                    <div class="col-md-10" style="float: right;">
                                                        <h6>No extra Feature</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforelse
                                        <div class="row" style="border-top: 1px solid #ccc;">
                                            <div class="col-md-12">
                                                <div class="form-group" style="margin: 0 -18px; padding: 10px 0;">
                                                    {{-- <label class="control-label col-md-6"></label> --}}


                                                    <div class="col-md-6">
                                                        {{-- <h5>Order Details</h5> --}}
                                                    </div>
                                                    <div class="col-md-3">
                                                        <h6>Total Amount</h6>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <h5>{{$select->total_amount}}</h5>
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
function PrintElem()
    {
        Popup($('#report_left_inner').html());
    }

    function Popup(data)
    {
        var mywindow = window.open('', 'my div', 'height=400,width=600');
        mywindow.document.write('<html><head><title>my div</title>');
        /*optional stylesheet*/ //mywindow.document.write('<link rel="stylesheet" href="main.css" type="text/css" />');
        mywindow.document.write('</head><body >');
        mywindow.document.write(data);
        mywindow.document.write('</body></html>');

        mywindow.print();
        mywindow.close();

        return true;
    }
</script>
@endpush
