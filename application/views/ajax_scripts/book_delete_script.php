<script defer="defer" type="application/javascript">
	$(document).on('click', '#delete_ajax_popup' ,function() {
		//MODAL POPUP
		$('#delete_modal_w').modal('show');

		var ajax_del_id = $(this).attr('value');
			$('#delete_ajax').on('click', function() {
				$.ajax({
					url: '<?php echo base_url()?>books_ajax_delete',
					type: 'post',
					dataType: 'text',
					data: {
						ajax_del_id: ajax_del_id
					},
					success: function(data) {
						//LOG
						console.log('DELETE_AJAX_SUCCESSFUL');
						//MODAL HIDE
						$('#delete_modal_w').modal('hide');
						datatable_book_global.ajax.reload();
					},
					error: function(data) {
						//LOG
						console.log('DELETE_AJAX_FAILED || NO DATA FOUND');
					}
				});
			});
	});	
</script>

