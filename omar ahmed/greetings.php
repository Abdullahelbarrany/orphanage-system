<?php
class greetings
{ public $id;
	public $desc;
	public $name;
	function __construct($id)
	{

			$con = mysqli_connect("localhost", "root", "","orphnew");
	if (!$con)
  	{
 	 die('Could not connect: ' . mysqli_error());
 	 }
	$sql="select *from greeting where id='$id' ";
 	 $dataset = mysqli_query($con,$sql) or die(mysqli_error);
 	 if($row = mysqli_fetch_array($dataset))
 	 {
 	 	$this->id=$row["id"];
 	 	$this->desc=$row["description"];
 	 	$this->name=$row["name"];
 	 	return $this;

 	 	
 	 }



}
}