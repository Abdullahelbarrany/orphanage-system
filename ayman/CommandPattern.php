<?php
	 interface AvailabilityCommand
{
	public function Excute($id);
}

class AvailabilityControl 
{public $status;
	function checkavailablity($id)
	{
		
		$con = mysqli_connect("localhost", "root", "","orphnew");
 			 if (!$con)
  		  {
  		 die('Could not connect: ' . mysqli_error());
  		}
  		else
  		{
  			 $sql = "SELECT * FROM status WHERE  userid='$id'";
  			$dataset = mysqli_query($con,$sql) or die ;
 	  if($row = mysqli_fetch_array($dataset))
 	  {
          ////  echo "yeslad";
       ////    echo $result;
 	   	$this->status=$row['currentstatus'];
 	   	//echo "in";
 	   	  return $this->status;
        }
        else
        {//echo "in";
        	$sql2 = "INSERT INTO status  (userid,currentstatus) VALUES ('$id','1')";
        $res=mysqli_query($con,$sql2);
          echo "<script>alert(' Available Now');</script>";
          return 1;

        }

  		}



	}
	public function AvailableNow($id)
	{
			
		$con = mysqli_connect("localhost", "root", "","orphnew");
 			 if (!$con)
  		  {
  		 die('Could not connect: ' . mysqli_error());
  		}
  		else
  		{
  			 $sql = "UPDATE status SET currentstatus='1' WHERE userid='$id'";
         

      $result = mysqli_query($con,$sql);
      if(!$result)
      {
       
      echo "<script>alert('ERROR');</script>";
      }
      
      else
      {
      	//echo "in";

		echo "<script>alert('Available Now');</script>";
      }

  		}
  	}
  	

	
	public function NotAvailableNow($id)
	{
		$con = mysqli_connect("localhost", "root", "","orphnew");
 			 if (!$con)
  		  {
  		 die('Could not connect: ' . mysqli_error());
  		}
  		else
  		{
  			 $sql = "UPDATE status SET currentstatus='0' WHERE userid='$id'";
         

      $result = mysqli_query($con,$sql);
      if(!$result)
      {
      echo "<script>alert('ERROR');</script>";
      }
      
      else
      {
      	echo "<script>alert('Not Available Now');</script>";
	}
	}
}
      
  		}

class AvailableNow implements AvailabilityCommand 
{

	private $AvailabilityCommand;
	
	public function __construct($AvailabilityCommand,$id)
	{
		$this->AvailabilityCommand = $AvailabilityCommand;
	

	}
	public function Excute($id)
	{
		$this->AvailabilityCommand->AvailableNow($id);
	}
}
class NotAvailableNow implements AvailabilityCommand 
{
	private $AvailabilityCommand;
	
	public function __construct($AvailabilityCommand,$id)
	{
		$this->AvailabilityCommand = $AvailabilityCommand;
	

	}
	public function Excute($id)
	{
		$this->AvailabilityCommand->NotAvailableNow($id);
	}
}



  	
		






?>