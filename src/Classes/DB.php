<?php

namespace dumb_bird\Classes;

class DB {


  private static $user_array = [
     ['Андрей','1234', '432'],
     ['Вася','2244', '23'],
     ['Алина','991', '89'],
     ['Игорь','9', '1'],
     ['Слава','1','200']
  ];

  public static function getRecords() {
    $new_array = [];
    foreach (self::$user_array as $key => $value) {
      $new_array[$value[0]] = $value[2];
    }
    return $new_array;
  }


  public static function setRecords($name, $recordes) {
    foreach (self::$user_array as $key => $value) {
      if ($name === $value[0]){
        self::$user_array[$key][2] = $recordes;
      }
    }
  }

  public static function getPass($name) {
    foreach (self::$user_array as $key => $value) {
      if ($name === $value[0]){
        return $value[1];
      }
    }
  }

  public static function getRecordsByName($name) {
    foreach (self::$user_array as $key => $value) {
      if ($name === $value[0]){
        return $value[2];
      }
    }
  }

}

?>
