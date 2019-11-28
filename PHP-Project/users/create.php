<?php
  // Add the connection script
  include_once("../_config.php");
  include_once(ROOT . "/includes/_connect.php");
  $conn = connect();

  // Step 3: Create a message system
  if (session_status() === PHP_SESSION_NONE) session_start();
  $_SESSION['flash'] = [];
  
  /*
    Validation will ensure the user enters in our required
    fields and in the required format
  */
  // Step 3: Add an $errors[] array to store the error messages
  $errors = [];

  // Step 2: Verify the fields aren't empty using a foreach loop
  // Variable variables allow us to use strings to access a variable name
  // Format it into human readable
  // Add a new error to the array
  // $required = ['first_name', 'last_name', 'email', 'password', 'password_confirmation'];
  foreach ($_POST as $field => $value) {
    if (empty($value)) {
      $formatted = ucfirst(str_replace("_", " ", $field)); // uppercase the first letter
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
    $errors[] = "Your password  must match the password confirmation!";
  }

  // Step 5: Return to the form if there are errors (we do this here because we don't want to run malicious code against our database)
  // count the array
  if (count($errors) > 0) {
    $_SESSION['flash']['danger'] = $errors;
    $_SESSION['form_data'] = $_POST;
    header('Location: ' . base_path . '/users/registration.php'); // redirect location
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
  foreach (['first_name', 'last_name'] as $field) {
      $_POST[$field] = filter_var($_POST[$field], FILTER_SANITIZE_STRING);
  }
  /* End of sanitization */

  // Step 8: Users need to be unique, so check if the email already exists
  // a string containing our SQL
  // prepare the statement to avoid SQL injection attacks
  // bind the parameter (enforce it's a string)
  // execute our statement
  // fetch the results
  // close the connection cursor so it can await a new statement
  $sql = "SELECT * FROM tbl_user WHERE email = :email";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
  $stmt->execute();
  $exists = $stmt->fetch();
  $stmt->closeCursor();

  // Step 9: Check if the user exists and call an error if it does
  if ($exists) $errors[] = "This user already exists.";

  // Step 10: Return errors
  // count the array
  if (count($errors) > 0) {
    $_SESSION['flash']['danger'] = $errors;
    $_SESSION['form_data'] = $_POST;
    header('Location: ' . base_path . '/users/registration.php'); // redirect location
    exit; // stops code from continuing to execute
  }

  // redirect back to the form
  // we must exit or the script will continue to run


  // Step 11: Attempt to write the user to the database
  // a string containing our SQL
  $sql = "INSERT INTO tbl_user (first_name, last_name, email, password, phone, address, province, postal_code, profile_image, image_type)
  VALUE (:first_name, :last_name, :email, :password, :phone, :address, :province, :postal_code, :profile_image, :image_type)";

  // Step 12: Hash password
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

  // Step 13: Bind Parameters
  $stmt = $conn->prepare($sql); // prepare the statement
  $stmt->bindParam(':first_name', $_POST['first_name'], PDO::PARAM_STR); // bind the parameter
  $stmt->bindParam(':last_name', $_POST['last_name'], PDO::PARAM_STR); // bind the parameter
  $stmt->bindParam(':email', $_POST['email'], PDO::PARAM_STR); // bind the parameter
  $stmt->bindParam(':password', $password, PDO::PARAM_STR); // bind the parameter
  $stmt->bindParam(':phone', $_POST['phone'], PDO::PARAM_STR);
  $stmt->bindParam(':address', $_POST['address'], PDO::PARAM_STR);
  $stmt->bindParam(':province', $_POST['provice'], PDO::PARAM_STR);
  $stmt->bindParam(':postal_code', $_POST['postal_code'], PDO::PARAM_STR);
  $fp = fopen($_FILES['profile_image']['tmp_name'], 'rb');
  $stmt->bindParam(':profile_image', $fp, PDO::PARAM_LOB); // bind the parameter
  $stmt->bindParam(':image_type', $_FILES['profile_image']['type'], PDO::PARAM_STR);
  $stmt->execute(); // execute

  // Close our connection
  $conn = null;

  // Step 14: Send back our success message
  $_SESSION['flash']['success'][] = "User was registered successfully.";
  // redirect to an index page
  // we must exit or the script will continue to run
  header('Location: ' . base_path . '/sessions/login.php');
  exit;