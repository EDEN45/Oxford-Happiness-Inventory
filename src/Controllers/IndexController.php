<?php

namespace dumb_bird\Controllers;

use dumb_bird\Classes\DB;

class IndexController {
  public static function run() {
    $array_records = [];
    $array_records = DB::getRecords();
    require 'src/Views/IndexView.php';
  }
}
