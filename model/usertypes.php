<?php
class usertypesopt
{ 
	function returnoptions()

	{
		$con = mysqli_connect("localhost", "root", "","orphnew");
	if (!$con)
  	{
 	 die('Could not connect: ' . mysqli_error());
 	 }
 	 $sql="SELECT * FROM usertype ";
 	   if ($result = mysqli_query($con, $sql)) {
     
            return $result;
        }
    }
    
}
?>