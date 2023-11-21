<?php

require "POO - Exercises/Exercise4/Circle.php";
require "POO - Exercises/Exercise4/Rectangle.php";

$rectangle = new Rectangle(5, 2.5);
echo "The rectangle area is {$rectangle->calculateArea()}.\n";
echo "The rectangle perimeter is {$rectangle->calculatePerimeter()}.\n";

$circle = new Circle(3.25);
echo "The circle area is {$circle->calculateArea()}.\n";
echo "The circle perimeter is {$circle->calculatePerimeter()}.\n";