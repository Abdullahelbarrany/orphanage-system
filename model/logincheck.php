<?php
include_once "Database.php";
//session_start();
class LoginCheck
{
    function ChecKL($id,$input)
    {
       $con = mysqli_connect("localhost", "root", "","orphnew");
    if (!$con)
      {
      die('Could not connect: ' . mysqli_error());
      }

        $query = "select * from user where id='$id' ";


        //$sql = "select * from user where id='" . $id . "' and password='" . $pass. "'";

       $result = mysqli_query($con,$query);

        if ($result) {
            


                   include_once "staffclass.php";
                    $y = new staff($id);
                   // echo $id.$y->f_name;
                    $z=$y->password;

                    if(password_verify($input,$z)) {

                   $_SESSION['username']=$y->f_name;
                    return $y->usertypeid->id;
                    exit();

                    }
                    else
                    {
                                     echo'<script>alert("Wrong password")</script>';

                    } 

}

                
                else    
                {
             
                                 ///   header("Location:../view/loginview.php");

                }


return 0 ;
        


    }

    function checkuser($id)
    {$con = mysqli_connect("localhost", "root", "","orphnew");
    if (!$con)
      {
      die('Could not connect: ' . mysqli_error());
      }

        $query = "select * from user where id='$id' ";


        //$sql = "select * from user where id='" . $id . "' and password='" . $pass. "'";

       $result = mysqli_query($con,$query);
       if($result)
       { 

        return 1;


       }

    }
}