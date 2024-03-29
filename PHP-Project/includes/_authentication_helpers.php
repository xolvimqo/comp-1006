<?php

  if (session_status() === PHP_SESSION_NONE) session_start();

  function is_auth () {
    return isset($_SESSION['user']);
  }

  function is_admin () {
    return is_auth() && $_SESSION['user']['role'] === 'admin';
  }

  // Helper function to redirect unauthenticated user
  function not_auth_redirect($path) {
    if (!is_auth()) {
      header('Location: ' . $path);
      exit;
    }
  }

  function not_admin_redirect($path) {
    if (!is_auth() || !is_admin()) {
      header('Location: ' . $path);
      exit;
    }
  }

  function redirect ($path) {
    header("Location: {$path}");
    exit;
  }