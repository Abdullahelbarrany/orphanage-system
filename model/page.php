<?php

class page
{ 	public $id;
	public $friendlyname;
	public $linkadress;
	public $html;
	public $lang;
	function __construct($id)
	{if(!$id=="")
		{
			$con = mysqli_connect("localhost", "root", "","orphnew");
	if (!$con)
  	{
 	 die('Could not connect: ' . mysqli_error());
 	 }
 	 else
 	 {$sql="select *from pages  where id='$id'";
 	 $dataset = mysqli_query($con,$sql) or die(mysqli_error);
 	 if($row = mysqli_fetch_array($dataset))
 	 {
 	 	$this->id=$row["id"];
 	 	$this->friendlyname=$row["friendlyname"];
 	 	$this->linkadress=$row["linkadress"];
 	 	$this->html=$row["html"];
 	 	$this->lang=$row["langid"];
 	 

 	 	
 	 }
 	}

	}
}
	function echohtml($x)
	{
			
			echo  $x->html ;
	}

	function returnlang()
	{
		return $this->lang;
	}
	
}

?>



