<?php

namespace dumb_bird\Controllers;

class RezController {
  public static function run() {
  	$rez = 0;
    for ($i = 1; $i < 30; $i++)
    {
    	if ($_POST['v'.$i] == "b")
    	{
    		$rez += 1;
    	}
    	elseif ($_POST['v'.$i] == "c") {
    		$rez += 2;
    	}

    	elseif ($_POST['v'.$i] == "d") {
    		$rez += 3;
    	}
    }

    $rez = ($rez / 87) * 100;
    require 'src/Views/RezView.php';
  }
}