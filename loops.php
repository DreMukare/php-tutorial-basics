<?php
  #LOOPS - execute code a set number of times

  /*
    For
    While
    Do..While
    Foreach 
  */

  //For Loop
  // Params - init, condition, increment

  // for($i = 0;$i <= 10;$i++){
  //   echo $i .' ' . 'Mississipi';
  //   echo '<br>';
  //   echo '<br>';
  // }

  # While Loop
  # params - condition

  // $i = 0;

  // while($i <= 10){
  //   echo $i . ' ' . 'Mississipi';
  //   echo '<br>';
  //   echo '<br>';
  //   $i++;
  // }

  # Do..While 
  # params - condition

  // $i = 0;

  // do{
  //   echo $i . ' ' . 'Mississipi';
  //   echo '<br>';
  //   echo '<br>';
  //   $i++;
  // }
  // while($i <= 10);

  # foreach - meant to work with arrays

  // $games = array('Red Dead Redemption', 'Ghost of Tsushima', 'Cyberpunk');

  // foreach($games as $title){
  //   echo $title . ' ' . 'imma play you';
  //   echo '<br>';
  //   echo '<br>';
  // }

  $people = array ('drew' => 'drew@gmail.com', 'nelvis' => 'nelvis@gmail.com', 'dollars' => 'dollars@gmail.com');

  foreach($people as $person => $email){
    echo $person . ' : ' . $email;
    echo '<br>';
    echo '<br>';
  }
?>