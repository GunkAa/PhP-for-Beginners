<?php
/* -------- Output & Comments ------- */

/*
  A .php file running on a server, can output both HTML and PHP code. There are multiple functions that can be used to output data to the browser.
*/

// Echo - Output strings, numbers, html, etc
// echo 123, 'Hello', 10.5;

// print - Similar to echo, but a bit slower
// print 123;

// print_r - Gives a bit more info. Can be used to print arrays
// print_r([1,2,3]);

// var_dump - Even more info like data type and length
// var_dump('Hello');

// var_export - Similar to var_dump(). Outputs a string representation of a variable
// var_export('Hello');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1><?php echo 'Post One' ?></h1>
</body>
</html>