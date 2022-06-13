<?php
/* ----------- Arrrays ----------- */

/*
  Arrays hold multiple values. Each value in an array is called an "element"
*/

// Simple Array
$numbers = [1,44,55,22];
$fruits = array('apple', 'orange', 'pear');

// var_dump($numbers);
// echo $fruits[1];

// Associative Array
$colors = [
  1 => 'red',
  4 => 'blue',
  6 => 'green'
];

// echo $colors[4];

$hex = [
  'red' => '#f00',
  'blue' => '#0f0',
  'green' => '#00f'
];

// echo $hex['blue'];

$person = [
  'first_name' => 'Brad',
  'last_name' => 'Traversy',
  'email' => 'brad@test.com'
];

// echo $person['first_name'];

$people = [
  [
    'first_name' => 'Brad',
    'last_name' => 'Traversy',
    'email' => 'brad@test.com'
  ],
  [
    'first_name' => 'Leon',
    'last_name' => 'Uittenbogerd',
    'email' => 'leon@test.com'
  ],
  [
    'first_name' => 'John',
    'last_name' => 'Doe',
    'email' => 'john@test.com'
  ]
];

echo $people[1]['email'];