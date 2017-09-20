<?php

namespace dumb_bird\Controllers;

use dumb_bird\Classes\DB;

class IndexController {
  public static function run() {
    $array_records = [];
    $array_records = DB::getRecords();
    arsort($array_records);
    require 'src/Views/IndexView.php';
  }
}
