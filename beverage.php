<?php
class Beverage
{
    protected string $color;
    protected float $price;
    protected string $temperature;
    const barname = 'Het Vervolg';
    private static string $address = "Melkmarkt 9, 2000 Antwerpen";

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

    function setColor(string $color)
    {
        $this->color = $color;
    }
    function getColor()
    {
        return $this->color;
    }
    function setPrice(float $price)
    {
        $this->price = $price;
    }
    function getPrice()
    {
        return $this->price;
    }
    function setTemperature(string $temperature)
    {
        $this->temperature = $temperature;
    }
    function getTemperature()
    {
        return $this->temperature;
    }
    function getBarname()
    {
        return self::barname;
    }
    public static function getAddress()
    {
        return self::$address;
    }
}