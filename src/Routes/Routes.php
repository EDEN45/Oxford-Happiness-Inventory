<?php

namespace dumb_bird\Routes;

use dumb_bird\Classes\Route;
use dumb_bird\Controllers\IndexController;
use dumb_bird\Controllers\RezController;
use dumb_bird\Controllers\Page404Controller;

class Routes {

# путь и вызываемы контроллер
  private function goRoutes()
  {
    Route::set('/', function () {
      IndexController::run();
    });

    Route::set('/rez', function () {
      RezController::run();
    });


    
  }

# вход в программу
  public function run () {

    # регистрация путей
    Route::registrRoute(['/', '/rez',]);

    # проверяем пути от регистрации, если левый адрес, показываем 404
    if (Route::isRouteValid()) {
      Page404Controller::run();
    }
    else {
      $this->goRoutes();
    }
  }
}
