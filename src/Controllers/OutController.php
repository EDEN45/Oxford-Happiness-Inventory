<?php

namespace dumb_bird\Controllers;

use dumb_bird\Classes\Access;

class OutController {
  public static function run() {
    Access::SessionExit();
    header('Location: /');
  }

}
