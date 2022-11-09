<script defer="defer" type="application/javascript">
var datatable_author_global = [];
	$(document).ready(function() {
		var dummy_id_author = "1";
		datatable_author_global = $('#ajax_datatable_author_id').DataTable( {
			"ajax": '<?php echo base_url();?>author_ajax_fetchdata',
			"columns": [
				{ "data": function() {return dummy_id_author++} },
				{ "data": "first_name" },
				{ "data": "middle_name" },
				{ "data": "last_name" },
				{ "data": "description" },
				{ "data": "insert_datetime" },
				{ "render": function ( data, type, row, meta )  {
					var author_datable_button_edit = `<button id="edit_popup_author" class="btn btn-warning" value="${row.id}"><i class="bi bi-pencil-square"></i></button>`;
					return author_datable_button_edit;
				} },
				{ "render": function ( data, type, row, meta ) {
					var author_datable_button_delete = `<button id="del_popup_author" class="btn btn-danger" value="${row.id}"><i class="bi bi-trash"></i></button>`;
					return author_datable_button_delete;
				} }
			],
			columnDefs: [
				{className: "author_class", targets: [1, 2, 3]},
				{className: "date_class", targets: [5]}
			],
			"createdRow": function( row, data, dataIndex ) {
				$(row).addClass('ajax_author_tr');
			},
		} );
	});
</script>
