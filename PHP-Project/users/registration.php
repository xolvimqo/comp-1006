<?php include('../_config.php') ?>
<?php if (AUTH && !ADMIN) not_admin_redirect(base_path) ?>

<?php
    if (session_status() === PHP_SESSION_NONE) session_start();
    $_title = "Registration";
    $_active = "users";
?>

<?php include(ROOT . '/partials/_header.php') ?>
<?php include(ROOT . '/users/_form.php') ?>
<?php include(ROOT . '/partials/_footer.php');?>

