<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If & If-Else Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/
$age = 17;

// if($age >= 18){
//   echo 'You are old enough to vote'; 
// }else{
//   echo 'Sorry you are not old enough to vote';
// }

$t = 15;

// if ($t < 12){
//   echo "Good Morning";
// } elseif($t < 17){
//   echo 'Good Afternoon';
// } else {
//   echo 'Good Evening';
// }

$posts = ['First Post'];

// if(!empty($posts)){
//   echo $posts[0];
// } else {
//   echo 'No Posts';
// }




/* -------- Ternary Operator -------- */
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/

// echo !empty($posts) ? $posts[0] : 'No Posts';

// $firstPost = !empty($posts) ? $posts[0] : 'No Posts';
// $firstPost = !empty($posts) ? $posts[0] : null;

$firstPost = $posts[0] ?? null;

// echo $firstPost;


/* -------- Switch Statements ------- */

$favcolor = 'yellow';

switch($favcolor){
  case 'red': 
    echo 'Your favorite color is red';
    break;
  case 'blue';
    echo 'You favorite color is blue';
    break;
  case 'green';
    echo 'You favorite color is green';
    break;
  default:
    echo 'Your favorite color is not red, green or blue';
}