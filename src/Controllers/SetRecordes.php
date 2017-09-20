<?php

namespace dumb_bird\Controllers;

use dumb_bird\Classes\Access;
use dumb_bird\Classes\DB;

class SetRecordes {
  public static function run() {
    session_start();
    $name = Access::Session();
    if ($name) {
      $max = $_POST['max']??null;
      if (!empty($max)) {
        DB::setRecords($name, $max);
      }

    }
  }
}
