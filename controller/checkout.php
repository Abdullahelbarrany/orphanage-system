<?php
session_start();
include_once '../model/createdondet.php';
$pid=$_SESSION['pid'];
$d=new Donationdetails();
$d2=$d->getlastdon();
include_once '../model/poptions.php';
$c= new poptions();
//echo $d2;
if(isset($_SESSION['num']))
{
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		
		$i=0;
		$z=$_SESSION['num'];

		for($i=0;$i<$z;$i++)
		{$value=trim($_POST[$i]);
			if(empty($value))
			{}
		else
			{//echo $pid.$value.$d2."<br>";
		$c->addvalue($pid,$value,$d2);

		}


	    }
}
header("Location:../view/thankyou.php");
}



?>