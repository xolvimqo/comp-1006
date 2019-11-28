<?php
    // Start the session
    if (session_status() === PHP_SESSION_NONE) session_start();

    // Assign the session variables
    $flash_data = $_SESSION['flash'] ?? null;
    $form_data = $_SESSION['form_data'] ?? null;

    // Clear the session variables so it's blank the next time
    unset($_SESSION['flash']);
    unset($_SESSION['form_data']);
?>

<?php include_once(dirname(__DIR__) . '/_config.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	 
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_path ?>/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?= base_path ?>/fontawesome/css/all.min.css">
</head>

<body>
    <?php include(ROOT . '/partials/_main-nav.php') ?>
    
    <!-- Include the _flash.php notification component -->
    <?php include(ROOT . '/partials/_flash.php') ?>
