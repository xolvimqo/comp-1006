<?php include_once('../_config.php') ?>

<?php
    include_once(ROOT . "/includes/_connect.php");
    $conn = connect();
    $sql = "SELECT * FROM users WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
    $stmt->execute();
    $user = $stmt->fetch();

    if (session_status() === PHP_SESSION_NONE) session_start();
    $_SESSION['form_data'] = $user;
?>

<?php
  $_title = "Create a New User - Admin";
  $_active = "users";
  $_action = base_path . "/users/update.php";
?>

<?php include(ROOT . '/partials/_header.php') ?>

<div class="container">
  <header class="mt-5">
    <h1>Register a New User</h1>
    <hr>
    <small>
      <a href="./"><i class="fa fa-chevron-left"></i>&nbsp;Back to users...</a>
    </small>
  </header>

  <div class="row">
    <div class="col-sm-4">
      <img id="avatar" src="" alt="avatar" class="invisible border">
    </div>

    <div class="col-sm-8 border">
      <?php include(ROOT . "/users/_form.php") ?>
    </div>
  </div>
</div>

<?php include(ROOT . '/partials/_footer.php') ?>