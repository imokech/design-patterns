<?php


require_once getcwd() . DIRECTORY_SEPARATOR . 'Sandwich.php';


class SandwichBuilder
{
    protected $cheese = false;
    protected $beef = false;
    protected $tomato = false;
    protected $sauce = false;

    public function builder() : Sandwich
    {
        return new Sandwich($this);
    }

    public function addCheese()
    {
        $this->cheese = true;
        return $this;
    }

    public function addBeef()
    {
        $this->beef = true;
        return $this;
    }

    public function addTomato()
    {
        $this->tomato = true;
        return $this;
    }

    public function addSauce()
    {
        $this->sauce = true;
        return $this;
    }


}