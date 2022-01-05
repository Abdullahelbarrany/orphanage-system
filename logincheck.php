<?php
include_once "Database.php";
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
            


                 //  echo'<script>alert(result->usertypeid )</script>';
                   include_once "staffclass.php";
                    $y = new staff($id);
                   // echo $id.$y->f_name;
                    $z=$y->password;

                    if(password_verify($input,$z)) {
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
             echo'<script>alert("user not found")</script>';
                                    header("Location:../view/loginview.php");

                }



        


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
       { return 1;


       }

    }
}