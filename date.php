<?php
  //echo date('d'); //Gives us number of day
  //echo date('m'); //Gives us number of month
  //echo date('y'); //Gives us the year
  //echo date('l'); //Gives us the day of the week
  //echo date ('Y/m/d'); //format of year/month/day (d-m-Y) would also work 
  //echo date('i'); //Gives us the minute
  //echo date('s'); //Gives the second
  //echo date('a'); //Gives us AM or PM
  //echo date('h'); //Gives us the hour
  //echo date ('h:i:sa'); //Gives us hour, minute, second AM or PM

  # Set time zone
  //date_default_timezone_set('Kenya/Nairobi');

  # How to make a timestamp

  //$timestamp = mktime(10, 14, 54, 9, 10, 1981); //will give exact number of seconds that have passed since the unix epoch

  //echo $timestamp;

  //echo date('m/d/Y h:i:sa', $timestamp); //will make timestamp readable

  #String to time

  // $timestamp2 = strtotime('7:00pm March 22 2016');

  // echo $timestamp2; //use above code line to make readable again

  // $timestamp3 = strotime('tomorrow'); //will legit give us tomorrow
  // $timestamp4 = strotime('next Sunday'); //will legit give us time stamp for next Sunday
  // $timestamp5 = strotime('+2 Months'); //will legit give us time stamp for the next 2 months

  //for more go to php.net/manua'/en/function.date.php
?>