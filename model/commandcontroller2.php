<?php
session_start();
include_once "../model/CommandPattern.php";
//echo $_SESSION['userid'];
$x = new AvailabilityControl();
//echo "yes";
$y=$x->checkavailablity($_SESSION['userid']);
if($y==0)
{
	$z= new AvailableNow($x,$_SESSION['userid']);
	$z->Excute($_SESSION['userid']);

}
else
{
	$z= new NotAvailableNow($x,$_SESSION['userid']);
	$z->Excute($_SESSION['userid']);
}
echo "status changed succefully";

