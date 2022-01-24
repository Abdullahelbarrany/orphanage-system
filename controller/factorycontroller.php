<?php
include_once '../model/usertypefactory.php';
$name=$_SESSION['userid'];
////echo "name";
 $w=new usertypefactory();
       $w3=$w->get($name);
       echo $w3;
/*$tot=0;
$i=0;
      $result= $w3->return();
 while($row = mysqli_fetch_array($result))
       {$tot+=$row['Qty'];
   $i++;
       }
    ///   echo "in";
       echo "<h1> Your reports </h1>";
       echo "<h2> The total donations from this week is ".$tot."</h2>";
       echo "<br><br>";
       $avg=$tot/$i;
       echo "<h2> the average donations from this past week is ".$avg."</h2>";
*/
?>