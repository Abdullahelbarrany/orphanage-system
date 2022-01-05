
<?php
$firstname = $password = "";
$username_err = $itemid_err=$manid_err=$recid_err=$qty_err="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $qty = trim($_POST["name"]);
    if (empty($qty)) {
        $username_err = "enter valid quantity";
    }
    else
    { }

  $cat= trim($_POST["cars"]);
  if(empty($cat))
  {
  	$manid_err="not empty";
  }

     if (empty($username_err) && empty($manid_err)) {
      	
    	include_once "../model/createdonation.php";
    	include_once "../model/createdondet.php";
    $y = new DonationCreate;
    $z=$y->returnid();

    $x = new Donationdetails();
    $x->InsertDonation($qty,$cat,$z);
    header("../view/invoice.php");

     }
       else
       {echo "something went wrong";

       }

 }


	

    


?>











