<?php


require_once getcwd() . DIRECTORY_SEPARATOR . 'SandwichBuilder.php';


$sandwichOne = (new SandwichBuilder())->addCheese()->addBeef()->addSauce();

var_dump($sandwichOne);