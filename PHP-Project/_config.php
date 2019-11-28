<?php

  // Define the Directory Root
  define('ROOT', dirname(__FILE__));

  // Define the HTML Path Root
  define('base_path', str_replace(dirname(__DIR__), '/comp-1006', ROOT));

  // Create some authentication constants
  include_once(ROOT . '/includes/_authentication_helpers.php');

  define('AUTH', is_auth());
  define('ADMIN', is_admin());