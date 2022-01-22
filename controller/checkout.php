<?php
session_start();
if(isset($_SESSION['num']))
{
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		
		$i=0;
		$z=$_SESSION['num'];

		for($i=0;$i<$z;$i++)
		{$value=trim($_POST[$i]);
			echo $value;


	    }
}
}



?>