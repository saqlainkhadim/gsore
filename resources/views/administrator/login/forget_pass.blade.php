<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Kanchan Rai | Admin</title>
    <link rel="shortcut icon" type="image/favicon" href="{{asset('/front')}}/images/fevicon.png">
	
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- Morris Charts CSS -->
    <link href="{{asset('backend/vendors/bower_components/morris.js/morris.css')}}" rel="stylesheet" type="text/css"/>
	<link href="{{asset('backend/vendors/bower_components/datatables/media/css/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css"/>
	<link href="{{asset('backend/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('backend/dist/css/style.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('backend/vendors/bower_components/bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.css')}}" />
    <script>
        BASE_URL="{{ URL::to('/') }}";
    </script>
</head>
<body class="gray-bg">
<div class="passwordBox animated fadeInDown">
    <div class="row">
        <div class="col-sm-4">
        </div>
            <div class="col-sm-4">
                <div class="panel panel-default card-view">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h4 class="panel-title txt-dark">Forgot password</h4>
                            <p >Enter your email address and your password will be reset and emailed to you. </p>
                        </div>
                        <div class="clearfix"></div>
                        @if(Session::has('success_message'))
    <div class="alert alert-success alert-dismissable" id="successMessage">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <i class="zmdi zmdi-check pr-15 pull-left"></i><p class="pull-left">{{ Session::get('success_message') }}</p>
        <div class="clearfix"></div>
    </div>
 @endif
 @if(Session::has('error_message'))
    <div class="alert alert-info alert-dismissable" id="successMessage">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <i class="zmdi zmdi-info-outline pr-15 pull-left"></i><p class="pull-left">{{ Session::get('error_message') }}</p>
        <div class="clearfix"></div>
    </div>
 @endif
                    </div>
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body">
                            <div class="form-wrap">
                                {{ Form::open(array('url' => route('admin_link_forget_pass'), 'data-toggle'=>'validator' , 'class'=> 'form-horizontal', 'enctype'=>'multipart/form-data')) }}
                                    <div class="form-group">
                                    <div class="col-sm-10">
                                        <div class="input-group mb-15">
                                            <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                                            <input type="email" id="email" name="email" required class="form-control" placeholder="Email">
                                        </div>
                                    </div>
                                    </div>
                                    <div class="form-group mb-0">
                                        <div class="col-sm-offset-2 col-sm-10">
                                          <button type="submit" class="btn btn-success btn-anim"><i class="icon-rocket"></i><span class="btn-text">submit</span></button>
                                        </div>
                                    </div>
                                    {{ Form::close() }}
                            </div>
                        </div>
                    </div>

            </div>
        </div>
        <div class="col-sm-4"></div>
    </div>
</div>

<script src="{{asset('backend/vendors/bower_components/bootstrap-validator/dist/validator.min.js')}}"></script>
</body>
</html>
