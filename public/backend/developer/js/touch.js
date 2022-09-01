////load the data......................................................
var img = "{{url('/public/front/images/loading.gif')}}";
dataTable = $('#contact_list').DataTable({
        responsive: true,
		serverSide: true,
		"oLanguage": {
        "sProcessing": "<img class='loader' src="+img+">"
    },
        dom: '<"html5buttons"B>lTfgitp',
        buttons: [
            {extend: 'copy'},
            {extend: 'csv'},
            {extend: 'pdf', title: 'ExampleFile'},
            {extend: 'print',
                customize: function (win){
                    $(win.document.body).addClass('white-bg');
                    $(win.document.body).css('font-size', '10px');

                    $(win.document.body).find('table')
                        .addClass('compact')
                        .css('font-size', 'inherit');
                }
            }
        ],
    "processing": true,
    "serverSide": true,
	 pageLength: 50,
    "ajax":{
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url : BASE_URL+'/administrator/get/in/touch/gettouchData',
        type: "post",
        error: function(){
            $(".user-table-error").html("");
            $("#contact_list").append('<tbody class="user-table-error"><tr><th colspan="7">No data found in the server</th></tr></tbody>');
        }
    },
    "columnDefs": [ { orderable: false, targets: [0,4] }],
    "order": [[ 4, 'desc' ]]
});
$('.dataTables_filter input').attr("placeholder", "Search by date DD-MM");
// $('.dataTables_filter input').attr("class", "clearable");


