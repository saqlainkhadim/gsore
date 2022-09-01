////load the data......................................................
var img = "{{url('/public/front/images/loading.gif')}}";
dataTable = $('#sub_admin_list').DataTable({
    responsive: true,
    serverSide: true,
    "oLanguage": {
        "sProcessing": "<img class='loader' src=" + img + ">"
    },
    dom: '<"html5buttons"B>lTfgitp',
    buttons: [
        { extend: 'copy' },
        { extend: 'csv' },
        { extend: 'pdf', title: 'ExampleFile' },
        {
            extend: 'print',
            customize: function(win) {
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
    pageLength: 10,
    "ajax": {
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: BASE_URL + '/administrator/sub-admin/getSubAdminData',
        type: "post",
        error: function() {
            $(".user-table-error").html("");
            $("#sub_admin_list").append('<tbody class="user-table-error"><tr><th colspan="7">No data found in the server</th></tr></tbody>');
        }
    },
    "columnDefs": [{ orderable: true, targets: [0, 5] }],
    "order": [
        [5, 'desc']
    ]
});
$('.dataTables_filter input').attr("placeholder", "Search with username");
// $('.dataTables_filter input').attr("class", "clearable");