<?php


$firstname = $password = "";
$username_err = $password_err=$lastnname_err=$salary_err=$email_err=$phone_err="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $name = trim($_POST["name"]);
    if (empty($name)) {
        $username_err = "Please enter your firstname.";
    }


  
$lastname = trim($_POST["lname"]);
    if (empty($lastname)) {
        $lastnname_err = "Please enter your lastnamename.";
    }
$salary= trim($_POST["salary"]);
    if (empty($salary)) {
        $salary_err = "Please enter your salary";
    }
$email= trim($_POST["email"]);
    if (empty($email)) {
        $email_err = "Please enter your email";
    }
$phonenumber= trim($_POST["phonenumber"]);
    if (empty($phonenumber)) {
        $phone_err = "Please enter your phonenumber";
    }

   
    $input_password = trim($_POST["password"]);
    
    if (empty($input_password)) {
        $password_err = "Please enter a password";
    } else{
        $password = $input_password;
    }
    
    $id = trim($_POST["id"]);
        $usertypid = trim($_POST["usertype"]);
  
     if (empty($username_err) && empty($password_err) && empty($salary_err) && empty($email_err) && empty($phone_err)
      && empty($lastnname_err)) {
                   

        include_once '../model/updateClass.php';
        $updator = new updateClass();
        $updator->UpdateUser($id,$password,$name,$lastname,$phonenumber,$email,$usertypid,$salary);
        
            
        
        // Close statement
       

       }
      
    }
    
 else {

    // Check existence of id parameter before processing further
    if (isset($_GET["id"]) && !empty(trim($_GET["id"]))) {
        // Get URL parameter
        $id = trim($_GET["id"]);
        include_once '../model/ReadClassUser.php';
        $reader = new ReadClassUser();
        if ($row = $reader->readOneRecord($id)) {
            $fname = $row["f_name"];
            $lname = $row["l_name"];
            $password=$row["password"];
                        $email=$row["email"];
                        $phonenumber=$row["phonenumber"];
                        $usertype=$row["usertypeid"];

            $salary = $row["salary"];
        }
        else {
                    echo "Something went wrong. Please try again later.";

        }
    } else {
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>
