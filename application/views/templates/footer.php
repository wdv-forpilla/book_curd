	</div>
	<!-- FOOTER -->
	<div class="b-example-divider"></div>

	<div class="container">
	<footer class="py-3 my-4">
		<ul class="nav justify-content-center border-bottom pb-3 mb-3">
			<li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
			<li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
			<li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
			<li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
			<li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
		</ul>
		<p class="text-center text-muted">&copy; 2021 Company, Inc</p>
	</footer>		
	<!-- FOOTER -->

	<!-- AJAX, JQUERY AND JAVASCRIPT-->
	<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
	<!-- DATA TABLE SCRIPT -->
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>	

	<!-- SCRIPTS BOOK -->
	<?php include 'application/views/ajax_scripts/book_create_script.php'; ?>
	<?php include 'application/views/ajax_scripts/book_edit_script.php';?>
	<?php include 'application/views/ajax_scripts/book_delete_script.php';?>

	<!-- SCRIPTS AUTHOR -->
	<?php include 'application/views/ajax_scripts/author_create_script.php'; ?>
	<?php include 'application/views/ajax_scripts/author_delete_script.php';?>
	<?php include 'application/views/ajax_scripts/author_edit_script.php';?>
	
	<!-- AJAX: DataTable -->
	<?php include 'application/views/ajax_datatable_scripts/ajax_datatable_books_script.php';?>
	<?php include 'application/views/ajax_datatable_scripts/ajax_datatable_authors_script.php';?>

	</body>
</html>
