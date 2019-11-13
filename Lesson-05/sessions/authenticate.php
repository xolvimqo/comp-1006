<?php

  include('../_config.php');
  include(ROOT . '/includes/_connect.php');
  $conn = connect();

  // Step 1: Create a message system
  if (session_status() === PHP_SESSION_NONE) session_start();
  $_SESSION['flash'] = [];

  // Step 2: Validate the user supplied email
  $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

  /*
    You'll notice we're not passing the password to our SQL query.
    This is intentional. The password can contain illegal characters
    in order to make it more secure. Because of this, we can't sanitize
    it. Because we can't sanitize it we don't want to pass it to the database.
    Instead we'll just evaluate the returned user against the password they're
    attempting.
  */
  // Step 4: Check if the user exists in the database
  $sql = "SELECT * FROM users WHERE email = :email";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':email', $email, PDO::PARAM_STR);
  $stmt->execute();
  $user = $stmt->fetch();

  // Step 5: Check the user exists and the password is correct
  // password_verify will evalute the password against the hash and see if they match
  // Security by obscurity! Don't give more information than absolutely necessary
  if (!$user || !password_verify($_POST['password'], $user['password'])) {
    $_SESSION['flash']['danger'][] = "The email or password combination is incorrect.";
    $_SESSION['form_data'] = $_POST;
    header('Location: ' . base_path . '/sessions/login.php');
    exit;
  }


  // Step 6: Set a session variable to verify the user is authenticated
  unset($user['password']);
  $_SESSION['user'] = $user; // this will mean the user has logged in

  // Step 7: Return the user to their profile page
  $_SESSION['flash']['success'][] = "You have successfully logged in.";
  header('Location: ' . base_path . '/users/show.php?id=' . $user['id']);
  exit;