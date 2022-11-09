<script type="application/javascript">
	$(document).on('click', '#edit_ajax_popup', function() {
		//MODAL POPUP
		$('#edit_modal_w').modal('show');

		var ajax_del_id = $(this).attr('value');
		//AJAX_DISPLAY ID
		console.log(ajax_del_id);

		$tr = $(this).closest('tr');

		var data = $tr.children("td").map(function() {
			return $(this).text();
		}).get();

			console.log(data);
			$('#edit_author').val(data[1]);
			$('#edit_name').val(data[2]);
			$('#edit_date_of_publication').val(data[3]);
			$('#edit_description').val(data[4]);

		//EDIT/UPDATE WINDOW
		$('#edit_ajax').on('click', function() {
			//DATA GET
			var edit_name = $("#edit_name").val();
			var edit_author = $("#edit_author").val();
			var edit_date_of_publication = $("#edit_date_of_publication").val();
			var edit_description = $("#edit_description").val();

			if(edit_name == '' || edit_author == '' || edit_date_of_publication == '' || edit_description == '') {
				console.log('EMPTY FIELDS ARE PRESENT');
			} else {
				$.ajax({
				url: '<?php echo base_url();?>books_ajax_edit',
				type: 'post',
				data: {
					id: ajax_del_id,
					author: edit_author,
					name: edit_name,					
					date_of_publication: edit_date_of_publication,
					description: edit_description 
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




