<?php include('../_config.php') ?>

<?php
  // Step 8: Check if the user is authenticated and is an administrator
  // Check if the user is even authenticated first. If not, move them along


?>

<?php
  // Step 1: Get the users
  // Include the connect script
  include_once(ROOT . '/includes/_connect.php');
  $sql = "SELECT * FROM users";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $users = $stmt->fetchAll();
  // var_dump($users);
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
      <a href="<?= base_path ?>/users/new.php"><i class="fa fa-plus"></i>&nbsp;New user...</a>
    </small>
  </header>

  <?php if (count($users) > 0): ?>
    <table class="table table-striped">
      <thead>
        <tr>
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
              <a href="<?= base_path ?>/users/show.php?id=<?= $user['id'] ?>">
                <?= $user['first_name'] ?> <?= $user['last_name'] ?>
              </a>
            </td>

            <td><?= $user['email'] ?></td>

            <td>
              <?= date("d/m/Y", strtotime($user['created_at'])) ?>
              <br>
              <?= date("g:i a", strtotime($user['created_at'])) ?>
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
