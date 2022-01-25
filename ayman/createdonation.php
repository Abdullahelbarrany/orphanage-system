<?php
class DonationCreate
{
    function InsertDonation($userid,$recieverid,$manegerid)
    {
       
      $con = mysqli_connect("localhost", "root", "","orphnew");
  if (!$con)
    {
   die('Could not connect: ' . mysqli_error());
   }

      $sql = "INSERT INTO donation (secid,donorid,mangid) VALUES ('$userid','$recieverid','$manegerid')";
         

      $result = mysqli_query($con,$sql);
      if(!$result)
      {
        echo "error";
      }

  
  }
   function returnid()
  {$con = mysqli_connect("localhost", "root", "","orphnew");
  if (!$con)
    {
   die('Could not connect: ' . mysqli_error());
   }
    $sql="SELECT  MAX(id) FROM donation";
    
    $res = $con->query($sql);

      while($row = mysqli_fetch_array($res)){
    return $row['MAX(id)'];
  }
}
}



?>