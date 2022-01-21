<?php
include_once'../model/greetingoptions.php';
$x=new options();
$result=$x->returnoptions();
  while($row = mysqli_fetch_array($result))
       { echo"<option value='".$row['id']."'>".$row['name']."</option>";
}



