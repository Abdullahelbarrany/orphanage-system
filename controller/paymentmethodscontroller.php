<?php
include_once'../model/poptions.php';
$x=new poptions();
$result=$x->returnoptions();
  while($row = mysqli_fetch_array($result))
       { echo"<option value='".$row['id']."'>".$row['name']."</option>";
}



