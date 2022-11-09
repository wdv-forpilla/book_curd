<?php if(!empty(validation_errors())) :?>

	<div class="alert alert-danger text-center">
		<?php echo validation_errors('<li>', '</li>')?>
	</div>

<?php endif; ?>

<h2 class="text-center"><?= $title?></h2>

<?php echo form_open('posts/create'); ?>

	<div class="row">
		<div class="col-md-4 offset-md-4">

			<div class="form-group">
				<label for="" class="mb-1">Name</label>
				<input type="text" name="name" id="" class="form-control mb-3">
			</div>

			<div class="form-group">
				<label for="" class="mb-1">Author</label>
				<input type="text" name="author" id="" class="form-control mb-3" >
			</div>

			<div class="form-group">
				<label for="" class="mb-1">Date of Publish</label>
				<input type="date" name="date_of_publication" id="" class="form-control mb-3" max="<?php echo date("Y-m-d"); ?>">
			</div>

			<label for="" class="mb-1">Description</label>
			<textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>

			<div class="pt-4">
				<button type="submit" class="btn btn-primary form-control">Add</button>
			</div>

		</div>
	</div>

<?php echo form_close(); ?>
