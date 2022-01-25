<?php
class proxycheck
 {public function check($id,$pageid)
 {
    $con = mysqli_connect("localhost", "root", "","orphnew");
    if (!$con)
    {
    die('Could not connect: ' . mysqli_error());
    }
         $sql2 ="SELECT * from usertypepages where pageid=$pageid";
         $result2 =  mysqli_query($con, $sql2);
         if($result2)
         {
            $row2 = mysqli_num_rows($result2);
         }
    
    $count =0;
    $i = 1;
    while ($i < $row2)
	{
        if($id == $row2["usertypeid"])
        {
            $count++;
        }
    }
    if($count > 0)
    {
        return 1;
        
    }
    else
    {
       return 0 ;
    }
 }
}