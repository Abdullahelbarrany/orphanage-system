<?php
include_once "userclass.php";
include_once "adress.php";

class staff extends user 
{function __construct($id)
	{
		if(!$id=="")
		{
			$con = mysqli_connect("localhost", "root", "","orphnew");
	if (!$con)
  	{
 	 die('Could not connect: ' . mysqli_error());
 	 }
 	 $sql="select *from user where id=$id ";
 	 $dataset = mysqli_query($con,$sql) or die(mysqli_error);
 	 if($row = mysqli_fetch_array($dataset))
 	 {
 	 	$this->f_name=$row["f_name"];
 	 	$this->id=$id;
 	 	$this->email=$row["Email"];
 	 	$this->password=$row["password"];
		$this->l_name=$row["l_name"];
		$this->age=$row["age"];
		$this->isdeleted=["isdeleted"];
		$this->createdat=["createdat"];
		$this->updatedat=["updaedat"];
		$this->phonenumber=["phonenmber"];
		$this->adress= new adress($row["adressid"]);
		$this->usertypeid= new usertype($row["usertypeid"]);
 	 }


		}
		else
		{
			echo "wrong input";
		}
	}
	function hashpassword($password,$id)
	{ $hashed_password = password_hash($password, PASSWORD_DEFAULT);
		$con = mysqli_connect("localhost", "root", "","orphnew");
  if (!$con)
    {
   die('Could not connect: ' . mysqli_error());
   }
    
      $sql = "UPDATE user SET password='$hashed_password' WHERE id='$id'";
    $res = $con->query($sql);
    if($res)
    {
    /*	echo "yes man";
    */
    }




	}
	

		


}
class hashpassword
{function hashpasswords($password)
	{ $hashed_password = password_hash($password, PASSWORD_DEFAULT);
		return $hashed_password;




	}

}











?>