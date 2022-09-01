@extends('administrator.layout.administrator')
@section('content')
<section>
    <div>
        <div class="row">
            <!-- Basic Table -->
            <div class="col-sm-12">
                <div class="panel panel-default card-view">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h5 class="panel-title txt-dark">Support System List</h5>
                        </div>
                    </div>
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body">
                            <div class="table-wrap mt-40">
                                <div class="table-responsive">
                                    <table id="support_system_list" class="table mb-0">
                                        <thead>
                                            <tr>
                                                <th>Sr.</th>
                                                <th>Subject</th>
                                                <th>Message</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Approved</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        {{ Form::open(array('url' => "#", 'name' => 'approved_name', 'id'=>'approvedFormId','class'=> 'form-horizontal',  'enctype'=>'multipart/form-data')) }}
        <input type="hidden"  id="id">
        <div class="modal-body">
            <div class="form-group">
                <label for="exampleFormControlTextarea2"><span style="color:black">Answer</span></label>
                <textarea class="form-control rounded-0" name="approvedAnswer" id="approve_answer_id" rows="3"></textarea>
              </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" id="approvedSaveId">Save changes</button>
        </div>
      </div>
    </div>
  </div>
{{Form::close()}}


@endsection
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/additional-methods.min.js"></script>
<script src="{{asset('/backend/developer/js/support_system.js')}}"></script>


<script>
$("#approvedSaveId").click(function() {
    //alert('hello');
   var form = $("#approvedFormId");
   form.validate();
   if (form.valid()) {
    var answer = $("#approve_answer_id").val();
    var id = $("#id").val();
       $.ajax({
           headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           },
           type: 'POST',
           url: BASE_URL + '/administrator/support-system/approvedAnswer',
           data: {answer, id},

           success: function(response) {
               $data = JSON.parse(response);
               console.log($data);
               if ($data.status) {
                      location.reload();
               }else{
                 console.log("error")

               }
           }
       });
   }
});
</script>

@endpush


