<script defer="defer" type="application/javascript">
	$(document).on('click', '#edit_popup_author', function() {
		$('#edit_modal_w_2').modal('show');
		ajax_edit_id = $(this).attr('value');
		$ajax_tr = $(this).closest('tr');
		var tr_data = $ajax_tr.children('td').map(function() {
			return $(this).text();
		});
		console.log(tr_data);
		$('#edit_aut_fname').val(tr_data[1]);
		$('#edit_aut_mname').val(tr_data[2]);
		$('#edit_aut_lname').val(tr_data[3]);
		$('#edit_aut_desc').val(tr_data[4]);

		$('#edit_author_btn').on('click', function() {
			var edit_fname= $('#edit_aut_fname').val();
			var edit_mname= $('#edit_aut_mname').val();
			var edit_lname= $('#edit_aut_lname').val();
			var edit_desc= $('#edit_aut_desc').val();
			$.ajax({
				url: '<?php echo base_url();?>author_ajax_edit',
				type: 'post',
				data: {
					id: ajax_edit_id,
					first_name: edit_fname,
					last_name: edit_lname,
					middle_name: edit_mname,
					description: edit_desc
				},
				dataType: 'text',
				success:function(data) {
					$('#edit_modal_w_2').modal('hide');
					$('.ajax_author_tr').html(data);
					datatable_author_global.ajax.reload();
				},
				error: function(data) {
					alert('Fail');
				}
			});	
		});
		
	});
</script>

<!-- Modal -->
<div class="modal fade" id="edit_modal_w_2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">EDIT</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
			<?php echo form_open('', 'id="edit_author_form"'); ?>
				<!-- ADD TO THE LIST FORM -->
				<div class=" mb-3">
					<input type="text" class="form-control" id="edit_aut_fname" name="author_edit_fname" placeholder="First Name">					
				</div>
				<div class="row">
					<div class="mb-3 col">
						<input type="text" class="form-control" id="edit_aut_lname" name="author_edit_lname"  placeholder="Last Name">
					</div>
					<div class="mb-3 col">
						<input type="text" class="form-control" id="edit_aut_mname" name="author_edit_mname" placeholder="Middle Name">
					</div>	
				</div>
				<div class="mb-3">
					<textarea class="form-control" placeholder="Description:" id="edit_aut_desc" name="author_edit_desc" style="height: 150px"></textarea>
				</div>
			<?php echo form_close(); ?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
				<button id="edit_author_btn" type="button" class="btn btn-warning">Edit</button>
			</div>
		</div>
	</div>
</div>
