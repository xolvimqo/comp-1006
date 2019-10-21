<?php include_once(dirname(__DIR__) . '/_config.php') ?>
<!-- Step 1: Add the base path to all the urls -->
<!-- Step 2: Add the conditional active class to all the nav-item lis -->
<nav class="gtco-nav" role="navigation">
  <div class="gtco-container">
    <div class="row">
      <div class="col-xs-2">
        <div id="gtco-logo"><a href="<?= base_path ?>">Title</a></div>
      </div>
      <div class="col-xs-10 text-right menu-1">
        <ul>
          <li class="active"><a href="<?= base_path ?>">Home</a></li>
          <li><a href="<?= base_path ?>/about.php">About</a></li>
					<li class="has-dropdown">
						<a href="services.html">Services</a>
						<ul class="dropdown">
							<li><a href="#">Web Design</a></li>
							<li><a href="#">eCommerce</a></li>
							<li><a href="#">Branding</a></li>
							<li><a href="#">API</a></li>
						</ul>
					</li>
          <li class="has-dropdown">
						<a href="#">Dropdown</a>
						<ul class="dropdown">
							<li><a href="#">HTML5</a></li>
							<li><a href="#">CSS3</a></li>
							<li><a href="#">Sass</a></li>
							<li><a href="#">jQuery</a></li>
						</ul>
					</li>
					<li><a href="<?= base_path ?>/contact.php">Contact</a></li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_path ?>/users/show.php?id=">My Profile</a>
          </li>
          <li class="has-dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="buttom" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Users</a>
            <ul class="dropdown">
              <li><a class="dropdown-item" href="<?= base_path ?>/users/new.php">Create a New User</a></li>
              <li><a class="dropdown-item" href="<?= base_path ?>/users">View All Users</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>

<!--
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="<?= base_path ?>/">SM</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?= base_path ?>/">Ma House</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_path ?>/about.php">About Me</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_path ?>/contact.php">Contact Me</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_path ?>/users/show.php?id=">My Profile</a>
      </li>


      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Users
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?= base_path ?>/users/new.php">Create a New User</a>
          <a class="dropdown-item" href="<?= base_path ?>/users">View All Users</a>
        </div>
      </li>

    </ul>

    <ul class="navbar-nav ml-auto">

      <li class="nav-item">
        <a href="/sessions/login.php" class="nav-link">
          <i class="fa fa-unlock"></i>&nbsp;Login
        </a>
      </li>
      <li class="nav-item">
        <a href="/users/new.php" class="nav-link">
          <i class="fa fa-user"></i>&nbsp;Register
        </a>
      </li>



      <li class="nav-item">
        <a href="/sessions/logout.php" class="nav-link">
          <i class="fa fa-lock"></i>&nbsp;Logout
        </a>
      </li>

    </ul>
  </div>
</nav>
-->