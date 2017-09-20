<?php

namespace dumb_bird\Routes;

use dumb_bird\Classes\Route;
use dumb_bird\Controllers\IndexController;
use dumb_bird\Controllers\LoginController;
use dumb_bird\Controllers\OutController;
use dumb_bird\Controllers\GameController;
use dumb_bird\Controllers\GetRecordes;
use dumb_bird\Controllers\SetRecordes;
use dumb_bird\Controllers\Page404Controller;

class Routes {

# путь и вызываемы контроллер
  private function goRoutes()
  {
    Route::set('/', function () {
      IndexController::run();
    });

    Route::set('/login', function () {
      LoginController::run();
    });

    Route::set('/out', function () {
      OutController::run();
    });

    Route::set('/game', function () {
      GameController::run();
    });

    # для ajax запроса данных
    Route::set('/getr', function () {
      GetRecordes::run();
    });

    # для ajax запроса данных
    Route::set('/setr', function () {
      SetRecordes::run();
    });
  }

# вход в программу
  public function run () {

    # регистрация путей
    Route::registrRoute(['/', '/login', '/game', '/out', '/getr', '/setr']);

    # проверяем пути от регистрации, если левый адрес, показываем 404
    if (Route::isRouteValid()) {
      Page404Controller::run();
    }
    else {
      $this->goRoutes();
    }
  }
}
