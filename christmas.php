<?php

include_once "observer.php";

class christmas implements observer

{ public $id;
	public $f_name;
	function update($y)
	
	{
		$con = mysqli_connect("localhost", "root", "","orphnew");
	if (!$con)
  	{
 	 die('Could not connect: ' . mysqli_error());
 	 }
 	$sql = "SELECT * from user";
	 $result = mysqli_query($con, $sql);
	if($result)
	{
		  $row = mysqli_num_rows($result);
	}
	
			$i=1;
			while ($i < $row)
			{
 	 $sql="select *from user where id=$i ";
 	 $dataset = mysqli_query($con,$sql) or die(mysqli_error);
 	 if($row = mysqli_fetch_array($dataset))
 	 {
 	 	$this->f_name=$row["f_name"];
 	 	$this->id=$row["id"];
 	 	
 	 }
 	 $myfile = fopen($this->id.".txt", "w") or die("Unable to open file!");
				$txt = "Dear  ".$this->f_name."  \n".$y->desc;
				fwrite($myfile, $txt);
				fclose($myfile);
				$i++;
			}
		
		
	}

}