<?php
include_once'../model/usertypes.php';
include_once'../model/donoptions.php';
$x=new usertypesopt();
$result=$x->returnoptions();
$z;
  while($row = mysqli_fetch_array($result))
       {

        echo "<option value='".$row['id']."'>".$row['type']."</option>";
}


