<?php if(!empty(validation_errors())) :?>

	<div class="alert alert-danger text-center">
		<?php echo validation_errors('<li>', '</li>')?>
	</div>

<?php endif; ?>

<hr>
 
<?php echo form_open('posts/update'); ?>

	<input type="hidden" name="id" value="<?php echo $book['id']; ?>"> 

	<div class="form-group">
		<table class="table table-striped">
		<thead>
			<tr>
				<th scope="col"  class="w-25">Author</th>
				<th scope="col">Book</th>
				<th scope="col" class="col-lg-2">Date Of Publish</th>
				<th scope="col">Description</th>
				<th scope="col"></th>
			</tr>
		</thead>

		<tbody class="thead-light">
			<tr>
				<td scope="row"><input type="text" name="author" id="" class="form-control mb-3" placeholder="Title of the Book" value="<?php echo $book['author']; ?>"></td>
				<td><input type="text" name="name" id="" class="form-control mb-3" placeholder="Title of the Book" value="<?php echo $book['name']; ?>"></td>
				<td><input type="date" name="date_of_publication" id="" class="form-control mb-3" max="<?php echo date("Y-m-d"); ?>" placeholder="Date of Publish" value="<?php echo $book['date_of_publication']; ?>"></td>
				<td><textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Description of the Book"><?php echo $book['description']; ?></textarea></td>
				<td>
					<div class="d-flex align-items-center">
						<div class="btn-group" role="group" aria-label="Basic example">
							<button type="submit" class="btn btn-warning">Update</button>
						</div>
					</div>
				</td>
			</tr>
		</tbody>
		
		</table>
	</div>
	
</form>

<hr>
