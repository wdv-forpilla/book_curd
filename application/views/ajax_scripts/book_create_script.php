<script defer="defer" type="application/javascript">
	$(document).on('click', '#ajax_create', function() {	
		
		//AJAX SUBMITION FORM
		var add_name = $("#add_name").val();
		var add_author = $("#add_author").val();
		var add_date_of_publication = $("#add_date_of_publication").val();
		var add_description = $("#add_description").val();

		if(add_name == '' || add_author == '' || add_date_of_publication == '' || add_description == '') {
			alert('Empty fields are present');
		} else {
			$.ajax({
				url: '<?php echo base_url();?>books_ajax_create',
				type: 'post',
				data: {
					name: add_name,
					author: add_author,
					date_of_publication: add_date_of_publication,
					description: add_description
				},
				dataType: 'text',
				success: function(data) {
					console.log('INSERT_AJAX_SUCCESSFUL');
					//AUTOHIDE MODAL
					$('#add_modal_w').modal('hide');
					//RESET
					$('#add_form')[0].reset();
					datatable_book_global.ajax.reload();
				},
				error: function(data) {
					console.log('INSERT_AJAX_FAILED || NO DATA FOUND');
				}
			});		
		}	
	});	
</script>

<script defer="defer" type="application/javascript">
	//READY OR SUBMIT::TESTING	
	$(document).ready(function () {
		//JQUERY VALIDATION
		$('#add_form').validate({
			rules: {
				name: {
					required: true
				},
				author: {
					required: true}
					,
				description: {
					required: true
				},
				date_of_publication: {
					required: true
				}	
			},
			messages: {
				name: 'Name of the book field is required',
				author: 'Author field is required',
				description: 'Description field is required',
				date_of_publication: 'Date of Publish field is required'
			},
			errorElement: 'sup'
		});
		//DISABLED BUTTON INPUT FIELD IS EMPTY
		$('#add_form input').on('keyup blur', function () { // fires on every keyup & blur
			if ($('#add_form').valid()) {                   // checks form for validity
				$('button.btn_yes').prop('disabled', false);        // enables button
			} else {
				$('button.btn_yes').prop('disabled', 'disabled');   // disables button
			}
		});
	});	
</script>

