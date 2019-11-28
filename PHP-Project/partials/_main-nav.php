<?php include_once(dirname(__DIR__) . '/_config.php') ?>

<nav class="xo-nav" role="navigation">
	<div class="header-mid">
	 	<div class="logo">
	 		<a href="<?= base_path ?>/index.php"><img src="<?= base_path ?>/images/9af3305f-1955-4802-a218-e8bc98bdb01fe_200x200.png" alt="logo"></a>
	 	</div>
	 	<nav>
	 		<ul>
				<li class="nav-item">
					<a href="<?= base_path ?>/index.php" class="nav-link">Hotel</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_path ?>/contact.php" class="nav-link">Contacts</a>
				</li>
				<?php if (AUTH): ?>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_path ?>/users/show.php?id=<?= $_SESSION['user']['id'] ?>">My Profile</a>
					</li>
					<li class="nav-item">
						<a href="<?= base_path ?>/sessions/logout.php" class="Sign-up">Logout</a>
					</li>
				<?php endif ?>
				<?php if (ADMIN): ?>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Users
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="<?= base_path ?>/users/registration.php">Create a New User</a>
							<a class="dropdown-item" href="<?= base_path ?>/users">View All Users</a>
						</div>
					</li>
				<?php endif ?>
				<?php if (!AUTH): ?>
					<li class="nav-item">
						<a href="<?= base_path ?>/sessions/login.php" class="Sing-in">Login</a>
					</li>
					<li class="nav-item">
						<a href="<?= base_path ?>/users/registration.php" class="Sign-up">Sign up</a>
					</li>
				<?php endif ?>
	 		</ul>
	 	</nav>
	</div>
</nav>