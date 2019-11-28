<?php include_once("../_config.php") ?>

<?php
    // Get the post via the query param
    include_once(ROOT . "/includes/_connect.php");
    $conn = connect();

    $sql = "SELECT 
        *, posts.id as id, posts.updated_at as `updated at`
        FROM posts
        JOIN users ON posts.user_id = users.id
        WHERE posts.id = :id
    ";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
    $stmt->execute();
    $post = $stmt->fetch();

    $sql = "SELECT *, comments.id as id
    FROM comments 
    JOIN users ON comments.user_id = users.id
    WHERE post_id = {$post['id']}";
    $comments = $conn->query($sql)->fetchAll();
?>

<?php include_once(ROOT . '/partials/_header.php') ?>

<article class="container">
  <header class="mt-5">
    <h1>
      <?= $post['title'] ?>
      <br>
      <small>~<?= $post['first_name'] ?> <?= $post['last_name'] ?></small>
    </h1>
  </header>

  <hr class="m-5">

  <section class="ml-5 d-flex flex-row justify-content-between align-items-center">
    <img src="https://via.placeholder.com/350x200" alt="asdf" class="mr-4">
    <p><?= $post['content'] ?></p>
  </section>

  <hr class="m-5">

  <p class="ml-5">
    <a href="<?= base_path ?>/posts">Return to archives...</a>
  </p>
</article>

<hr class="m-5">

<?php if (count($comments) > 0): ?>
  <div class="container" id="comments">
    <h2>Comments</h2>

    <div class="mt-5">
      <ul class="list-group">
        <?php foreach ($comments as $comment): ?>
          <li class="list-group-item">
            <h5 class="mb-4">
              <?= $comment['title'] ?>
              <small>&nbsp;&mdash;&nbsp;<?= $comment['first_name'] ?> <?= $comment['last_name'] ?></small>
            </h5>
            <hr>
            <div class="ml-5 d-flex flex-row justify-content-between align-items-center">
              <img src="<?= $comment['avatar'] ?>" alt="placeholder" class="img-fluid img-thumbnail mr-2" style="max-width: 150px; border-radius: 150px;">
              <p>
                <?= substr($comment['comment'], 0, 150) ?>&hellip;
                <a href="<?= base_path ?>/comments/show.php?id=<?= $comment['id'] ?>">more</a>
              </p>
            </div>
          </li>
        <?php endforeach ?>
      </ul>
    </div>
  </div>
<?php endif ?>

<?php include_once(ROOT . '/partials/_footer.php') ?>