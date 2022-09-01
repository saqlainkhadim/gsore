@extends('administrator.layout.administrator')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default card-view">
            <div class="panel-heading">
                <div class="pull-left">
                    <h6 class="panel-title txt-dark">General Setting</h6>
                </div>
            </div>
            <div class="panel-wrapper collapse in">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-wrap">
                                {{ Form::open(array('url' => route('admin_general_setting_store'), 'data-toggle'=>'validator' , 'class'=> 'form-horizontal', 'enctype'=>'multipart/form-data')) }}
                                    <div class="form-body">
                                        <hr class="light-grey-hr"/>
                                        <div class="row">
                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Site Name</label>
                                                    <div class="col-md-9">
                                                        <input type="text" value="{{$select?$select->site_name:''}}" class="form-control" name="site_name" placeholder="Site Name" required>
                                                        @error('site_name')
                                                            <div class="alert alert-danger alert-dismissable alert-style-1">
                                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                                <i class="zmdi zmdi-block"></i>{{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Mobile Number 1</label>
                                                    <div class="col-md-9">
                                                        <input type="number" class="form-control" value="{{$select?$select->mobileno:''}}" name="mobileNumber" placeholder="Mobile Number 1" required>
                                                        @error('mobileNumber')
                                                            <div class="alert alert-danger alert-dismissable alert-style-1">
                                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                                <i class="zmdi zmdi-block"></i>{{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="col-md-9">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Mobile Number 2</label>
                                                    <div class="col-md-9">
                                                        <input type="number" class="form-control" value="{{$select?$select->mobileno2:''}}" name="mobileNumber2" placeholder="Mobile Number 2">
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Support Email 1</label>
                                                    <div class="col-md-9">
                                                        <input type="email" class="form-control" required value="{{$select?$select->email:''}}" name="email" placeholder="Support Email 1">
                                                        @error('email')
                                                            <div class="alert alert-danger alert-dismissable alert-style-1">
                                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                                <i class="zmdi zmdi-block"></i>{{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="col-md-9">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Support Email 2</label>
                                                    <div class="col-md-9">
                                                        <input type="email" class="form-control" value="{{$select?$select->email2:''}}" name="email2" placeholder="Support Email 2">
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Address</label>
                                                    <div class="col-md-9">
                                                        <input type="text" value="{{$select?$select->address:''}}" class="form-control" required name="address" placeholder="Address">
                                                        @error('address')
                                                            <div class="alert alert-danger alert-dismissable alert-style-1">
                                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                                <i class="zmdi zmdi-block"></i>{{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Opening Timing</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" value="{{$select?$select->timing:''}}" name="timing" placeholder="Opening Hours">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Closing Timing</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" value="{{$select?$select->timing2:''}}" name="timing2" placeholder="Closing Hours">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Copyright</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" value="{{$select?$select->copyright:''}}" name="copyright" placeholder="Copyright" required>
                                                        @error('copyright')
                                                            <div class="alert alert-danger alert-dismissable alert-style-1">
                                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                                <i class="zmdi zmdi-block"></i>{{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- <div class="col-md-9">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">FaceBook URL</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" value="{{$select?$select->facebook_link:''}}" name="facebook" placeholder="Facebook Link">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Instagram URL</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" value="{{$select?$select->instagram_link:''}}" name="instagram" placeholder="Instagram Link">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Twitter URL</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" value="{{$select?$select->twitter_link:''}}" name="twitter" placeholder="Twitter Link">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Linkedin URL</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" value="{{$select?$select->linkedin_link:''}}" name="linkedin" placeholder="Linkedin Link">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Youtube URL</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" value="{{$select?$select->youtube_link:''}}" name="youtube" placeholder="Youtube Link">
                                                    </div>
                                                </div>
                                            </div> --}}
                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Site Logo</label>
                                                    <div class="col-md-9">
                                                        <input type="file" class="form-control" name="site_logo">
                                                        @if(!is_null($select) && $select->site_logo)

                                                        <img src="{{asset('backend/uploads/general_setting/'.$select->site_logo)}}" alt="site logo" width="100px">
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                           {{-- <div class="col-md-9">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Event Detail Page Image</label>
                                                    <div class="col-md-9">
                                                        <input type="file" class="form-control" name="event_detail_image">
                                                        @if(!is_null($select) && $select->event_detail_image)
                                                        <img src="{{asset('backend/uploads/general_setting/'.$select->event_detail_image)}}" alt="EVENT DETAIL IMAGE" width="100px">
                                                        @endif
                                                    </div>
                                                </div>
                                            </div> --}}
                                        </div>
                                    </div>
                                    <div class="form-actions mt-10">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-md-offset-3 col-md-9">
                                                        <button type="submit" class="btn btn-success  mr-10">Submit</button>
                                                        <button type="reset" class="btn btn-default">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6"> </div>
                                        </div>
                                    </div>
                                {{ Form::close() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
