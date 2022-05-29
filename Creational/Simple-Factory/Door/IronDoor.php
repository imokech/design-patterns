<?php

require_once getcwd() . DIRECTORY_SEPARATOR . 'Door/Door.php';


class IronDoor implements Door
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
        return $this->width - 0.3;
    }

    public function getHeigth(): float
    {
        return $this->heigth + 0.5;
    }
}