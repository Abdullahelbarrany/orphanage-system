
<?php
class loadpage
{
public $word;
function __construct($y,$x)
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
 	 {$sql="select * from word  where pageid='$x' AND lang_id='$y'  ";
 	 $dataset = mysqli_query($con,$sql) or die(mysqli_error);
 	 if($row = mysqli_fetch_array($dataset))
 	 {
 	 	$this->word=$row['word'];
 	 //	echo $this->word;

 	 }
 	 else

 	 {
 	 	echo "errrrrrrrrror";
 	 }
 	}
 	 	
}
 	 	
 }
 }	 



?>