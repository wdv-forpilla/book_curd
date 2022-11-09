<script defer="defer" type="application/javascript">
	$(document).on('click', '#del_popup_author', function() {
		$('#delete_modal_w_2').modal('show');
		var ajax_del_id = $(this).attr('value');
		console.log(ajax_del_id);
		$('#del_button_confirm').on('click', function() {
			$.ajax({
				url: '<?php echo base_url();?>author_ajax_delete',
				type: 'post',
				data: {ajax_del_me: ajax_del_id},
				dataType: 'text',
				success: function(data) {
					$('#delete_modal_w_2').modal('hide');
					$('.ajax_author_tr').html(data);
					datatable_author_global.ajax.reload();
				},
				error: function() {
					alert('FAILED');
				}	
			});
		});
	});	
</script>
<!-- Modal -->
<div class="modal fade" id="delete_modal_w_2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
			<div class="alert alert-danger">
				<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
					<path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
				</svg>
					This post will be permanently deleted!
			</div>	
			</div>
			<div class="modal-footer">
				<div class="text-center">
					<button id="del_button_confirm" type="button" class="btn btn-link">Yes</button>
					&nbsp;or 
					<button type="button" class="btn btn-link" data-bs-dismiss="modal">No</button>					
				</div>	
			</div>
			
		</div>
	</div>
</div>
