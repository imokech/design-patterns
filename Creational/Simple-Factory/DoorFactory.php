<?php

require_once getcwd() . DIRECTORY_SEPARATOR . 'Door/Door.php';
require_once getcwd() . DIRECTORY_SEPARATOR . 'Door/WoodenDoor.php';

class DoorFactory
{
    public static function makeDoor(float $width, float $heigth) : Door
    {
        return new WoodenDoor($width, $heigth);
    }
}