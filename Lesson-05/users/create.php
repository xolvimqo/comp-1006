<?php
  // Add the connection script
  include_once("../_config.php");
  if (AUTH && !ADMIN) not_admin_redirect(base_path);
  
  include_once(ROOT . "/includes/_connect.php");
  $conn = connect();

  // Step 3: Create a message system
  $errors = [];
  // Shaun says this is the good syntax
  if (session_status() === PHP_SESSION_NONE) session_start();
  $_SESSION['flash'] = [];

  /*
    Validation will ensure the user enters in our required
    fields and in the required format
  */
  // Step 3: Add an $errors[] array to store the error messages
  

  // Step 2: Verify the fields aren't empty using a foreach loop
  // Variable variables allow us to use strings to access a variable name
  // Format it into human readable
  // Add a new error to the array
  // $required = ['first_name', 'last_name', 'email', 'password', 'password_confirmation'];
  foreach ($_POST as $field => $value) {
    if (empty($value)) {
      $formatted = str_replace("_", " ", $field);
      $formatted = ucfirst($formatted);
      // array_push($errors, "{$formatted} cannot be empty!");
      $errors[] = "{$formatted} cannot be empty!";
    }
  }

  // Step 3: Verify that the email is in the correct format
  if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Your email is not in a valid format!";
  }

  // Step 4: Verify that the password and password_confirmation match
  if ($_POST['password'] !== $_POST['password_confirmation']) {
    $errors[] = "Your password and password confirmation must match!";
  }

  // Step 5: Return to the form if there are errors (we do this here because we don't want to run malicious code against our database)
  // count the array
  if (count($errors) > 0) {
    $_SESSION['flash']['danger'] = $errors;
    $_SESSION['form_data'] = $_POST;
    header('Location: ' . base_path . '/users/new.php');
    exit; // stops code from continuing to execute
  }

  // redirect back to the form
  // we must exit or the script will continue to run

  /* End of validation */

  /*
    Sanitization will prevent data that isn't permitted
    from being entered into our database
  */
  // Step 6: Sanitize the email
  $_POST['email'] = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

  // Step 7: Sanitize the other two fields
  // (Below is a single line foreach statement. This can be done if the block only has one statement)
  foreach (['first_name', 'last_name'] as $field) $_POST[$field] = filter_var($_POST[$field], FILTER_SANITIZE_STRING);
  /* End of sanitization */

  // Step 8: Users need to be unique, so check if the email already exists
  $sql = "SELECT email FROM users WHERE email = :email";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
  $stmt->execute();
  $exists = $stmt->fetch();
  $stmt->closeCursor();

  // Step 9: Check if the user exists and call an error if it does
  if ($exists) $errors[] = "This user already exists.";

  // Step 10: Return errors
  if (count($errors) > 0) {
    $_SESSION['flash']['danger'] = $errors;
    $_SESSION['form_data'] = $_POST;
    header('Location: ' . base_path . '/users/new.php');
    exit;
  }


  // Step 11: Attempt to write the user to the database
  $sql = "INSERT INTO users (first_name, last_name, email, avatar, password) VALUE (
    :first_name,
    :last_name,
    :email,
    :avatar,
    :password
  )";

  // Get avatar
  $avatar = "http://api.adorable.io/avatars/300/{$_POST['email']}";

  // Step 12: Hash password
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

  // Step 13: Bind Parameters
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':first_name', $_POST['first_name'], PDO::PARAM_STR);
  $stmt->bindParam(':last_name', $_POST['last_name'], PDO::PARAM_STR);
  $stmt->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
  $stmt->bindParam(':avatar', $avatar, PDO::PARAM_STR);
  $stmt->bindParam(':password', $password, PDO::PARAM_STR);
  $stmt->execute();

  // Close our connection
  $conn = null;

  // Step 14: Send back our success message
  $_SESSION['flash']['success'][] = "User was registered successfully.";
  header("Location: " . base_path . "/sessions/login.php");
  exit;

  
  