<?php

// Our GET superglobal values
  var_dump($_GET);

  // Our POST superglobal values
  var_dump($_POST);

  // Access SESSION superglobal
  session_start(); // SUPER IMPORTANT!!! DON"T FORGET!!!
  $_SESSION['my_superglobal_session'] = "gobblygook";
  // $_SESSION = $_GET ?? $_SESSION;
  $_SESSION = count($_GET) ? $_GET : $_SESSION;
  var_dump($_SESSION);

 ?>

<a href="./superglobals.php?name=Terry&age=31&color=black">Query Params</a>

<form method="post">
  <input name="first_name">
  <br>
  <input name="last_name">
  <br>
  <button type="submit">Submit</button>
</form>
