<?php
require_once 'Animal.php';
require_once 'Cat.php';

$cat = new Cat ('garfield');
echo $cat->getName (); //garfield
echo $cat->getName () === 'garfield'; // 1
echo $cat->meow (); //Cat garfield is saying meow
echo $cat->meow () === 'Cat garfield is saying meow'; // 1