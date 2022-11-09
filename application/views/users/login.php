
<?php if(!empty(validation_errors())) : ?>

	<div class="alert alert-danger text-center">
		<?php echo validation_errors('<li>', '</li>'); ?>
	</div>

<?php endif; ?>

<div class="container">
	<div class="my-5 row ">
		<div class="col-lg-7 text-lg-start">
			<h1 class="display-5 fw-bold lh-1 mb-4"> Welcome to <i class="bi bi-code-slash"></i> BooksCURD</h1>
			<p class="col-lg-7 fs-5">Let's take a look at some of the best Books posted on the web today and how they compare against each other. <strong>BooksCURD.com </strong>Best platform for serious bloggers. <strong>BooksCURD.com </strong> Best free blogging platform.</p>
		<!-- NEW SECTION HERE -->
		<div id="hanging-icons">
			<div class="row g-4 py-5 row-cols-1 row-cols-lg-2">
				<!-- LEFT -->
				<div class="col d-flex align-items-start">
					<div class="icon-square bg-light text-dark flex-shrink-0 me-3">
						<i class="bi bi-door-open-fill"></i>
					</div>
					<div>
						<h2 class="fw-bold">Author's Page</h2>
						<p>Pages that allows users to instantly read their Favorite Books' author by reading their biography, another feature is they can ask question(s) by commenting.</p>
						<a href="#" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#login_modal_w">
							<i class="bi bi-arrow-right-short"></i>	Go Now
						</a>
					</div>
				</div>
				<!-- LEFT -->
				<div class="col d-flex align-items-start">
					<div class="icon-square bg-light text-dark flex-shrink-0 me-3">
						<i class="bi bi-file-earmark-arrow-down-fill"></i>
					</div>
					<div>
						<h2 class="fw-bold">Favorite Books</h2>
						<p>This feature display all of the most readed book today's. Including their 'Title of the Book', 'Author's Name',  'Date of Publication' and lastly it own 'Description'.</p>
						<a href="#" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#login_modal_w">
							<i class="bi bi-arrow-right-short"></i> Go Now
						</a>
					</div>
				</div>
			</div>
		</div>
		<!-- NEW SECTION HERE -->
		</div>
		<div class="col-md-10 mx-auto col-lg-5">
			<?php echo form_open('users/login', 'class="p-4 p-md-5 border rounded-3 bg-light"'); ?>
			<h2 class="text-center display-6 fw-bold mb-5"><?= $title ?></h2>
				<div class="form-floating mb-3">
					<input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
					<label for="floatingInput">Email address</label>
				</div>
				<div class="form-floating mb-3">
					<input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
					<label for="floatingPassword">Password</label>
				</div>
				<div class="checkbox mb-3">
					<label>
						<input type="checkbox" value="remember-me"> Remember me
					</label>
				</div>
				<button class="w-100 btn btn-lg btn-primary" type="submit">Log in</button>
				<hr class="my-4">
				<small class="text-muted">By clicking <a href="<?php echo base_url();?>users/register">Sign up</a>, you can register an account for our website.</small>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>

<!-------------------------------------------------------------------------------- 
------------------------- MODAL: REMINDER SECTION ONLY, --------------------------
 -------------------------------------------------------------------------------->
<div class="modal fade" id="login_modal_w" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">			
				<?php echo form_open('users/login', 'class="p-4 p-md-5 border rounded-3"'); ?>
				<h2 class="text-center display-6 fw-bold mb-5"><?= $title ?></h2>
					<div class="form-floating mb-3">
						<input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
						<label for="floatingInput">Email address</label>
					</div>
					<div class="form-floating mb-3">
						<input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
						<label for="floatingPassword">Password</label>
					</div>
					<div class="checkbox mb-3">
						<label>
							<input type="checkbox" value="remember-me"> Remember me
						</label>
					</div>
					<button class="w-100 btn btn-lg btn-primary" type="submit">Log in</button>
					<hr class="my-4">
					<small class="text-muted">By clicking <a href="<?php echo base_url();?>users/register">Sign up</a>, you can register an account for our website.</small>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</div>
 <!-------------------------------------------------------------------------------- 
------------------------- MODAL: REMINDER SECTION ONLY, --------------------------
 -------------------------------------------------------------------------------->
