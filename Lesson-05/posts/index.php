<?php include_once("../_config.php") ?>

<?php
    // Get all the posts from the database
    include_once(ROOT . "/includes/_connect.php");
    $conn = connect();
    $sql = "SELECT 
        *, posts.id as id, posts.updated_at as `updated at`
        FROM posts
        JOIN users ON posts.user_id = users.id
    ";
    $posts = $conn->query($sql)->fetchAll();
?>

<?php include_once(ROOT . '/partials/_header.php') ?>

<div class="container">
  <header class="mt-5">
    <h1>
      My Blogs (Archives)
      <br>
      <small>the day in a life...</small>
    </h1>
  </header>
</div>
<hr class="m-5">

<div class="container">
  <div class="archives">
    <?php foreach ($posts as $post): ?>
        <div class="card mb-2">
        <div class="card-body d-flex flex-row justify-content-between align-items-center">
          <div class="mr-4">
            <img src="https://via.placeholder.com/350x300" alt="asdf" class="img-fluid img-thumbnail">
          </div>
          <div>
            <div class="card-title">
              <h3>
                <a href="<?= base_path ?>/posts/show.php?id=<?= $post['id'] ?>"><?= $post['title'] ?></a>
              </h3>
              <hr>
              <small>Author: <?= $post['first_name'] ?> <?= $post['last_name'] ?></small>
            </div>
            <p class="card-text">
              <?= substr($post['content'], 0, 200) ?>...
              <a href="<?= base_path ?>/posts/show.php?id=<?= $post['id'] ?>">read more</a>
            </p>
          </div>
        </div>
      </div>
    <?php endforeach ?>
  </div>
</div>

<?php include_once(ROOT . '/partials/_footer.php') ?>