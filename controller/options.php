<?php
include_once'../model/poptions.php';
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$value=trim($_POST["cars"]);
if(empty($value))
{

}
else
{
$x=new poptions();
$result=$x->returninput($value);
  $z=new poptions();
  $i=0;
echo "  <form action='../controller/checkout.php' method='post'> ";
  while($row = mysqli_fetch_array($result))
       { 
        $y=$row['optionsid'];
        $z->returnoption($y);

        echo"<input"." type='".$z->type."'"."id = '".$i."'".">".$z->option."</input>";
        echo "<br>";
        $i=$i+1;
}
echo " <input class='Submit' type='submit' value='proceed' >";
echo "</form>";
$_SESSION['num']=$i;

}
}

