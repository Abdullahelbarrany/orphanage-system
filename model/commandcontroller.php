<?php
$name = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $input_name = trim($_POST["name"]);
    if (empty($input_name)) {
        $username_err = "Please enter a username.";
    }  else {
        $name = $input_name;
    }
     if (empty($username_err)) {
     include_once '../model/loginCheck.php';
     $y = new LoginCheck;
      
     
     $r = $y->checkuser($name);
     if($r==1)
     {  include_once '../model/CommandPattern.php';
        $z= new AvailabilityControl();
        $l=$z-> checkavailablity($name);
        if($l==0)
        {
            echo "<h1> This User is not Available";
        }
    else
    {
        echo "<h1> This User is  Available";
    }


     }

}
}
else
{}
  
  
 