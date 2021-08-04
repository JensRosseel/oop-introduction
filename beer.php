<?php

class Beer extends Beverage
{
    private string $name;
    private float $alcoholpercentage;

    function __construct(string $color, float $price, string $name, float $alcoholpercentage, string $temperature = 'cold')
    {
        parent::__construct($color, $price, $temperature);
        $this->name = $name;
        $this->alcoholpercentage = $alcoholpercentage;
    }

    function beerInfo()
    {
        return "Hi i'm {$this->name} and have an alcohol percentage of {$this->alcoholpercentage} and I have a {$this->color} color";
    }

    function setName(string $name)
    {
        $this->name = $name;
    }
    function getName()
    {
        return $this->name;
    }
    function setAlcoholpercentage(float $alcoholpercentage)
    {
        $this->alcoholpercentage = $alcoholpercentage;
    }
    function getAlcoholpercentage()
    {
        return $this->alcoholpercentage;
    }
}