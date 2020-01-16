<?php
  # Check for posted data
  /*
  if(filter_has_var(INPUT_POST, 'data')){
    echo 'Data Found';
  } else {
    echo 'No Data';
  }
  */

  /*
  // Function to validate email field in a form
  if(filter_has_var(INPUT_POST, 'data')){
    $email = $_POST['data'];

    // Remove illegal characters

    $email = filter_var($email, FILTER_SANITIZE_EMAIL); //email value gotten from $_POST[data] gets sanitized
    echo $email.'<br>';
    
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){ //value entered as email is then validated
      echo 'Email is valid';
    } else {
      echo 'Email is NOT valid';
    }
  }
  */

    // other validations we can do!
      #FILTER_VALIDATE_BOOLEAN
      #FILTER_VALIDATE_EMAIL
      #FILTER_VALIDATE_FLOAT
      #FILTER_VALIDATE_INT
      #FILTER_VALIDATE_IP
      #FILTER_VALIDATE_REGEXP
      #FILTER_VALIDATE_URL

    //other sanitizations we can do!
      #FILTER_SANITIZE_EMAIL
      #FILTER_SANITIZE_ENCODED
      #FILTER_SANITIZE_NUMBER_FLOAT
      #FILTER_SANITIZE_NUMBER_INT
      #FILTER_SANITIZE_SPECIAL_CHARS
      #FILTER_SANITIZE_STRING
      #FILTER_SANITIZE_URL

    // integer validation
    $var = 23;
    
    /*
    if(filter_var($var, FILTER_VALIDATE_INT)){ //can also be used for other validations
      echo $var . ' is a number';
    } else {
      echo $var . ' is NOT a number';
    }
    */

    //sanitizing an integer
    /*
    $number = '33kskdisi2ib43ib3ib5ubu3ib';
    var_dump(filter_var($number, FILTER_SANITIZE_NUMBER_INT));
    */

    // filter input array
    /*
    $filters = array(
      "data" => FILTER_VALIDATE_EMAIL,
      "data2" => array(
        "filter" => FILTER_VALIDATE_INT,
        "options" => array(
          "min_range" => 1,
          "max_range" => 100
        )
      )
    );//running multiple filters on multiple fields

    print_r(filter_input_array(INPUT_POST, $filters));
    */

    //filter var array
    /*
    $arr = array(
      "name" => "andrew mukare",
      "age" => 23,
      "email" => "andrew@gmail.com"
    );

    $filters = array(
      "name" => array(
        "filter" => FILTER_CALLBACK,
        "options" => "ucwords" //applying the ucword callback
      ),
      "age" => array(
        "filter" => FILTER_VALIDATE_INT,
        "options" => array(
          "min_range" => 1,
          "max_range" =>120
        )
      ),
      "email" => "filter" => FILTER_VALIDATE_EMAIL,
    );

    print_r(filter_var_array($arr, $filters));
    */
?>

<html>
  <head>
    <title>Simple Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  </head>
  <body>  
    <div class="container">
      <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <div class="form-group">
          <input type="text" name="data" class="form-control" placeholder="Enter email">
        </div>  
        <div class="form-group">
          <input type="text" name="data2" class="form-control" placeholder="Enter password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </body>
</html>