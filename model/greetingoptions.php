<?php
class options
{ 
	function returnoptions()

	{
		$con = mysqli_connect("localhost", "root", "","orphnew");
	if (!$con)
  	{
 	 die('Could not connect: ' . mysqli_error());
 	 }
 	 $sql="SELECT * FROM greeting ";
 	   if ($result = mysqli_query($con, $sql)) {
          ////  echo "yeslad";
       ////    echo $result;
            return $result;
        }
    }
    
}
?>