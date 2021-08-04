<?php
class Beverage
{
    protected string $color;
    private float $price;
    private string $temperature;

    function __construct(string $color, float $price, string $temperature = 'cold')
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }
    
    function getInfo()
    {
        return "This beverage is {$this->temperature} and {$this->color}";
    }

    function setColor($color)
    {
        $this->color = $color;
    }
    function getColor()
    {
        return $this->color;
    }
    function setPrice($price)
    {
        $this->price = $price;
    }
    function getPrice()
    {
        return $this->price;
    }
    function setTemperature($temperature)
    {
        $this->temperature = $temperature;
    }
    function getTemperature()
    {
        return $this->temperature;
    }
}