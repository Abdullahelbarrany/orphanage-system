<?php
class poptions
{ public $option;
	public $type;
	public $id;
	function returnoptions()

	{
		$con = mysqli_connect("localhost", "root", "","orphnew");
	if (!$con)
  	{
 	 die('Could not connect: ' . mysqli_error());
 	 }
 	 $sql="SELECT * FROM paymentmethod ";
 	   if ($result = mysqli_query($con, $sql)) {
          ////  echo "yeslad";
       ////    echo $result;
            return $result;
        }
    }
    function returninput($id)
    {$con = mysqli_connect("localhost", "root", "","orphnew");
	if (!$con)
  	{
 	 die('Could not connect: ' . mysqli_error());
 	 }
 	 $sql="SELECT * FROM paymentmethodoptions  WHERE paymentid='$id' ";
 	   if ($result = mysqli_query($con, $sql)) {
          ////  echo "yeslad";
       ////    echo $result;
            return $result;
        }


    }
    function returnoption($id)
    {$con = mysqli_connect("localhost", "root", "","orphnew");
	if (!$con)
  	{
 	 die('Could not connect: ' . mysqli_error());
 	 }
 	 $sql="SELECT * FROM options WHERE id='$id' ";
 	  $dataset = mysqli_query($con,$sql) or die(mysqli_error);
 	  if($row = mysqli_fetch_array($dataset))
 	  {
         $this->option =$row["name"];
         $this->type=$row["type"];
         $this->id=$row["id"];
        }
       


    }
     function addvalue($pid,$valuess,$donid)
    {       
      $con = mysqli_connect("localhost", "root", "","orphnew");
  if (!$con)
    {
   die('Could not connect: ' . mysqli_error());
   }

      $sql = "INSERT INTO val (pid,value,donid) VALUES ('$pid','$valuess','$donid')";
         

      $result = mysqli_query($con,$sql);
      if(!$result)
      {
        echo "error";
      }

}
}
?>