<?php
class gettranslationdetails
 {  

	function __construct($id)
	{
		if(!$id=="")
		
		{	$con = mysqli_connect("localhost", "root", "","orphnew");
	if (!$con)
  	{
 	 die('Could not connect: ' . mysqli_error());
 	 }
 	 else
 	 {
 	 $sql="select *from translationdetails  where id='$id'";
 	 $dataset = mysqli_query($con,$sql) or die(mysqli_error);
 	 if($row = mysqli_fetch_array($dataset))
 	 $this->firstid=$row["1stwordid"];
 	$this->secoundid=$row["2ndwordid"];
 	}
 }
 }
}
class changelanguage
{
	function __construct($id,$pageid)
	{$con = mysqli_connect("localhost", "root", "","orphnew");
	if (!$con)
  	{
 	 die('Could not connect: ' . mysqli_error());
 	 }
 	 else
 	 {


		      $sql = "UPDATE pages SET langid='$id' WHERE id='$pageid'";
		      $res = $con->query($sql);

	}
	}
}
