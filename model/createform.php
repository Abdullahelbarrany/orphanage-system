<?php
class ChildCreate
{
    function Insertchild($name,$date,$detail,$dis,$secid)
    {
       $con = mysqli_connect("localhost", "root", "","project");

    if (!$con)
      {
      die('Could not connect: ' . mysqli_error());
      }
      $sql = "INSERT INTO childwaitinglist ( Fullname, dob,childdetails,diseases,secid) VALUES ('$name', '$date', '$detail', '$dis', '$secid') ";

      if(mysqli_query($con, $sql))
      {
         echo'<script>alert("form added")</script>';
         
          header("Location:../view/secretaryview.php");
         
          include_once '../model/observer.php';
               
                $y = new removechild;

            $y->notify();
      }
      else
      {
          echo"erorr";
          header("Location:../view/viewform.php");
      }
  }

      }



?>