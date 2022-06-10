<?php

require_once getcwd() . DIRECTORY_SEPARATOR . 'Door/Door.php';


class WoodenDoor implements Door
{
    private $width;
    private $heigth;

    public function __construct(float $width, float $heigth)
    {
        $this->width = $width;
        $this->heigth = $heigth;
    }

    public function getWidth(): float
    {
        return $this->width;
    }

    public function getHeigth(): float
    {
        return $this->heigth;
    }
}