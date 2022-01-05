<?php 
include_once("../model/functions.php");
include_once("../model/createdonation.php");

include_once("../model/createdondet.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$from_currency = trim($_POST['from_currency']);
	$to_currency = "EGP";
	$amount = trim($_POST['amount']);	
	if($from_currency == $to_currency) {
	 	$data = array('error' => '1');
		echo json_encode( $data );	
		exit;
	}
	echo "jsd";
	$converted_currency=currencyConverter($from_currency, $to_currency, $amount);
	$z=returnthis($from_currency, $to_currency, $amount);
	echo $converted_currency;
	
	$x=new Donationdetails();
	$d=new DonationCreate();
	$y=$d->returnid();
	$x->updatepayment($z,$y);

}
?>