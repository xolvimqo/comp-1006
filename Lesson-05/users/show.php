<?php include('../_config.php') ?>
<?php if (!AUTH || ($_SESSION['user']['id'] !== $_GET['id']) && !ADMIN) not_admin_redirect(base_path) ?>

<?php
  // Step 1: Get the user by the ID
  include_once("../includes/_connect.php");
  $conn = connect();
  
  // localhost/users/show.php?id=1
  $user_id = $_GET['id'];
  // echo $user_id;
  $sql = "SELECT * FROM users WHERE id = :id LIMIT 1";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':id', $user_id, PDO::PARAM_INT);
  $stmt->execute();
  $user = $stmt->fetch();
?>

<?php
  $_title = "My User Profile";
  $_active = "profile";
?>

<?php include(ROOT . '/partials/_header.php') ?>

<div class="container">
  <header class="mt-5">
    <h1>
      User - <?= $user['first_name'] ?> <?= $user['last_name'] ?>
    </h1>
    <hr>

    <!-- Only show the back link if the user is an administrator -->
    <?php // Step 2: Check if the user is an admin role ?>
      <small>
        <a href="./"><i class="fa fa-chevron-left"></i>&nbsp;Back to users...</a>
      </small>
    <?php // Step 3: end if ?>
  </header>
  
  <div class="row">
    <div class="col-4">
      <img src="<?= $user['avatar'] ?>">
    </div>

    <div class="col-4">
      <table class="table table-striped">
        <tbody>
          <tr>
            <th>Name:</th>
            <td><?= $user['first_name'] ?> <?= $user['last_name'] ?></td>
          </tr>
          <tr>
            <th>Email:</th>
            <td><?= $user['email'] ?></td>
          </tr>
          <tr>
            <th>Created On:</th>
            <td>
              <?= date("d/m/Y", strtotime($user['created_at'])) ?>
              <br>
              <?= date("g:i a", strtotime($user['created_at'])) ?>
            </td>
          </tr>
        </tbody>
      </table>

      <p>
        <a href="<?= base_path ?>/users/edit.php?id=<?= $user['id'] ?>">
          <i class="fa fa-pencil"></i>
          edit
        </a>
        |
        <a href="<?= base_path ?>/users/destroy.php?id=<?= $user['id'] ?>" onclick="return confirm('Are you sure you want to delete?')">
          <i class="fa fa-trash"></i>
          delete
        </a>
      </p>
    </div>
  </div>
</div>

<?php include(ROOT . '/partials/_footer.php') ?>
