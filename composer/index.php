<?php

require_once 'vendor/autoload.php';

$faker = Faker\Factory::create();

// generate data by accessing properties
echo $faker->name;

use Carbon\Carbon;

printf("Now: %s", Carbon::now());