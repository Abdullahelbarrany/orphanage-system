<?php
include_once '../model/Database.php';
class AddUser
{ function InsertUser($password,$f_name,$l_name,$phonenumber,$email,$usertypeid,$salary,$adress,$date)
    {
       $con = mysqli_connect("localhost", "root", "","orphnew");
    
    if (!$con)
      {
      die('Could not connect: ' . mysqli_error());
      }
      /*else
      {        echo'<script> alert ("conected")</script>';


      }
      */
      $sql = "INSERT INTO user(usertypeid,f_name,l_name,age,isdeleted, password, Email, phonenumber, adressid,Salary) VALUES ('$usertypeid','$f_name','$l_name','$date','0','$password','$email','$phonenumber','$adress','$salary')";

      if (mysqli_query($con, $sql))
      {
        echo'<script> alert ("user added")</script>';
        header("Location:../index.php")
        
      }
      else
      {
      echo'<script> alert ("error")</script>';
      echo $password.$f_name."<br>".$l_name."<br>".$phonenumber."<br>".$email."<br>".$usertypeid.$salary."<br>".$adress."<br>".$date;
    
      }
    }
          
 }



?>