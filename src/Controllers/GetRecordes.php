<?php

namespace dumb_bird\Controllers;

use dumb_bird\Classes\Access;
use dumb_bird\Classes\DB;

class GetRecordes {
  public static function run() {
    session_start();
    $name = Access::Session();

    if ($name) {
      echo DB::getRecordsByName($name);
    }
  }
}
