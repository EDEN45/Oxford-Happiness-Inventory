<?php

namespace dumb_bird\Controllers;

use dumb_bird\Classes\Access;

class LoginController {
  public static function run() {
    session_start();
    $name = Access::Session();

    if ($name) {
      header('Location: /game');
    }
    else {
      require 'src/Views/LoginView.php';
    }
  }
}
