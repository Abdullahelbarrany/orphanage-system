<?php
	 interface AvailabilityCommand
{
	public function Excute();
}

class AvailabilityControl
{
	public function AvailableNow($r,$id)
	{
			if($r==1)
		{$con = mysqli_connect("localhost", "root", "","orphnew");
 			 if (!$con)
  		  {
  		 die('Could not connect: ' . mysqli_error());
  		}
  		else
  		{
  			 $sql = "UPDATE status SET currentstatus='1' WHERE id='$id'";
         

      $result = mysqli_query($con,$sql);
      if(!$result)
      {
        echo "error";
      }

  		}
  	}

		echo "<script>alert('Available Now');</script>";
	}
	public function NotAvailableNow($r,$id)
	{if($r==1)
		{$con = mysqli_connect("localhost", "root", "","orphnew");
 			 if (!$con)
  		  {
  		 die('Could not connect: ' . mysqli_error());
  		}
  		else
  		{
  			 $sql = "UPDATE status SET currentstatus='0' WHERE id='$id'";
         

      $result = mysqli_query($con,$sql);
      if(!$result)
      {
        echo "error";
      }

  		}
  	}
		echo "<script>alert('Not Available Now');</script>";
	}
}
class AvailableNow implements AvailabilityCommand 
{
	private $AvailabilityCommand;
	public $r;
	public $id;
	public function __construct($AvailabilityCommand,$r,$id)
	{
		$this->AvailabilityCommand = $AvailabilityCommand;
		$this->r=$r;
		$this->id=$id;

	}
	public function Excute()
	{	
		$this->AvailabilityCommand->AvailableNow($this->r,$this->id);
	}
}
class NotAvailableNow implements AvailabilityCommand 
{
	private $AvailabilityCommand;
	public $r;
	public $id;
	public function __construct($AvailabilityCommand,$r,$id)
	{
		$this->AvailabilityCommand = $AvailabilityCommand;

	}
	public function Excute()
	{
		$this->AvailabilityCommand->NotAvailableNow($this->r,$this->id);
	}
}




?>