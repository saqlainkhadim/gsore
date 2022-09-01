@extends('administrator.layout.administrator')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default card-view">
            <div class="panel-heading">

                <div class="pull-right">
                   <a href="{{route('admin_level')}}" class="btn btn-danger">Go Back</a>
                </div>
            </div>
            <div class="card-body">
                <h3>Level Income</h3>
                {{ Form::open(array('url' => route('admin_level_update'), 'data-toggle'=>'validator' , 'class'=> 'form-horizontal', 'enctype'=>'multipart/form-data')) }}

                {{-- <form method="POST" action="http://care4india.uk/admin/level-income" accept-charset="UTF-8" id="register" enctype="multipart/form-data" name="register" class="m-t">
                    <input name="_token" type="hidden" value="jRXPvHNVQTN2tzFxfSgX4dBgV2tShPfEwQ87XDrD"> --}}


                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="input-11">Level 1</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="number" class="form-control input-shadow bg-white" id="input-11" name="amount[]" value="{{$level1?$level1->amount:''}}"  placeholder="Level 1">
                                </div>
                                <div class="col-md-6">
                                    <input type="number" class="form-control input-shadow bg-white" id="input-11" name="day[]" value="{{$level1?$level1->day:''}}"   placeholder="Level 1" title="Days">
                                </div>
                            </div>
                            <label class="error"></label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="input-14">Level 2</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="number" class="form-control input-shadow bg-white" id="input-14" name="amount[]" value="{{$level2?$level2->amount:''}}"   placeholder="Level 4">
                                </div>
                                <div class="col-md-6">
                                    <input type="number" class="form-control input-shadow bg-white" id="input-11" name="day[]" value="{{$level2?$level2->day:''}}"  placeholder="Level 1" title="Days">
                                </div>
                            </div>
                            <label class="error"></label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="input-12">Level 3</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="number" class="form-control input-shadow bg-white" id="input-12" name="amount[]" value="{{$level3?$level3->amount:''}}"  placeholder="Level 2">
                                </div>
                                <div class="col-md-6">
                                    <input type="number" class="form-control input-shadow bg-white" id="input-11" name="day[]" value="{{$level3?$level3->day:''}}"  placeholder="Level 1" title="Days">
                                </div>
                            </div>
                            <label class="error"></label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="input-14">Level 4</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="number" class="form-control input-shadow bg-white" id="input-14" name="amount[]" value="{{$level4?$level4->amount:''}}"  placeholder="Level 4">
                                </div>
                                <div class="col-md-6">
                                    <input type="number" class="form-control input-shadow bg-white" id="input-11" name="day[]" value="{{$level4?$level4->day:''}}"  placeholder="Level 1" title="Days">
                                </div>
                            </div>
                            <label class="error"></label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="input-13">Level 5</label>
                            <div class="row">
                                <div class="col-md-6">

                                    <input type="number" class="form-control input-shadow bg-white" id="input-13" name="amount[]"value="{{$level5?$level5->amount:''}}"  placeholder="Level 3">
                                </div>
                                <div class="col-md-6">
                                    <input type="number" class="form-control input-shadow bg-white" id="input-11" name="day[]" value="{{$level5?$level5->day:''}}"  placeholder="Level 1" title="Days">
                                </div>
                            </div>
                            <label class="error"></label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="input-14">Level 6</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="number" class="form-control input-shadow bg-white" id="input-14" name="amount[]" value="{{$level6?$level6->amount:''}}"  placeholder="Level 4">
                                </div>
                                <div class="col-md-6">
                                    <input type="number" class="form-control input-shadow bg-white" id="input-11" name="day[]" value="{{$level6?$level6->day:''}}"  placeholder="Level 1" title="Days">
                                </div>
                            </div>
                            <label class="error"></label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="input-14">Level 7</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="number" class="form-control input-shadow bg-white" id="input-14" name="amount[]"value="{{$level7?$level7->amount:''}}"  placeholder="Level 4">
                                </div>
                                <div class="col-md-6">
                                    <input type="number" class="form-control input-shadow bg-white" id="input-11" name="day[]" value="{{$level7?$level7->day:''}}"  placeholder="Level 1" title="Days">
                                </div>
                            </div>

                            <label class="error"></label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="input-14">Level 8</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="number" class="form-control input-shadow bg-white" id="input-14" name="amount[]" value="{{$level8?$level8->amount:''}}"  placeholder="Level 4">
                                </div>
                                <div class="col-md-6">
                                    <input type="number" class="form-control input-shadow bg-white" id="input-11" name="day[]" value="{{$level8?$level8->day:''}}"  placeholder="Level 1" title="Days">
                                </div>
                            </div>

                            <label class="error"></label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="input-14">Level 9</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="number" class="form-control input-shadow bg-white" id="input-14" name="amount[]" value="{{$level9?$level9->amount:''}}"  placeholder="Level 5">
                                </div>
                                <div class="col-md-6">
                                    <input type="number" class="form-control input-shadow bg-white" id="input-11" name="day[]" value="{{$level9?$level9->day:''}}"  placeholder="Level 1" title="Days">
                                </div>
                            </div>

                            <label class="error"></label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="input-14">Level 10</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="number" class="form-control input-shadow bg-white" id="input-14" name="amount[]" value="{{$level10?$level10->amount:''}}"  placeholder="Level 4">
                                </div>
                                <div class="col-md-6">
                                    <input type="number" class="form-control input-shadow bg-white" id="input-11" name="day[]" value="{{$level10?$level10->day:''}}"  placeholder="Level 1" title="Days">
                                </div>
                            </div>
                            <label class="error"></label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="input-14">Level 11</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="number" class="form-control input-shadow bg-white" id="input-14" name="amount[]" value="{{$level11?$level11->amount:''}}"  placeholder="Level 5">
                                </div>
                                <div class="col-md-6">
                                    <input type="number" class="form-control input-shadow bg-white" id="input-11" name="day[]" value="{{$level11?$level11->day:''}}"  placeholder="Level Days" >
                                </div>
                            </div>
                            <label class="error"></label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-dark shadow-dark px-5"><i class="icon-lock"></i>Submit</button>
                </div>
                </form>

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
