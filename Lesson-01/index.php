<!DOCTYPE html>
<html>
  <head>
    <title>Look Ma No Hands</title>
  </head>
  <body>
    <header>
      <h1>Table of Contents</h1>
    </header>
    <section>
      <ol>
        <?php
          $items = [
            "index.php" => "Home",
            "static.html" => "Static Web Page",
            "dynamic.php" => "Dynamic Web Page",
            "php-syntax.php" => "PHP Syntax"
          ];
          // phpinfo();
        ?>

        <?php foreach($items as $path => $title): ?>
          <li>
            <!-- <a href="<?php echo $path; ?>"><?php echo $title; ?></a> -->
            <a href="<?= $path ?>"><?= $title ?></a>
          </li>
        <?php endforeach ?>
      </ol>
    </section>
  </body>
</html>

<!-- <?php
  $title = "Lesson 01";
  $subtitle = "Introducing PHP";
  $toc_title = "Introducing PHP";
  $toc_items = [['Intro to PHP Syntax', 'php-syntax.php'], ['Static Grilled Cheese', 'static.html'], ['Dynamic Grilled Cheese', 'dynamic.php'], ['Lab 01 - Your Favourite Band', 'lab-01.php']];
?>

<?php include("../includes/header.php") ?>
<?php include("../includes/lesson-header.php") ?>
<?php include("../includes/table-of-contents.php") ?>
<?php include("../includes/footer.php") ?> -->
