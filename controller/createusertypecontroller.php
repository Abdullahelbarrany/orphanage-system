<?php
$type= "";
$type_err="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $type = trim($_POST["type"]);
    if (empty($type)) {
        $type_err = "Please enter your type";
    }
  
     if (empty($type_err)) {
      	
    	include_once "../model/addusertype.php";
    $y = new AddUsertype;
    $y->InsertUser($type);
    
        
       }
       else
       {echo "something went wrong";

       }
    }



?>