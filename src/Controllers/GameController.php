<?php

namespace dumb_bird\Controllers;

use dumb_bird\Classes\Access;

class GameController {
  public static function run() {
    session_start();

    $name = Access::Session();

    if ($name) {
      require 'src/Views/GameView.php';
    }
    else {
      header('Location: /login');
    }




  }
}
