<?php
include_once "../model/greetings.php";
//session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$value=trim($_POST["cars"]);
if(empty($value))
{

}
else

{$input=trim($_POST["pass"]);
if(!empty($input))
{$x=new greetings($value);
	
	$x->updateone($x,$input);
	header("Location:../view/sent.php");
}
else
{
	

	////include_once "../model/greetingsfactory.php";
	$x=new greetings($value);
	//echo"cccc";
	//$y = new greetingsfactory();
//	$z=$y->getgreetings($x);
	$x->updateall($x);
	header("Location:../view/sent.php");

}
}

}