<script defer="defer" type="application/javascript">
	$(document).on('click', '#ajax_author_create', function() {

		var add_author_fname = $("#add_author_fname").val();
		var add_author_lname = $("#add_author_lname").val();
		var add_author_mname = $("#add_author_mname").val();
		var add_author_desc = $("#add_author_desc").val();

		$.ajax({
			url: '<?php echo base_url();?>author_ajax_create',
			type: 'post',
			data: {
				first_name: add_author_fname,
				last_name: add_author_lname,
				middle_name: add_author_mname,
				description: add_author_desc
			},
			dataType: 'text',
			success: function(data) {				
				$('#add_modal_w_2').modal('hide');
				$('#author_add_form')[0].reset();
				datatable_author_global.ajax.reload();
			},
			error: function(data) {
				console.log('AJEX: AUTHOR_CREATE, Failed');
			}
		});	
		
	});
</script>

<script defer="defer" type="application/javascript">
	$(document).ready(function() {
		$('#author_add_form').validate({
			rules: {
				author_fname: {required: true},
				author_mname: {required: true},
				author_lname: {required: true},
				author_desc: {required: true}
			},
			messages: {
				author_fname: 'Firstname field is required',
				author_mname: 'Middlename field is required',
				author_lname: 'Lastname field is required',
				author_desc: 'Please dont leave description field empty'
			},
			errorElement: 'sup'
		});
		$('#author_add_form input').on('keyup blur', function() {
			if($('#author_add_form').valid()) {
				$('button.btn_author_create').prop('disabled', false);
			} else {
				$('button.btn_author_create').prop('disabled', 'disabled');
			}
		});
	});
</script>
