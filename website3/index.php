<?php
  //message vars
  $msg = '';
  $msgClass = '';
  // Check for submit
  if(filter_has_var(INPUT_POST, 'submit')){
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Check required fields
    if(!empty($email) && !empty($name) && !empty($message)){
      // Passed
      echo 'Passed';
    }else{
      // Failed
      $msg = 'Please fill in all fields';
      $msgClass = 'alert-danger';
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Contact Us</title>
  <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
  <nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <a href="index.php" class="navbar-brand">My Website</a>
      </div>
    </div>
  </nav>
  <div class="container">
    <?php if($msg != ''): ?>
      <div class="alert <?php echo $msgClass; ?>"><?php echo $msg ?></div>
    <?php endif; ?>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" value="" placeholder="Enter name">
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control" value="" placeholder="Enter email">
      </div>
      <div class="form-group">
        <label>Message</label>
        <textarea name="message" class="form-control" placeholder="Enter message"></textarea>
      </div>
      <br>
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</body>
</html>