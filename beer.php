<?php

class Beer extends Beverage
{
    public string $name;
    public float $alcoholpercentage;

    function __construct(string $color, float $price, string $name, float $alcoholpercentage, string $temperature = 'cold')
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
        $this->name = $name;
        $this->alcoholpercentage = $alcoholpercentage;
    }

    function getAlcoholpercentage()
    {
        return $this->alcoholpercentage.'%';
    }
}