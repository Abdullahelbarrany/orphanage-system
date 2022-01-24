<?php
include_once'../model/donoptions.php';
$x=new donoptions();
$result=$x->returnoptions();
  while($row = mysqli_fetch_array($result))
       { echo"<option value='".$row['id']."'>".$row['name']."</option>";
}
