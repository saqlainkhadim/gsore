<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanwaliya Group | Admin</title>
	<link rel="shortcut icon" type="image/favicon" href="{{asset('/front/img/logo02.png')}}">
    <link href="{{asset('backend/vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
	<link href="{{ URL::asset('backend/dist/css/style.css') }}" rel="stylesheet" type="text/css">
</head>
	<body>
		<!--Preloader-->
		<div class="preloader-it">
			<div class="la-anim-1"></div>
		</div>

		<!--/Preloader-->
		<div class="wrapper pa-0">
			<!-- Main Content -->
			<div class="page-wrapper pa-0 ma-0 auth-page">
				<div class="container-fluid">
					<!-- Row -->
					<div class="table-struct full-width full-height">
						<div class="table-cell vertical-align-middle auth-form-wrap">
							<div class="auth-form  ml-auto mr-auto no-float">
							   <div class="row">
							   <img class="brand-img mr-10" style="margin-left: 20%;/* margin-bottom: -15%; */" class="img-responsive" src="{{asset('/front/img/logo02.png')}}" alt="RSSURPRISE"/>
							   </div>
								<div class="row">
									<div class="col-sm-12 col-xs-12">
										<div class="mb-30">
											<h3 class="text-center txt-dark mb-10">Sign in to Admin</h3>
											<h6 class="text-center nonecase-font txt-grey">Enter your details below</h6>
										</div>
										<div class="form-wrap">
										 @if(Session::has('message'))
										  <p class="alert alert-danger">{{ Session::get('message') }}</p>
										 @endif
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
											{{ Form::open(array('url' => 'administrator/authenticate')) }}
                                            {!! csrf_field() !!}
												<div class="form-group">
													<label class="control-label mb-10" for="username">Username  </label>
													<input type="text" class="form-control" required="" id="username" name="username" placeholder="Enter Username">
												</div>
												<div class="form-group">
													<label class="pull-left control-label mb-10" for="password">Password</label>
													<a class="capitalize-font txt-primary block mb-10 pull-right font-12" href="{{ route('admin_forget_pass') }}">forgot password ?</a>
													<div class="clearfix"></div>
													<input type="password" class="form-control" required="" name="password" id="password" placeholder="Enter password">
												</div>
												<div class="form-group text-center">
													<button type="submit" class="btn btn-info btn-rounded">sign in</button>
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
		</div>
		<script src="{{asset('backend/vendors/bower_components/jquery/dist/jquery.min.js')}}"></script>
		<!-- Bootstrap Core JavaScript -->
		<script src="{{asset('backend/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
		<script src="{{asset('backend/vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js') }}"></script>
		<!-- Slimscroll JavaScript -->
		<script src="{{asset('backend/dist/js/jquery.slimscroll.js') }}"></script>
		<!-- Init JavaScript -->
		<script src="{{asset('backend/dist/js/init.js') }}"></script>
	</body>
</html>
