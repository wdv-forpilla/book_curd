<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="data:;base64,iVBORw0KGgo=">
	<link rel="icon" href="data:,">
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<!-- EXTERNAL CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<!-- DATATABLES -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.2/css/jquery.dataTables.css">
	<title>Books CRUD</title>
	<style>
		sup {
			font-weight: bold;
			color: red;
		}
		.author_class {
			font-weight: bold;
		}
		.date_class {
			font-style: italic;
		}
		.author_list_content {
			display: none;
		}
		.books_list_content {
			display: none;
		}
	</style>
</head>
	<body>
	
	<header class="p-3 bg-dark text-white">
		<div class="container">
			<div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
				<ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
					<li><h3><a href="" class="nav-link px-2 text-white"><i class="bi bi-code-slash"></i> Books_CURD</a></li></h3>
				</ul>
				<div class="text-end">
					<?php if(!$this->session->userdata('logged_in')) : ?>
						<a href="<?php echo base_url();?>users/Login" class="btn btn-outline-light me-2"><i class="bi bi-box-arrow-right"></i> Login</a>
						<a href="<?php echo base_url();?>users/register" class="btn btn-warning"><i class="bi bi-person-circle"></i> Register</a>
					<?php endif; ?>
						
					<?php if($this->session->userdata('logged_in')) : ?>
						<button class="btn btn-light" id="reminder_modal"><i class="bi bi-bell"></i> Notice</button>
						<a href="<?php echo base_url();?>users/logout" class="btn btn-outline-danger"><i class="bi bi-box-arrow-in-left"></i> Logout</a>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</header>

	<div class="container pt-4">
	
	<!-- REGSITER SUCCESSFUL MESSAGE -->
	<?php if($this->session->flashdata('user_registered')) :?>
		<div>
			<?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'?>
		</div>
	<?php endif;?>

	<!-- CREATED POST -->
	<?php if($this->session->flashdata('created_post')) : ?>	
		<div class="">
			<?php echo '<p class="alert alert-success">'.$this->session->flashdata('created_post').'</p>'?>
					
		</div>
	<?php endif; ?>

	<!-- UPDATE POST -->
	<?php if($this->session->flashdata('updated_post')) : ?>
		<div>
			<?php echo '<p class="alert alert-success">'.$this->session->flashdata('updated_post').'</p>'?>
		</div>
	<?php endif;?>

	<!-- SUCCESSFUL LOGIN -->
	<?php if($this->session->flashdata('loggedin_user')) : ?>
		<div>
			<?php echo '<p class="alert alert-success">'.$this->session->flashdata('loggedin_user').'</p>'?>
		</div>
	<?php endif;?>

	<!-- FAILED LOGIN -->
	<?php if($this->session->flashdata('loggedin_fail')) : ?>
		<div>
			<?php echo '<p class="alert alert-danger">'.$this->session->flashdata('loggedin_fail').'</p>'?>
		</div>
	<?php endif;?>

	<!-- LOGGED OUT USE -->
	<?php if($this->session->flashdata('loggedout_user')) : ?>
		<div>
			<?php echo '<p class="alert alert-success">'.$this->session->flashdata('loggedout_user').'</p>'?>
		</div>
	<?php endif;?>

	<!-- ENHANCEMENT INITIAL MESSAGE -->
		<?php if($this->session->flashdata('e_add_success')) : ?>
			<div>
				<?php echo '<p class="alert alert-success">'.$this->session->flashdata('e_add_success').'</p>'?>
			</div>
		<?php endif;?>

		<?php if($this->session->flashdata('e_add_failed')) : ?>
			<div>
				<?php echo '<p class="alert alert-danger">'.$this->session->flashdata('e_add_failed').'</p>'?>
			</div>
		<?php endif;?>

		<?php if($this->session->flashdata('e_delete_success')) : ?>
			<div>
				<?php echo '<p class="alert alert-success">'.$this->session->flashdata('e_delete_success').'</p>'?>
			</div>
		<?php endif;?>

		<?php if($this->session->flashdata('e_delete_failed')) : ?>
			<div>
				<?php echo '<p class="alert alert-danger">'.$this->session->flashdata('e_delete_failed').'</p>'?>
			</div>
		<?php endif;?>

		<?php if($this->session->flashdata('e_edit_success')) : ?>
			<div>
				<?php echo '<p class="alert alert-danger">'.$this->session->flashdata('e_edit_success').'</p>'?>
			</div>
		<?php endif;?>

		<?php if($this->session->flashdata('e_edit_failed')) : ?>
			<div>
				<?php echo '<p class="alert alert-danger">'.$this->session->flashdata('e_edit_failed').'</p>'?>
			</div>
		<?php endif;?>
	<!-- ENHANCEMENT INITIAL MESSAGE -->

<!-------------------------------------------------------------------------------- 
------------------------- MODAL: REMINDER SECTION ONLY, --------------------------
-------------------------------------------------------------------------------->
<!-------------------------------------------------------------------------------- 
------------------------- MODAL: REMINDER SECTION ONLY, --------------------------
 -------------------------------------------------------------------------------->


		


	

