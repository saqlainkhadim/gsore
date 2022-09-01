////load the data......................................................
// alert("as")
var img = "{{url('/public/front/images/loading.gif')}}";
dataTable = $('#newsletter_list').DataTable({
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
        url : BASE_URL+'/administrator/newsletter/getnewsletterData',
        type: "post",
        error: function(){
            $(".user-table-error").html("");
            $("#newsletter_list").append('<tbody class="user-table-error"><tr><th colspan="7">No data found in the server</th></tr></tbody>');
        }
    },
    "columnDefs": [ { orderable: false, targets: [0,1] }],
    "order": [[ 1, 'desc' ]]
});
$('.dataTables_filter input').attr("placeholder", "Search by email");
// $('.dataTables_filter input').attr("class", "clearable");


