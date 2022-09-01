@extends('administrator.layout.administrator')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default card-view">
            <div class="panel-heading">
                <div class="pull-left">
                    <h6 class="panel-title txt-dark">View Sub-Admin </h6>
                </div>
                <div class="pull-right">
                   <a href="{{route('admin_sub_admin')}}" class="btn btn-danger">Go Back</a>
                </div>
            </div>
            <div class="panel-wrapper collapse in">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-wrap">
                                <form class="form-horizontal" role="form">
                                <div class="form-body">
                                        <hr class="light-grey-hr"/>
                                        <div class="row">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">First Name:</label>
                                                        <div class="col-md-9">
                                                            <p class="form-control-static"> {!! $select->first_name!!} </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Last Name:</label>
                                                        <div class="col-md-9">
                                                            <p class="form-control-static"> {!! $select->last_name!!} </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Email:</label>
                                                        <div class="col-md-9">
                                                            <p class="form-control-static"> {!! $select->email!!} </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <label class="control-label col-md-4">Access Permission<span class="text-danger">*</span></label>
                                                    <div class="col-sm-7">
                                                        <?PHP $permission= explode(",",$select->access_permission); ?>
                                                          <div class="col-md-6"><input disabled type="checkbox" name="permission[]"  value="orders" <?PHP if(in_array('orders',$permission)): echo 'checked'; endif; ?>>Orders
                                                             <ul style="margin-left: 25px;">
                                                                <li><input disabled  type="checkbox" name="permission[]" value="pending_order"<?PHP if(in_array('pending_order',$permission)): echo 'checked'; endif; ?>>Pending Order</li>
                                                                <li><input disabled type="checkbox" name="permission[]" value="ongoing_order"<?PHP if(in_array('ongoing_order',$permission)): echo 'checked'; endif; ?>>Ongoing Order</li>
                                                                <li><input disabled type="checkbox" name="permission[]" value="completed_order"<?PHP if(in_array('completed_order',$permission)): echo 'checked'; endif; ?>>Completed Order</li>
                                                                <li><input disabled type="checkbox" name="permission[]" value="cancelled_order"<?PHP if(in_array('cancelled_order',$permission)): echo 'checked'; endif; ?>>Cancelled Order</li>
                                                             </ul>
                                                             </div>
                                                         <div class="col-md-6"> <input disabled type="checkbox" name="permission[]" value="customer" <?PHP if(in_array('customer',$permission)): echo 'checked'; endif; ?>>Users
                                                           <ul style="margin-left: 25px;">
                                                               <li><input disabled type="checkbox" name="permission[]" value="all_users"<?PHP if(in_array('all_users',$permission)): echo 'checked'; endif; ?>>All Users</li>
                                                               <li><input disabled type="checkbox" name="permission[]" value="active_users"<?PHP if(in_array('active_users',$permission)): echo 'checked'; endif; ?>>Active Users</li>
                                                               <li><input disabled type="checkbox" name="permission[]" value="inactive_users"<?PHP if(in_array('inactive_users',$permission)): echo 'checked'; endif; ?>>Inactive Users</li>
                                                            </ul>
                                                        </div>
                                                          <div class="col-md-6"> <input disabled type="checkbox" name="permission[]" value="product_management"<?PHP if(in_array('product_management',$permission)): echo 'checked'; endif; ?>>Product Management
                                                               <ul style="margin-left: 25px;">
                                                                <li><input disabled type="checkbox" name="permission[]" value="category"<?PHP if(in_array('category',$permission)): echo 'checked'; endif; ?>>Category</li>
                                                                <li><input disabled type="checkbox" name="permission[]" value="sub_category"<?PHP if(in_array('sub_category',$permission)): echo 'checked'; endif; ?>>Sub Category</li>
                                                              </ul>
                                                          </div>
                                                            <div class="col-md-6"><input disabled type="checkbox" name="permission[]" value="setting"<?PHP if(in_array('setting',$permission)): echo 'checked'; endif; ?>>Setting
                                                              <ul style="margin-left: 25px;">
                                                                <li><input disabled type="checkbox" name="permission[]" value="general_setting"<?PHP if(in_array('general_setting',$permission)): echo 'checked'; endif; ?>>General Setting</li>
                                                              </ul>
                                                          </div>
                                                          <div class="col-md-6"><input disabled type="checkbox" name="permission[]" value="contact_us"<?PHP if(in_array('contact_us',$permission)): echo 'checked'; endif; ?>>Contact Us
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
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
@push('scripts')
<script src="{{asset('/backend/developer/js/subAdmin.js')}}"></script>
<script>
	$('input[type=checkbox]').click(function(){
    // children checkboxes depend on current checkbox
    $(this).next().find('input[type=checkbox]').prop('checked',this.checked);
    // go up the hierarchy - and check/uncheck depending on number of children checked/unchecked
    $(this).parents('ul').prev('input[type=checkbox]').prop('checked',function(){
        return $(this).next().find(':checked').length;
    });
});
	</script>
@endpush
