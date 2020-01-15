<?php
//single line comment
#single linie comment
/* 
  multiline comment 
*/

  #RULES FOR VARIABLES
  /*
    - Have to start with prefix $
    - Have to start with a letter or an underscore
    - Only letters, numbers and underscores
    - They are case sensitive 
  */
  $output = 'Hello World';
  $num1 = 5;
  $num2 = 10;
  $sum = $num1 + $num2;
  $float1 = 5.5;
  $bool1 = true;

  $string1 = 'Heisen';
  $string2 = 'burg';
  $name = $string1 . $string2;

  echo $name;

  define('GREETING', 'Hello Everyone'); #defining a constant 

  echo GREETING; #outputting a constant  
?>
