
<?php
class loadpage
{

function __construct($y)
{if($y=="")
{echo "error";}
else
{	
	$con = mysqli_connect("localhost", "root", "","orphnew");
		
	if (!$con)
  	{
 	 die('Could not connect: ' . mysqli_error());
 	 }
 	 else
 	 {$sql="select *from word  where id='$y'";
 	 $dataset = mysqli_query($con,$sql) or die(mysqli_error);
 	 if($row = mysqli_fetch_array($dataset))
 	 {
 	 	$this->word=$row["word"];
 	 	

 	 }
 	}
 	 	
}
 	 	
 }
 }	 



?>