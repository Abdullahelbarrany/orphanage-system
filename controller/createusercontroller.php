<?php
$firstname = $password = "";
$username_err = $password_err=$lastnname_err=$salary_err=$email_err=$phone_err="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $name = trim($_POST["firstname"]);
    if (empty($name)) {
        $username_err = "Please enter your firstname.";
    }


  
$lastname = trim($_POST["lastname"]);
    if (empty($lastname)) {
        $lastnname_err = "Please enter your lastnamename.";
    }
$salary= trim($_POST["salary"]);
    if (empty($salary)) {
        $salary_err = "Please enter your salary";
    }
$email= trim($_POST["Email"]);
    if (empty($salary)) {
        $email_err = "Please enter your email";
    }
$phonenumber= trim($_POST["Phonenumber"]);
    if (empty($phonenumber)) {
        $phone_err = "Please enter your email";
    }

   
    $input_password = trim($_POST["Password"]);
    $confirmpassword = trim($_POST["ConfirmPassword"]);
    if (empty($input_password)) {
        $password_err = "Please enter a password";
    } elseif ($input_password==$confirmpassword) {
    	$password = $input_password;
    }
    else
    {echo "please enter matching passwords";

    } 
        $usertypid = trim($_POST["cars"]);
  
     if (empty($username_err) && empty($password_err) && empty($salary_err) && empty($email_err) && empty($phone_err)
      && empty($lastnname_err)) {
      	
    	include_once "../model/adduser.php";
    $y = new AddUser;
    $y->InsertUser($password,$name,$lastname,$phonenumber,$email,$usertypid,$salary);
    

       }
       else
       {echo "something went wrong";

       }
    }



?>