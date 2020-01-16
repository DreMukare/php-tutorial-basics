<?php

  $loggedIn = false;

  $arr = [1,2,3,4,5];

  // if($loggedIn){
  //   echo 'You are logged in';
  // }else{
  //   echo 'You are not logged in';
  // } 

  // echo ($loggedIn) ? 'You are logged in' : 'You are not logged in';

  // $isRegistered = ($loggedIn == true) ? true : false;

  # (condition) ? 'what happens if true' : 'what happens if false';

  /*
  $age = 20;
  $score = 15;

  echo 'Your score is: ' . ($score > 10 ? (age > 10 ? 'Average' : 'Exceptional') : ($age > 10 ? 'Horrible' : 'Average')); //if your score is greater than ten and the age is greater than ten then Your score is Average / if your score is greater than ten and your age is greater than ten then Your score is Horrible 
  */

?>

<div>
    <?php if($loggedIn) { ?>
      <h1>Welcome User!</h1>
    <?php }else { ?>
      <h1>Welcome guest!</h1>
    <?php } ?>
</div>

<div>
      <?php if($loggedIn): ?>
        <h1>Karibu mkubwa!</h1>
      <?php else: ?>
        <h1>Welcome guest!</h1>
      <?php endif; ?>
</div>

<div>
  <?php foreach($arr as $val): ?>
    <?php echo $val; ?> 
  <?php endforeach; ?>
</div>
<br>
<div>
    <?php for($i = 0; $i <= 10; $i++): ?>
      <li> <?php echo $i; ?> </li>
    <?php endfor; ?>
</div>