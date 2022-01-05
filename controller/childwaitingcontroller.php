<?php


$username_err =$secid_err=$child_err=$dob_err="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $name = trim($_POST["name"]);
    if (empty($name)) {
        $username_err = "Please enter your firstname.";
    }


  
$dob = trim($_POST["dob"]);
    if (empty($dob)) {
        $dob_err = "Please enter your lastnamename.";
    }
$childdetails= trim($_POST["child"]);
    if (empty($childdetails)) {
        $child_err = "Please enter your salary";
    }
$dis= trim($_POST["dis"]);
    if (empty($dis)) {
        $dis_err = "Please enter your email";
    }
$secid= trim($_POST["secid"]);
    if (empty($secid)) {
        $secid_err = "Please enter your secid";
    }
    include_once "../model/checksecid.php";
    $y = new secidCheck;
    $result = $y->Checksecid($secid);
    if($result==1)
    {

    }
    else
    {
    	$secid_err = "Please enter valid secid";

    }

   
   
  
     if (empty($username_err) && empty($dob_err) && empty($child_err) && empty($dis_err) && empty($secid_err)
      && empty($lastnname_err)) {
      	
    	include_once "../model/createform.php";
    $z = new ChildCreate;
    $z->Insertchild($name,$dob,$childdetails,$dis,$secid);
       

       }
       else
       {echo "something went wrong";
            header("Location: ../view/viewform.php");


       }
    }


?>