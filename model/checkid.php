<?php
 class checkid
{
    public function checkids($id)
    {
         $con = mysqli_connect("localhost", "root", "","orphnew");
    if (!$con)
      {
      die('Could not connect: ' . mysqli_error());
      }

        $query = "select * from user where id='$id'";



         $resultD = mysqli_query($con,$query);
         if ($resultD) {
            if($resultD && mysqli_num_rows($resultD) > 0)
                {


                   return 1;
                }
                else
                {
                header("Location:../view/createform.php");
             return 0;
                }



        }
    }
}
?>