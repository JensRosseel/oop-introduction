<?php

declare(strict_types=1);

require 'beverage.php';
require 'beer.php';

/* EXERCISE 1
Create a class beverage.
Create the properties color (string), price (float) and temperature (string) and also foresee a construct.
Have a default value "cold" in the construct for temperature.
Remember for now we will use properties and methods that can be accessed from everywhere.
Make a getInfo function which returns "This beverage is <temperature> and <color>."
Instantiate an object which represents cola. Make sure that the color is set to black, the price equals 2 euro and the temperature to cold automatically
 print the getInfo on the screen.
print the temperature on the screen.
USE TYPEHINTING EVERYWHERE!
*/

$cola = new Beverage('black', 2);

echo $cola->getInfo();

/* EXERCISE 2
Make class beer that extends from Beverage.
Create the properties name (string) and alcoholpercentage (float).
Foresee a construct that's allows us to use all the properties from beverage and that sets the values for name and alcoholpercentage.
Remember for now we will use properties and methods that can be accessed from everywhere.
Make a getAlcoholpercentage function which returns the alocoholpercentage.
Instantiate an object which represents Duvel. Make sure that the color is set to blond, the price equals 3.5 euro and the temperature to cold automatically.
Also the name equal to Duvel and the alcohol percentage to 8,5%
print the getAlcoholpercentage 2 times on the screen in two different ways, print the color on the screen and the getInfo.
Make sure that each print is on a different line.
Try to get this error on the screen= Fatal error: Uncaught Error: Call to undefined method Beverage::getAlcoholpercentage() in /var/www/becode/workshop/exercise2.php on line 64
USE TYPEHINTING EVERYWHERE!
*/

$duvel = new Beer('blond', 3.5, 'Duvel', 8.5);

echo "<br>{$duvel->getAlcoholpercentage()}";
echo "<br>{$duvel->getAlcoholpercentage()}";
echo "<br>{$duvel->getColor()}";
echo "<br>{$duvel->getInfo()}";

/* EXERCISE 3
Copy the code of exercise 2 to here and delete everything related to cola.
Make all properties private.
Make all the other prints work without error.
After fixing the errors. Change the color of Duvel to light instead of blond and
also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alochol percentage of 8.5 and I have a light color."
Make sure that you use the variables and not just this text line.
Print this method on the screen on a new line.
USE TYPEHINTING EVERYWHERE!
*/

$duvel = new Beer('blond', 3.5, 'Duvel', 8.5);

echo "<br>{$duvel->getAlcoholpercentage()}";
echo "<br>{$duvel->getColor()}";
$duvel->setColor('light');
echo "<br>{$duvel->getColor()}";
echo "<br>{$duvel->getInfo()}";
echo "<br>{$duvel->beerInfo()}";

/* EXERCISE 4
Copy the code of exercise 2 to here and delete everything related to cola.
Make all properties protected.
Make all the other prints work without error without changing the beverage class.
USE TYPEHINTING EVERYWHERE!
*/

$duvel = new Beer('blond', 3.5, 'Duvel', 8.5);

echo "<br>{$duvel->getAlcoholpercentage()}";
echo "<br>{$duvel->getAlcoholpercentage()}";
echo "<br>{$duvel->getColor()}";
echo "<br>{$duvel->getInfo()}";

/* EXERCISE 5
Copy the class of exercise 1.
change the properties to private.
fix the errors without using getter and setter functions.
change the price to 3.5 euro and print it also on the screen on a new line.
*/

$cola->setPrice(3.5);
echo "<br>{$cola->getPrice()}";