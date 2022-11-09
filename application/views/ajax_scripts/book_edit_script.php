<script defer type="application/javascript">
	$(document).on('click', '#edit_ajax_popup', function() {
		//MODAL POPUP
		$('#edit_modal_w').modal('show');
		$('#add_modal_w').modal('hide');
		$('#delete_modal_w').modal('hide');

		var ajax_del_id = $(this).attr('value');

		$tr = $(this).closest('tr');

		var data = $tr.children("td").map(function() {
			return $(this).text();
		}).get();

			console.log(data);

			$('#edit_title').val(data[1]);
			$('#edit_isbn').val(data[2]);
			$('#edit_author').val(data[3]);
			$('#edit_publisher').val(data[4]);
			$('#edit_date_of_publication').val(data[5]);
			$('#edit_category').val(data[6]);

		//EDIT/UPDATE WINDOW
		$('#edit_ajax').on('click', function() {
			//DATA GET

			var edit_val_title = $('#edit_title').val();
			var edit_val_isbn = $('#edit_isbn').val();
			var edit_val_author = $('#edit_author').val();
			var edit_val_publisher = $('#edit_publisher').val();
			var edit_val_publication = $('#edit_date_of_publication').val();
			var edit_val_category = $('#edit_category').val();

			if(edit_val_title == '' || edit_val_isbn == '' || edit_val_author == '' || edit_val_publisher == '' || edit_val_publication == '' || edit_val_category == '') {
				console.log('EMPTY FIELDS ARE PRESENT');
			} else {
				$.ajax({
				url: '<?php echo base_url();?>books_ajax_edit',
				type: 'post',
				data: {
					id: ajax_del_id,
					title: edit_val_title,
					isbn: edit_val_isbn,					
					author: edit_val_author,
					publisher: edit_val_publisher,
					date_of_publication: edit_val_publication,
					category: edit_val_category
				},
				dataType: 'text',
				success: function(data) {
					console.log('EDIT_AJAX_SUCCESS');
					//MODAL HIDE
					$('#edit_modal_w').modal('hide');
					datatable_book_global.ajax.reload();
				},
				error: function(data) {
					console.log('EDIT_AJAX_FAILED');
				}
			});
			}
		});
	});
</script>




