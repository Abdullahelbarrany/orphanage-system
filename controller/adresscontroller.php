<?php
include_once'../model/adress.php';

$x=new adress();
$result=$x->returnoptions();
  while($row = mysqli_fetch_array($result))
       {
        echo"<option value='".$row['id']."'>".$row['name']."</option>";
} 
