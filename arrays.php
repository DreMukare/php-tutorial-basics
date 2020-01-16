<?php
  # Arrays are variables that hold multiple values
  /* 
    - Indexed
    - Associative
    - Multi-dimensional 
  */

  // Indexed
  $people = array('Kidathi', 'Koky', 'Nelvis');
  # echo $people[1];

  $ids = array(23, 55, 21);

  $games = ['lol', 'cod', 'dota'];
  $games[3] = 'Hellblade';
  $games[] = 'Angry zombie'; # added to last spot in array 

  // echo count($games); #to see how many items are in an array 
  // print_r($games); #echo for arrays, will print out the whole array
  // var_dump($games); # will show you all the values in an array and their data type

  # Associative arrays
  // allows you to define the key and the value
  // $people = array('Brad' => 35, 'Jose' => 32, 'William' => 37); 
  // echo $people['Brad']; #key is brad and value is 35. Value is what is printed out
  // $ids = [22 => 'Brad', 44 => 'Jose', 63 => 'Squilliam'];
  // echo ' ';
  // echo $ids[44];

  #adding to an associative array 
  // $people['Jill'] = 42;

  // print_r($people);
  // var_dump($ids);

  # Multi dimensional arrays 
  // An array within an array 
  $cars = array(
    array('Honda', 20, 10),
    array('Toyota', 30, 20),
    array('Ford', 20, 10)
  );
  // print_r ($cars);
  //echo $cars[1][2]
?>