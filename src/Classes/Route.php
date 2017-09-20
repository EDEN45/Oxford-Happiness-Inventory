<?php

namespace dumb_bird\Classes;

class Route {
  # здесь записываются все пути
  private static $validRoutes = [];

  public static function registrRoute($arrayRoutes = []) {
    self::$validRoutes = $arrayRoutes;
  }

  # функция принимает путь и запускает функцию
  public static function set($route, $function) {

    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    self::$validRoutes[] = $route;
    if ($uri == $route)
    {
      $function->__invoke();
    }
  }


  # при создании вьюхи будет запускаться эта функция на проверку правильности путей
  public static function isRouteValid() {
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    if (in_array($uri, self::$validRoutes)) {
      return 0;
    }
    else {
      return 1;
    }
  }

  # поделиться содержимым массива путей
  public static function getValidRoutes(){
    return self::$validRoutes;
  }
}
