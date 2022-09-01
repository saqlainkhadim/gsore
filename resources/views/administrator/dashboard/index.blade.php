    @extends('administrator.layout.administrator')
@section('content')
            <div class="container-fluid pt-25"> 			
                <div class="row">
                     <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="panel panel-default card-view pa-0">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="sm-data-box bg-pink">
										<div class="container-fluid">
											<div class="row">
                                                <a href="{{ route('admin_touch')}}">
												<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
													<span class="txt-light block counter"><span class="counter-anim">{{ $Get_touch}}</span></span>
													<span class="weight-500 uppercase-font txt-light block font-13">Get Touch</span>
												</div>
												<div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
													<i class="fa fa-users txt-light data-right-rep-icon"></i>
												</div>
                                                </a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="panel panel-default card-view pa-0">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="sm-data-box bg-pink">
										<div class="container-fluid">
											<div class="row">
                                                <a href="{{ route('admin_quote')}}">
												<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
													<span class="txt-light block counter"><span class="counter-anim">{{$Request_quote}}</span></span>
													<span class="weight-500 uppercase-font txt-light block font-13">Request Quote</span>
												</div>
												<div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
													<i class="fa fa-user txt-light data-right-rep-icon"></i>
												</div>
                                            </a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
                     <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="panel panel-default card-view pa-0">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="sm-data-box bg-blue">
										<div class="container-fluid">
											<div class="row">
                                                <a href="{{ route('admin_contact_us')}}">
												<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
													<span class="txt-light block counter"><span class="counter-anim">{{$contact}}</span></span>
													<span class="weight-500 uppercase-font txt-light block">Enqueries</span>
												</div>
												<div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
													<i class="fa fa-envelope txt-light data-right-rep-icon"></i>
												</div></a>
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
<script>
$(window).load(function(){
	window.setTimeout(function(){
		$.toast({
			heading: 'Welcome to Admin',
			position: 'top-right',
			loaderBg:'#e69a2a',
			icon: 'success',
			hideAfter: 3500,
			stack: 6
		});
	}, 3000);
});
</script>
@endpush
