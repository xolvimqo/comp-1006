<?php
    include_once("../_config.php");
    if (session_status() === PHP_SESSION_NONE) session_start();

    // Verify user have permission to destroy
    if (!AUTH) redirect(base_path);
    if ($_GET['id'] !== $_SESSION['user']['id'] && !ADMIN) redirect(base_path);

    // Administrators cannot delete themselves
    if (ADMIN && $_GET['id'] === $_SESSION['user']['id']) {
        $_SESSION['flash']['danger'][] = "No KAMAKAZE!! YOU ARE NOT ALLOWED TO DELETE YOURSELF!";
        redirect(base_path . "/users");
    }

    $_GET['id'] = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

    include_once(ROOT . "/includes/_connect.php");
    $conn = connect();
    $sql = "DELETE FROM users WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
    $stmt->execute();

    $_SESSION['flash']['sucess'][] = "User was successfully deleted";
    
    if (!ADMIN) {
        unset($_SESSION['user']);
        redirect(base_path);
    } else {
        redirect(base_path . "/users");
    }
?>