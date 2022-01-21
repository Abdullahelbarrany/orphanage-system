<?php
include_once "observer.php";
session_start();
class greetings extends observer
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
 	 function updateall($y)
	
	{//echo "in";
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
		  $i=1;
		   $rec=$_SESSION['userid'];
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
				//echo $i;
				fwrite($myfile, $txt);

				fclose($myfile);
 $ss = "INSERT INTO sentgreetings  (senderid,recieverid,textmassage,greetingid) VALUES ('$i','$rec','$txt','$y->id')";
       $ress = mysqli_query($con,$ss);
      
				$i++;
			}
	}
	
		else {
				echo "error";
			}	
		
		
	}
	function updateone($y,$x)
	{$query = "select * from user where id='$x' ";
     $con = mysqli_connect("localhost", "root", "","orphnew");
      $result = mysqli_query($con,$query);

        if($row = mysqli_fetch_array($result))
 	 {        $name=$row['f_name'];
        $id=$row['id'];
        $rec=$_SESSION['userid'];
         $myfile = fopen($name.".txt", "w") or die("Unable to open file!");
				$txt = "Dear  ".$name."  \n".$y->desc;
				//echo $i;
				fwrite($myfile, $txt);
				fclose($myfile);

      $sql = "INSERT INTO sentgreetings  (senderid,recieverid,textmassage,greetingid) VALUES
       ('$rec','$id','$txt','$y->id')";
       $result = mysqli_query($con,$sql);



    }



	}





}