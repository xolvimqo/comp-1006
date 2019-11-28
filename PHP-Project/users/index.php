<?php include('../_config.php') ?>
<?php not_admin_redirect(base_path) ?>

<?php
  // Step 8: Check if the user is authenticated and is an administrator
  // Check if the user is even authenticated first. If not, move them along


?>

<?php
  // Step 1: Get the users
  // Include the connect script
  include_once(ROOT . '/includes/_connect.php');
  $conn = connect();
  $sql = "SELECT * FROM tbl_user";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $users = $stmt->fetchAll();
?>

<?php
  // Step 2: Define the $_title and $_active link


?>

<!-- Step 3: Include the _header.php file -->
<?php include(ROOT . '/partials/_header.php') ?>

<div class="container">
  <header class="mt-5">
    <h1>
      Users
    </h1>
    <hr>
    <small>
      <a href="<?= base_path ?>/users/registration.php"><i class="fa fa-plus"></i>&nbsp;New user...</a>
    </small>
  </header>

  <?php if (count($users) > 0): ?>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Profile</th>
          <th>Name</th>
          <th>Email</th>
          <th>Created On</th>
        </tr>
      </thead>

      <tbody>
        <!-- Iterate over the users and display their details -->
        <?php foreach($users as $user): ?>
          <tr>
            <td>
              <?php
                printf('<image width="80px" height="auto" src="data:%s;base64,%s"/>',
                $user['image_type'], 
                base64_encode($user['profile_image']));
              ?>
            </td>
            <td>
              <a href="<?= base_path ?>/users/show.php?id=<?= $user['id'] ?>">
                <?= $user['first_name'] ?> <?= $user['last_name'] ?>
              </a>
            </td>

            <td><?= $user['email'] ?></td>

            <td>
              <?= date("d/m/Y", strtotime($user['registration_date'])) ?>
              <br>
              <?= date("g:i a", strtotime($user['registration_date'])) ?>
            </td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  <?php else: ?>
    <div class="alert alert-warning">
      <h4 class="alert-heading">
        NO USERS!
      </h4>
      <hr>
      <p>Perhaps you should create a new one...</p>
    </div>
  <?php endif ?>
</div>

<?php include(ROOT . '/partials/_footer.php') ?>