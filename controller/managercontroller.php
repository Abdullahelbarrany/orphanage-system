<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$value=trim($_POST["cars"]);
if(empty($value))
{}
else
{
	include_once "../model/greetings.php";
	include_once "../model/harvest.php";
	include_once "../model/christmas.php";
	include_once "../model/ramadan.php";
	include_once "../model/greetingsfactory.php";
	$x=new greetings($value);
	$y = new greetingsfactory();
	$z=$y->getgreetings($x);
	$z->update($x);
	header("Location:../view/sent.php");

}


}