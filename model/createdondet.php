<?php
class Donationdetails
{ public $idd;
    function InsertDonation($qty,$cat,$id,$sid)
    {
       
      $con = mysqli_connect("localhost", "root", "","orphnew");
  if (!$con)
    {
   die('Could not connect: ' . mysqli_error());
   }

      $sql = "INSERT INTO donationdetails (catid,Qty,donid,state_id) VALUES ('$cat','$qty','$id','$sid')";
         

      $result = mysqli_query($con,$sql);
      if(!$result)
      {
        echo "error";
      }

  
  }
  function getlastdon()
  {
    $con = mysqli_connect("localhost", "root", "","orphnew");
  if (!$con)
    {
   die('Could not connect: ' . mysqli_error());
   }
    $sql="SELECT  MAX(id) FROM donationdetails";
    
    $res = $con->query($sql);

      while($row = mysqli_fetch_array($res)){
        $this->idd=$row['MAX(id)'];
    return $row['MAX(id)'];
  }
}
  function updatepayment($price,$id)
  {
    $con = mysqli_connect("localhost", "root", "","orphnew");
  if (!$con)
    {
   die('Could not connect: ' . mysqli_error());
   }
    
      $sql = "INSERT INTO donationdetails (catid,Qty,donid,state_id) VALUES ('4','$price','$id','1')";
    $res = $con->query($sql);
    if($res)
    {
      //echo "done";
    }
 }
 function getamount($id)
 {
  $con = mysqli_connect("localhost", "root", "","orphnew");
  if (!$con)
    {
   die('Could not connect: ' . mysqli_error());
   }
    $sql="SELECT  Qty FROM donationdetails where id='$id'";
    
    $res = $con->query($sql);

      while($row = mysqli_fetch_array($res)){
    return $row['Qty'];
  }
  



 }
 function adddecorative($id,$price)
  { $con = mysqli_connect("localhost", "root", "","orphnew");
  if (!$con)
    {
   die('Could not connect: ' . mysqli_error());
   }
    
      $sql = "UPDATE donationdetails SET Qty='$price' WHERE id='$id'";
          $res = $con->query($sql);

  }
}
