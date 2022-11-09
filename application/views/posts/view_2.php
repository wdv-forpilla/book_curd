<div class="d-flex justify-content-end">
	<div class="spinner-border spinner_author" role="status">
		<span class="visually-hidden">Loading...</span>
	</div>
</div>
<div class="author_list_content">
	<h2 class="text-center"><i class="bi bi-brush"></i> <?= $title ?></h2>

	<hr>

	<div class="d-flex justify-content-between pb-4">
		<a href="<?php echo base_url(); ?>posts/create" class="btn btn-outline-light">Add your Favorite Book</a>
		<div>
			<a href="<?php base_url();?>view" class="btn btn-link"><i class="bi bi-door-open"></i> Go back to Favorite Books</a>
			<!-- NEW BUTTON FOR ENCHANCEMENT -->
			<button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#add_modal_w_2">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-save" viewBox="0 0 16 16">
					<path d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v7.293l2.646-2.647a.5.5 0 0 1 .708.708l-3.5 3.5a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L7.5 9.293V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z"/>
				</svg>
				Add Author's Name To The List
			</button>	
		</div>	
	</div>
	<main>
		<div class="">
			<table class="table table-hover table-striped responsive" id="ajax_datatable_author_id">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">First Name</th>
						<th scope="col">Middle Name</th>
						<th scope="col">Last Name</th>
						<th scope="col">Description</th>
						<th scope="col">Date Posted</th>
						<th scope="col"><!-- BUTTON 2 -->Edit</th>
						<th scope="col"><!-- BUTTON 2 -->Delete</th>
					</tr>
				</thead>
				<!-- TBODY -->
				<tbody id="ajax_tbody">	
				<!-- AJAX CALL FOR TABLE -->
				</tbody>
				<!-- TBODY -->
				
			</table>
		</div>
	</main>
	<small>CodeIgniter v3</small>
</div>
<!-------------------------------------------------------------------------------- 
------------------------------ MODAL: SECTION ONLY, ------------------------------
 -------------------------------------------------------------------------------->
<!-- NEW BUTTON FOR ENHANCEMENT MODAL -->
<div class="modal fade" id="add_modal_w_2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
			<?php if(!empty(validation_errors())) :?>
				<div class="alert alert-danger text-center">
					<?php echo validation_errors('<li>', '</li>')?>
				</div>
			<?php endif; ?>
			<!-- posts/view_e_add -->
			<?php echo form_open('', 'id="author_add_form"'); ?>
				<!-- ADD TO THE LIST FORM -->
				<div class=" mb-3">
					<input type="text" class="form-control" id="add_author_fname" name="author_fname" placeholder="First Name">					
				</div>
				<div class="row">
					<div class="mb-3 col">
						<input type="text" class="form-control" id="add_author_lname" name="author_lname"  placeholder="Last Name">
					</div>
					<div class="mb-3 col">
						<input type="text" class="form-control" id="add_author_mname" name="author_mname" placeholder="Middle Name">
					</div>	
				</div>
				<div class="mb-3">
					<textarea class="form-control" placeholder="Description:" id="add_author_desc" name="author_desc" style="height: 150px"></textarea>
				</div>
				<div class="modal-footer d-flex justify-content-between">
					<button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>	
					<!-- TEMPORARY TEST -->
					<button type="button" id="ajax_author_create" class="btn btn-success btn_author_create" disabled>
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-save" viewBox="0 0 16 16">
							<path d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v7.293l2.646-2.647a.5.5 0 0 1 .708.708l-3.5 3.5a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L7.5 9.293V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z"/>
						</svg>
							Add It To The List
					</button>
				</div>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>
<!-------------------------------------------------------------------------------
------------------------------ MODAL: SECTION ONLY, -----------------------------
-------------------------------------------------------------------------------->

<script>
	$(window).on('load', function() {
		$('.spinner_author').fadeOut(1000);
		$('.author_list_content').fadeIn(1000);
	});
</script>

<!-- REMINDER MODAL -->
<?php include 'application/views/scripts/reminder_script.php';?>
	
