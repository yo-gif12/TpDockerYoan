<?php
   require APPROOT . '/Views/Includes/head.php';
?>

<div>
    <?php
       require APPROOT . '/Views/Includes/navigation.php';
    ?>
</div>
<div class="p-5">
	<h2>Sign up</h2>
	<form class="p-5">
		<div class="d-flex flex-row align-items-center mb-4">
			<i class="fas fa-user fa-lg me-3 fa-fw"></i>
			<div class="form-outline flex-fill mb-0">
				<input type="text" id="form3Example1c" class="form-control" />
				<label class="form-label" for="form3Example1c">Username</label>
			</div>
		</div>
		<div class="d-flex flex-row align-items-center mb-4">
			<i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
			<div class="form-outline flex-fill mb-0">
				<input type="email" id="form3Example3c" class="form-control" />
				<label class="form-label" for="form3Example3c">Email</label>
			</div>
		</div>
		<div class="d-flex flex-row align-items-center mb-4">
			<i class="fas fa-lock fa-lg me-3 fa-fw"></i>
			<div class="form-outline flex-fill mb-0">
				<input type="password" id="form3Example4c" class="form-control" />
				<label class="form-label" for="form3Example4c">Password</label>
			</div>
		</div>
		<div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
			<button type="button" class="btn btn-primary btn-lg">Register</button>
		</div>
	</form>
</div>
