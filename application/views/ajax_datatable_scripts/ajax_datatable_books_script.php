<!--REFERENCE: https://datatables.net/reference/api/columns().search()-->
<script defer="defer" type="application/javascript">
var datatable_book_global = [];

	$('#ajax_datatable_books_id').each(function() {
		var title =$('#ajax_datatable_books_id thead th').eq( $(this).index() ).text();
	});

	$(document).ready(function() {
		var dummy_id = "1";
		datatable_book_global = $('#ajax_datatable_books_id').DataTable({
			"searching": true,
			"paging": true,
			"sDom": "lrtip",
			"pagingType": "full_numbers",
			"lengthMenu": [[-1, 5, 10, 15, 25, 30, 40, 50], ["All", 5, 10, 15, 25, 30, 40, 50]],
			"ajax": '<?php echo base_url();?>books_ajax_fetchdata',
			"columns": [
					{ "render": function() {return dummy_id++} },
					{ "data": "author" },
					{ "data": "name" },
					{ "data": "date_of_publication" },
					{ "data": "description"},
					{ "data": "created_at" },
					{ "render": function ( data, type, row, meta ) {
						//NOT YET WORKING
						var ajax_see = `<a class="btn btn-link" href=""><i class="bi bi-eye-fill"></a>`
						return ajax_see;
						//NOT YET WORKING
					}},
					{ "render": function ( data, type, row, meta ) {
						var ajax_edit = `<button id="edit_ajax_popup" value="${row.id}" class="btn btn-warning" value=""><i class="bi bi-pencil-square"></i></button>`
						return ajax_edit;
					}},
					{ "render": function ( data, type, row, meta ) {
						var ajax_delete = `<button id="delete_ajax_popup" value="${row.id}" class="btn btn-danger" value=""><i class="bi bi-trash"></i></button>`
						return ajax_delete;
					}}
				],
			"columnDefs": [
				{ className: "author_class", targets: [1] },
				{ className: "date_class", targets: [5] }
			],
			"createdRow": function( row, data, dataIndex ) {
				$(row).addClass( 'ajax_tr' );
			}
		});
		$('#search_m_bar').on('keyup', function() {
			datatable_book_global.search(this.value).draw();
		});
	});
</script>
