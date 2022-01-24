<?php
interface state
{
	function updatestate($did,$id);
}
class changestate implements state
{ public $stateid;
	public $pid;
	function getstate($id)
	{
		$con = mysqli_connect("localhost", "root", "","orphnew");
	if (!$con)
  	{
 	 die('Could not connect: ' . mysqli_error());
 	 }
 	 $sql="SELECT * FROM donationdetails  WHERE id='$id' ";
 	  $dataset = mysqli_query($con,$sql) or die(mysqli_error);
 	  if($row = mysqli_fetch_array($dataset))
 	  {
          ////  echo "yeslad";
       ////    echo $result;
 	   	$this->stateid=$row['state_id'];
        }





	}
	function getparent($id)
	{$con = mysqli_connect("localhost", "root", "","orphnew");
	if (!$con)
  	{
 	 die('Could not connect: ' . mysqli_error());
 	 }
 	 $sql="SELECT * FROM state  WHERE id='$id' ";
 	   $dataset = mysqli_query($con,$sql) or die(mysqli_error);
 	  if($row = mysqli_fetch_array($dataset))
 	  {
          ////  echo "yeslad";
       ////    echo $result;
 	   	$this->pid=$row['parent_id'];

	}
}
	function updatestate($did,$id)
	{$con = mysqli_connect("localhost", "root", "","orphnew");
	if (!$con)
  	{
 	 die('Could not connect: ' . mysqli_error());
 	 }
	 $sql = "UPDATE donationdetails SET state_id='$id' WHERE id='$did'";
		      $res = $con->query($sql);

	}
	function reject($id)
	{$con = mysqli_connect("localhost", "root", "","orphnew");
	if (!$con)
  	{
 	 die('Could not connect: ' . mysqli_error());
 	 }
	 $sql = "UPDATE donationdetails SET state_id='5' WHERE id='$id'";
		      $res = $con->query($sql);
		      if($res)
		      {
		      	echo "done";
		      }

	}


}	


