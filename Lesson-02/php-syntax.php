<!DOCTYPE html>
<html>

<head>
  <title>PHP Syntax</title>
</head>

<body>
  <header>
    <h1>PHP Syntax</h1>
  </header>

  <section>
    <h2>PHP Tags (block & inline) & Commenting</h2>

    <!-- Block Tags -->
    <?php // Opening PHP tag

      // This is a single line comment
      /*
        This is a multi-line comment
      */

    ?> <!-- Closing PHP tag -->
  </section>

  <section>
    <h2>Variables & Data Types</h2>

    <?php
      $my_fullname = 'Yu-Ming Gu';
      $my_fullname = "Terry Gu";
      $lastname = "Gu";
      $my_fullname = "Terry " . $lastname;
      $my_fullname = "Terry $lastname";
      $my_fullname = "Terry {$lastname}";
      $my_fullname = "Terry is \$bigdollar";
      $pet = 'My pet\'s name is Ninetails';
      $bobs_bool = true;
      $bobd_bool = "true";
      $numbers = -3.14;
      $integers = 10;
    ?>
  </section>

  <section>
    <h2>Printing to the Screen (block & inline), Quotes, Concatenation & Interpolation</h2>
  </section>

  <section>
    <h2>Decision Structure</h2>

    <p>Hello</p>
    <p><?php echo("<strong>Hello World!</strong>"); ?></p>
  </section>

  <section>
    <h2>Arrays & Hashes</h2>
  </section>

  <section>
    <h2>Repetition Structures</h2>
  </section>

  <section>
    <h2>Functions</h2>
  </section>

  <section>
    <h2>Common PHP Functions</h2>
  </section>

  <section>
    <h2>Objects (structs)</h2>
  </section>

  <section>
    <h2>Introducing Classes</h2>
  </section>
</body>

</html>