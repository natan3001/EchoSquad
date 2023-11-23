<?php

require_once 'POO - Exercises/Exercise9/Seller.php';
require_once 'POO - Exercises/Exercise9/Manager.php';

try {
  $seller = new Seller("José cunha", "1.234.567", 2000);
  $manager = new Manager("Adriana Holtz", "7.654.321", 3000);

  $seller->addNewSale(500);
  $seller->addNewSale(297.90);
  $seller->addNewSale(1000);
  echo "Seller salary: ".number_format($seller->receiveSalary(), 2, ',', '.')."\n";

  $manager->addExtraHours(8);
  $manager->addExtraHours(22);
  $manager->addExtraHours(5);
  echo "Manager salary: ".number_format($manager->receiveSalary(), 2, ',', '.')."\n";
} catch (Exception $exception) {
  echo $exception->getMessage() ."\n";
}