<?php

    // Add the connection script
    include_once(dirname(__DIR__) . "/_config.php");
    if (session_status() === PHP_SESSION_NONE) session_start();

    // Users can't update their profile unless logged in
    // Users can't update other user profiles unless they're administrators
    if (!AUTH || (AUTH && $_POST['id'] !== $_SESSION['user']['id'] && !ADMIN)) {
        redirect(base_path);
    }

    // Validate
    $errors = [];

    // Check to see if requireds are empty
    $required = ['first_name', 'last_name', 'email'];
    foreach ($required as $field) {
        if (empty($_POST[$field])) { // Variable variables allow us to use strings to access a variable name
            $formatted = ucfirst(str_replace("_", " ", $field)); // Format it into human readable
            $errors[] = "{$formatted} cannot be empty."; // Add a new error to the array
        }
    }

    // Verify email format
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Your email is not in a valid format.";
    }

    // Handle our errors
    if (count($errors) > 0) {
        $_SESSION['flash']['danger'] = $errors;
        $_SESSION['form_data'] = $_POST;
        redirect(base_path . "/users/edit.php?id={$_POST['id']}");
    }

    // Sanitize
    /* 
     * Sanitization will prevent data that isn't permitted from being entered into our database
     */
    $_POST['email'] = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $_POST['id'] = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    foreach(['first_name', 'last_name'] as $field) {
        $_POST[$field] = filter_var($_POST[$field], FILTER_SANITIZE_STRING);
    }

    // Get the user
    include_once(ROOT . "/includes/_connect.php");
    $conn = connect();
    $sql = "SELECT * FROM users WHERE id = :id"; // a string containing our SQL
    $stmt = $conn->prepare($sql); // prepare the statement to avoid sql injection attacks
    $stmt->bindParam(':id', $_POST['id'], PDO::PARAM_STR); // bind the parameter (enforce it's a string)
    $stmt->execute(); // execute our statement
    $user = $stmt->fetch(); // fetch the result

    // Check if the email exists
    if ($_POST['email'] !== $user['email'] && !ADMIN) {
        $exists = $conn
            ->query("SELECT * FROM users WHERE email = {$user['email']}")
            ->fetch();

        if ($exists) {
            $_SESSION['flash']['danger'][] = "This email already exists.";
            $_SESSION['form_data'] = $_POST;
            redirect(base_path . "/users/edit.php?id={$user['id']}");
        }
    }
    
    $stmt->closeCursor(); // close the connection cursor so it can await a new statement

    // Build our SQL statement
    $sql = "UPDATE users SET 
            first_name = :first_name,
            last_name = :last_name,
            email = :email,
            avatar = :avatar";
    if (!empty($_POST['password'])) {
        // Check if password matches password confirmation
        if ($_POST['password'] === $_POST['password_confirmation']) {
            $sql .= ", password = :password";
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        } else {
            $_SESSION['flash']['danger'][] = "You're password must match password confirmation";
            redirect(base_path . "/users/edit.php?id=" . $_POST['id']);
        }
    }

    $sql .= " WHERE id = :id";

    // Get avatar
    $avatar = "http://api.adorable.io/avatars/300/{$_POST['email']}";
    
    // Bind parameters
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':first_name', $_POST['first_name'], PDO::PARAM_STR);
    $stmt->bindParam(':last_name', $_POST['last_name'], PDO::PARAM_STR);
    $stmt->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
    $stmt->bindParam(':id', $_POST['id'], PDO::PARAM_INT);
    $stmt->bindParam(':avatar', $_POST['avatar'], PDO::PARAM_STR);

    if (!empty($_POST['password'])) {
        $password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $stmt->bindParam(':password', $password_hash, PDO::PARAM_STR);
    }

    $stmt->execute();

    // Close our connection
    $conn = null;

    unset($_POST['password']);

    // Change session user to new data if editing self
    if ($_POST['id'] === $_SESSION['user']['id']) {
        $_SESSION['user'] = array_merge($_SESSION['user'], $_POST);
    }

    $_SESSION['flash']['success'][] = "User was updated successfully";
    redirect(base_path . "/users/show.php?id=" . $_POST['id']);