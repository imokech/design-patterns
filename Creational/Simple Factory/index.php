<?php

require_once getcwd() . DIRECTORY_SEPARATOR . 'DoorFactory.php';

$doorOne = DoorFactory::makeDoor(3.50, 8);

echo "Size W: " . $doorOne->getWidth();
echo ' ';
echo "Size H: " . $doorOne->getHeigth();

var_dump($doorOne);