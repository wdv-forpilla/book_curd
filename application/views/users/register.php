<?php if(!empty(validation_errors())) : ?>

	<div class="alert alert-danger text-center">
		<?php echo validation_errors('<li>', '</li>'); ?>
	</div>

<?php endif; ?>

<div class="container">
	<div class="align-items-center ">
		<div class="col-md-10 mx-auto col-lg-5">
			<?php echo form_open('users/register', 'class="p-4 p-md-5 border rounded-3 bg-light"'); ?>
			<h2 class="text-center display-6 fw-bold mb-5"><?= $title ?></h2>
				<div class="alert alert-light" role="alert" style="height: 11vh;">
					<ul>
						<li>Please use appropriate <i>Name/Pen-name/Alias</i></li>
						<li>Please use your working active Email Address</li>
						<li>Please use appropriate <i>Name/Pen-name/Alias</i></li>
					</ul>
				</div>
				<div class="form-floating mb-3">
					<input type="text" class="form-control" name="name" id="floatingInput" placeholder="name@example.com">
					<label for="floatingInput">Name/Pen-name/Alias</label>
				</div>
				<div class="form-floating mb-3">
					<input type="email" class="form-control" name="email" id="floatingPassword" placeholder="Password">
					<label for="floatingPassword">Email-Address</label>
				</div>
				<div class="form-floating mb-3">
					<input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
					<label for="floatingPassword">Password</label>					
				</div>
				<div class="form-floating mb-3">
					<input type="password" class="form-control" name="confirm_password" id="floatingPassword" placeholder="Password">
					<label for="floatingPassword">Confirm Password</label>	
				</div>
				<button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
				<hr class="my-4">
				<small class="text-muted">Already have an account? You may <a href="<?php echo base_url();?>users/login">Log in</a> now.</small>
			<?php echo form_close(); ?>
		</div>

	</div>
</div>
