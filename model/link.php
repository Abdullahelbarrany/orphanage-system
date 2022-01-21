<?php

class link
{ 	public $id;
	public $type;
	function __construct()
	{/*
		if(!$id=="")
		{
			$con = mysqli_connect("localhost", "root", "","orphnew");
	if (!$con)
  	{
 	 die('Could not connect: ' . mysqli_error());
 	 }
 	 else
 	 {$sql="select *from usertypepages  where usertypeid='$id'";
 	 $dataset = mysqli_query($con,$sql) or die(mysqli_error);
 	 if($dataset))
 	 {
 	 	return $dataset ; 
 	 	

 	 	
 	 }
 	}

	}
	*/
}
function returnalllinks($id)
{if(!$id=="")
		{
			$con = mysqli_connect("localhost", "root", "","orphnew");
	if (!$con)
  	{
 	 die('Could not connect: ' . mysqli_error());
 	 }
 	 else
 	 {$sql="SELECT * FROM usertypepages where usertypeid ='$id'";
 	   if ($result = mysqli_query($con, $sql)) {
          ////  echo "yeslad";
       ////    echo $result;
            return $result;
        }
 	}

	}

}
	function returnlink()
	{
		return $this->pageid;
	}
}

?>



