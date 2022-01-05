<?php
$firstname = $password = "";
$username_err = $itemid_err=$manid_err=$recid_err=$qty_err="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $name = trim($_POST["name"]);
    if (empty($name)) {
        $username_err = "Please enter your id";
    }
    else
    {include_once "../model/checkid.php";
    $x = new checkid;
    
    $r =  $x->checkids($name);
     if(!$r=0)
     {

     }
     else
     {$username_err = "Please enter secretary id";

     }
 }

  
$recid = trim($_POST["recid"]);
    if (empty($recid)) {
        $recid_err = "Please enter donor id.";
    }
    else
     {$r =  $x->checkids($recid);
     if(!$r=0)
     {

     }
     else
     {$lastname_err = "Please enter your id";

     }
 }
$manid= trim($_POST["manid"]);
    if (empty($manid)) {
        $manid_err = "Please enter manegerid";
    }
    else
    {$r =  $x->checkids($manid);
     if(!$r=0)
     {

     }
     else
     {$manid_err = "Please enter your id";

     }
}

     if (empty($username_err) && empty($recid_err) && empty($manid_err)) {
      	
    	include_once "../model/createdonation.php";
    $y = new DonationCreate;
    $z=$y->InsertDonation($name,$recid,$manid);
    header("Location:../view/Donationview2.php");
     }
       else
       {echo "something went wrong";

       }

    }


?>