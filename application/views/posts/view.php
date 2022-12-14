<div class="d-flex justify-content-end">
	<div class="spinner-border spinner_books spinner_h" role="status">
		<span class="visually-hidden">Loading...</span>
	</div>
</div>
<div class="books_list_content">
	<h2 class="text-center"><i class="bi bi-book" ></i> <?= $title ?></h2>

	<hr>

	<div class="d-flex justify-content-between pb-4">
		<a href="<?php echo base_url(); ?>posts/create" class="btn btn-outline-light">Add your Favorite Book</a>
		<div>
			<a href="<?php base_url();?>view_2" class="btn btn-link"><i class="bi bi-door-open"></i> Go to Author's Page</a>
			<!-- NEW BUTTON FOR ENCHANCEMENT -->
			<button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#add_modal_w">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-save" viewBox="0 0 16 16">
					<path d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v7.293l2.646-2.647a.5.5 0 0 1 .708.708l-3.5 3.5a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L7.5 9.293V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z"/>
				</svg>
				Add Your Favorite Book(s) To The List
			</button>	
		</div>	
	</div>

	<main>
		<div class="input-group mb-4 mt-1">
			<span class="input-group-text" id="basic-addon1"><i class="bi bi-search"></i></span>
			<input type="text" class="form-control" id="search_m_bar" placeholder="Search" aria-label="Search" aria-describedby="basic-addon1">
		</div>
		<div class="">
			<table class="table table-hover table-striped responsive" id="ajax_datatable_books_id">
				<thead>
					<tr>
						<th scope="col"><!-- THIS SPACE FOR COUNTING_ID -->#</th>
						<th scope="col">Author</th>
						<th scope="col">Name Of The Book</th>
						<th scope="col">Date Of Publication</th>
						<th scope="col">Description</th>
						<th scope="col"><!-- THIS SPACE FOR CREATED_AT -->Date Posted</th>
						<th scope="col"><!-- THIS SPACE FOR BUTTON(s) -->View</th>
						<th scope="col"><!-- THIS SPACE FOR BUTTON(s) -->Edit</th>
						<th scope="col"><!-- THIS SPACE FOR BUTTON(s) -->Delete</th>
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
<div class="modal fade" id="add_modal_w" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Add Your Favorite Book To the List</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
			<!-- posts/view_e_add -->
			<?php echo form_open('', 'id="add_form"'); ?>
				<!-- ADD TO THE LIST FORM -->
				<div class="row mb-3">
					<div class="col">
						<label for="" class="mb-1">Name Of The Book</label>
						<input type="text" name="name" id="add_name" class="form-control" aria-label="First name" style="height: 45px">
					</div>
					<div class="col">
					<label for="" class="mb-1">Author</label>
						<input type="text" name="author" id="add_author" class="form-control" aria-label="Last name" style="height: 45px">
					</div>
				</div>
				<div class="form-group mb-3">
					<label for="" class="mb-1">Description</label>
					<textarea name="description" id="add_description" cols="30" rows="10" class="form-control"></textarea>
				</div>
				<div class="form-group mb-3">
					<label for="" class="mb-1">Date of Publish</label>
					<input type="date" name="date_of_publication" id="add_date_of_publication" class="form-control" max="<?php echo date("Y-m-d"); ?>" style="height: 45px">
				</div>			
				</div>
				<div class="modal-footer d-flex justify-content-between">
					<button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>	
					<!-- TEMPORARY TEST -->
					<button type="button" id="ajax_create" class="btn btn-success btn_yes" disabled>
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

<!-- MODAL EDIT -->
<div class="modal fade" id="edit_modal_w" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Update Your List</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<?php echo form_open('', 'id="edit_form"'); ?>					
					<table class="table">
					<thead>
						<tr>
							<th scope="col">Author</th>
							<th scope="col">Book</th>
							<th scope="col">Date Of Publish</th>
							<th scope="col">Description</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td scope="row"><input type="text"class="form-control" aria-label="First name" style="height: 45px" name="author" id="edit_author"></th>
							<td><input type="text"class="form-control" aria-label="Last name" style="height: 45px" name="name"  id="edit_name"></td>
							<td><input type="date"class="form-control" max="<?php echo date("Y-m-d"); ?>" style="height: 45px" name="date_of_publication" id="edit_date_of_publication"></td>
							<td><textarea cols="30" rows="7" class="form-control" name="description"  id="edit_description"></textarea></td>
							<!-- HIDDEN ID -->
							<td><input type="hidden" name="id" id=""></td>
						</tr>
					</tbody>
					</table>
					<div class="d-flex justify-content-between">
						<button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>	

						<button type="button" id="edit_ajax" class="btn btn-warning">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-save" viewBox="0 0 16 16">
							<path d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v7.293l2.646-2.647a.5.5 0 0 1 .708.708l-3.5 3.5a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L7.5 9.293V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z"/>
						</svg>
							Update List
						</button>
					</div>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</div>


<!-- DELETE MODAL -->
<div class="modal fade" id="delete_modal_w" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete?</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
		<div class="modal-body">
			<div class="alert alert-danger">
			<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
				<path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
			</svg>
				This post will be permanently deleted!
			</div>	
			<?php echo form_open();?>
			<div class="text-center">
				<button id="delete_ajax" type="button" class="btn btn-link">Yes</button>
				&nbsp;or 
				<button type="button" class="btn btn-link" data-bs-dismiss="modal">No</button>					
			</div>
			<?php echo form_close();?>
		</div>
	</div>
</div>
<!-------------------------------------------------------------------------------
------------------------------ MODAL: SECTION ONLY, -----------------------------
-------------------------------------------------------------------------------->

<script>
	$(window).on('load', function() {
		$('.spinner_books').fadeOut(1000);
		$('.books_list_content').fadeIn();
	});
</script>

<!-- REMINDER MODAL -->
<?php include 'application/views/scripts/reminder_script.php';?>
