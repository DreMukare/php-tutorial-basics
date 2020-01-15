<?php
  # substr()
  # Returns a portion of a string

  // $output = substr('Hello', 1,4);
  // $output = substr('Hello', -4);

  //$output = strlen('Hello World); //will count all the characters including the spaces

  # strpos()
  # Finds the position of the first occurence of a substring

  // $output = strpos('Hello World', 'o'); //will return 7 

  # trim()
  # Strips whitespace

  // $text = 'Hello World               ';
  // var_dump($text);

  // $trimmed = trim($text);
  // var_dump($trimmed);
  //useful for formatting form input 

  # strtoupper()
  # Will make everything uppercase

  # strtolower()
  # Will make everything lowercase

  # ucwords()
  # Will capitalize first letter of every word

  # str_replace()
  # Replace all occurences of a search string with a replacement

  // $text = 'Hello World';
  // $output = str_replace('World', 'Everyone', $text);
  // echo $output;

  # is_string()
  # Checks if a variable is a string. Returns 1 if it's a string

  // foreach($values as $value){
  //   if(is_string($value)){
  //     echo "$value is a string<br>";
  //   }
  // }

  # gzcompress()
  # Will compress a string

  # gzuncompress()
  # Will uncompress a string
?> 