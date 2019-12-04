<?php include_once("../_config.php") ?>

<?php
  // Get all the posts from the database
  include_once(ROOT . "/includes/_connect.php");
  $conn = connect();

  // Pagination Settings
  $num_of_posts = 10;
  $current_page = $_GET['page'] ?? 1;
  $offset = $num_of_posts * ($current_page - 1);

  $sql = "SELECT 
      *, posts.id as id, posts.updated_at as `updated at`
      FROM posts
      JOIN users ON posts.user_id = users.id
      LIMIT {$offset}, {$num_of_posts}
  ";
  $posts = $conn->query($sql)->fetchAll();

  // Build our navigation
  $post_count = $conn->query("SELECT * FROM posts")->rowCount();
  $num_of_pages = ceil($post_count / $num_of_posts); // ceil (3.x) = 4 if x > 0, round (3.5) = 4 and round (3.4) = 3
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

<nav class="mt-5">
      <ul class="pagination justify-content-center">
        <li class="page-item <?= ($current_page == 1) ? 'disabled' : null ?>">
          <a href="?page=<?= $current_page - 1 ?>" class="page-link">Previous</a>
        </li>
        <?php for ($i = 1; $i <= $num_of_pages; $i++): ?>
          <li class="page-item <?= ($i == $current_page) ? 'active' : null ?>">
            <a href="?page=<?= $i ?>" class="page-link"><?= $i ?></a>
          </li>
        <?php endfor ?>
        <li class="page-item <?= ($current_page == $num_of_pages) ? 'disabled' : null ?>">
        <a href="?page=<?= $current_page + 1 ?>" class="page-link">Next</a>
        </li>
      </ul>
</nav>

<?php include_once(ROOT . '/partials/_footer.php') ?>