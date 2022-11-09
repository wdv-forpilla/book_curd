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
			<td scope="row"><?php echo $post['author']; ?></td>
			<td><?php echo $post['name']; ?></td>
			<td><?php echo $post['date_of_publication']; ?></td>
			<td><?php echo $post['description']; ?></td>
			<td>
				<div class="d-flex align-items-center">
					<div class="btn-group" role="group" aria-label="Basic example">
						<a href="<?php echo site_url('/posts/'.$post['id']);?>" class="btn btn-link">Edit</a>

						<!-- MODAL TRIGGER -->
						<button type="" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</button>

						<?php echo form_open('posts/delete/'.$post['id']); ?>
							<!-- Modal -->
							<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete?</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>
									<div class="modal-body">
										<div class="alert alert-warning">
											This post will be permanently deleted!
										</div>										
									</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-link" data-bs-dismiss="modal">No</button>
											<button type="submit" class="btn btn-danger">Yes</button>
										</div>
									</div>
								</div>
							</div>
						</form>
						
					</div>
				</div>
			</td>
		</tr>
	</tbody>
	
	</table>
</div>
