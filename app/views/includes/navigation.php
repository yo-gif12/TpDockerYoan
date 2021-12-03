<nav class="navbar w-100 navbar-light bg-light">
	<div class="container-fluid">
		<a class="navbar-brand" href="/">CMS</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item"><a href="<?php echo URLROOT; ?>/">Home</a></li>
				<li class="nav-item"><a href="<?php echo URLROOT; ?>/register">Sign up</a></li>
				<li class="nav-item">
					<?php if(isset($_SESSION['user_id'])) : ?>
					<a href="<?php echo URLROOT; ?>/Users/logout">Log out</a>
					<?php else : ?>
					<a href="<?php echo URLROOT; ?>/Users/login">Login</a>
					<?php endif; ?>
				</li>
			</ul>
		</div>
	</div>
</nav>
