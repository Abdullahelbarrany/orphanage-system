<?php
include_once "../model/CommandPattern.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$value=trim($_POST["cars2"]);
if(empty($value))
{}
else
{if($value==1)
	{
		$y=new AvailabilityCommand();
		$x=new AvailableNow($y,1,1);
		$x->Excute();



	}
	else
	{		$y=new AvailabilityCommand();
		$x=new NotAvailableNow($y,1,1);
		$x->Excute();

	}


}
}



