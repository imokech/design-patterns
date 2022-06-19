<?php

class Sandwich 
{
    protected $cheese;
    protected $meat;
    protected $sauce;

    public function __construct(SandwichBuilder $sandwichBuilder)
    {
        $this->meat = $sandwichBuilder->meat;
        $this->sauce = $sandwichBuilder->sauce;
        $this->cheese = $sandwichBuilder->cheese;
    }
}