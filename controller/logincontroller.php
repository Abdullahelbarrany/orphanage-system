<?php

$name = $password = "";
$username_err = $password_err= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $input_name = trim($_POST["username"]);
    if (empty($input_name)) {
        $username_err = "Please enter a username.";
    }  else {
        $name = $input_name;
    }

   
    $input_password = trim($_POST["password"]);
    if (empty($input_password)) {
        $password_err = "Please enter a password";
    } else {
        $password = $input_password;
    }
     if (empty($username_err) && empty($password_err)) {
     include_once '../model/loginCheck.php';
     $y = new LoginCheck;
      include_once '../model/usertypeclass.php';
     
     $r = $y->ChecKL($name,$password);
     if($r==0)
     {}
 else
 {
       include_once '../model/link.php';
       $z = new link($r);
       $l=$z->returnlink();
      include_once '../model/page.php';
      $newlink = new page($l);
       
        
     }
    }
    else
    {
                 $x=new page(3);

    }
}
      ?>