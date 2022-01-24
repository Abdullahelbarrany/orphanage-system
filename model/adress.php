<?php
include_once "../model/userclass.php";

class adress extends user
{
	public $id;
	public $name;
	public $parentid;
	function adresss($id)
	{if(!$id=="")
		{
			$con = mysqli_connect("localhost", "root", "","orphnew");
	if (!$con)
  	{
 	 die('Could not connect: ' . mysqli_error());
 	 }
 	 else
 	 {$sql="select *from adress where id=$id";
 	 $dataset = mysqli_query($con,$sql) or die(mysqli_error);
 	 if($row = mysqli_fetch_array($dataset))
 	 {
 	 	$this->id=$row["id"];
 	 	$this->name=$row["name"];
 	 	$this->parentid=$row["parentid"];

 	 	
 	 }
 	}

	}
}
function returnoptions()

	{
		$con = mysqli_connect("localhost", "root", "","orphnew");
	if (!$con)
  	{
 	 die('Could not connect: ' . mysqli_error());
 	 }
 	 $sql="SELECT * FROM adress ";
 	   if ($result = mysqli_query($con, $sql)) {
     
            return $result;
        }
    }
	function findadress($id){
	
		$con = mysqli_connect("localhost", "root", "","orphnew");

    if (!$con)
      {
      die('Could not connect: ' . mysqli_error());
      }
      $sql = "DELETE FROM usertype WHERE id= $id";

      if($con->query($sql) === true)
      {
          echo'<script> alert ("usertype deleted ")</script>';
      }
      else
      {
      echo'<script> alert ("error")</script>';
      }
    
	}

}