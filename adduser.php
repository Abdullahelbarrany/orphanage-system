<?php
include_once '../model/Database.php';
class AddUser
{ function InsertUser($password,$f_name,$l_name,$phonenumber,$email,$usertypeid,$salary)
    {
       $con = mysqli_connect("localhost", "root", "","project");
    
    if (!$con)
      {
      die('Could not connect: ' . mysqli_error());
      }
      /*else
      {        echo'<script> alert ("conected")</script>';


      }
      */
      $sql = "INSERT INTO user (password,f_name,l_name,phonenumber,email,usertypeid,salary) VALUES ('$password','$f_name','$l_name','$phonenumber','$email','$usertypeid','$salary')";

      if (mysqli_query($con, $sql))
      {
        echo'<script> alert ("user added")</script>';
        header("Location:../view/manegerview.php");
      }
      else
      {
      echo'<script> alert ("error")</script>';
      header("Location:../view/manegerview.php");
      }
    }
          
 }



?>