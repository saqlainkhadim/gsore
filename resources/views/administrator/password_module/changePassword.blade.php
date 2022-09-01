@extends('administrator.layout.administrator')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default card-view">
            <div class="panel-heading">
                <div class="pull-left">
                    <h6 class="panel-title txt-dark">Change Password</h6>
                </div>
            </div>
            <div class="panel-wrapper collapse in">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-wrap">
                                {{ Form::open(array('url' => route('admin_update_change_pass'), 'data-toggle'=>'validator' , 'class'=> 'form-horizontal')) }}
                                    <div class="form-body">
                                        <hr class="light-grey-hr"/>
                                        <div class="row">
                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Current Password</label>
                                                    <div class="col-md-9">
                                                        <div class="input-group">
                                                            <div class="input-group-addon"><i class="icon-lock"></i></div>
                                                            <input type="password"  class="form-control" name="current_pass" placeholder="Enter your current password" required>
                                                        </div>
                                                        <div class="help-block with-errors"></div>
                                                        @error('current_pass')
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
                                                    <label class="control-label col-md-3">New Password</label>
                                                    <div class="col-md-9">
                                                        <div class="input-group">
                                                            <div class="input-group-addon"><i class="icon-lock"></i></div>
                                                             <input type="password" class="form-control"  data-minlength="6"  name="new_pass" id="new_pass" placeholder="Enter your new password" required>
                                                            </div>
                                                            <div class="help-block">Minimum of 6 characters</div>

                                                        @error('new_pass')
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
                                                    <label class="control-label col-md-3">Confirm New Password</label>
                                                    <div class="col-md-9">
                                                        <div class="input-group">
                                                            <div class="input-group-addon"><i class="icon-lock"></i></div>
                                                            <input type="password" class="form-control" id="PasswordConfirm" name="PasswordConfirm" data-match="#new_pass"
                                                            data-match-error="Whoops, these don't match" placeholder="Confirm new passsword" required>
                                                        </div>
                                                        <div class="help-block with-errors"></div>
                                                        @error('PasswordConfirm')
                                                        <div class="alert alert-danger alert-dismissable alert-style-1">
                                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                            <i class="zmdi zmdi-block"></i>{{ $message }}
                                                        </div>
                                                    @enderror
                                                    </div>
                                                </div>
                                            </div>
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
