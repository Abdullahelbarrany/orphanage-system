<?php
class donoptions
{ 
	function returnoptions()

	{
		$con = mysqli_connect("localhost", "root", "","orphnew");
	if (!$con)
  	{
 	 die('Could not connect: ' . mysqli_error());
 	 }
 	 $sql="SELECT * FROM category ";
 	   if ($result = mysqli_query($con, $sql)) {
     
            return $result;
        }
    }
    
}
?>