<?php

require "POO - Exercises/Exercise5/Car.php";

try {
  $car = new Car("Toyota", "Corolla", 2023);

  $car->acelerate(20);
  $car->acelerate(10);
  echo "Current velocity: {$car->getCurrentVelocity()} km/h.\n";

  $car->stopCar();
  echo "Current velocity: {$car->getCurrentVelocity()} km/h. \n";

  $car->acelerate(-20);

} catch (Exception $exception) {
  echo $exception->getMessage();
}