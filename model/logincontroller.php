<?php

session_start();
include_once '../model/page.php';
$name = $password = "";
$username_err = $password_err= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $input_name = trim($_POST["username"]);
    if (empty($input_name)) {
        $username_err = "Please enter a username.";
    }  else {
        $name = $input_name;

    }

   
    $input_password = trim($_POST["password"]);
    if (empty($input_password)) {
        $password_err = "Please enter a password";
    } else {
        $password = $input_password;
    }
     if (empty($username_err) && empty($password_err)) {
     include_once '../model/loginCheck.php';
     $y = new LoginCheck;
      include_once '../model/usertypeclass.php';
     
     $r = $y->ChecKL($name,$password);
     if($r==0)
     {}
 else
 {
       include_once '../model/link.php';
        
       $z = new link();
       $x2;
       $cc;
       $result =$z->returnalllinks($r);
       $_SESSION['userid']=$name;
        $_SESSION['usertype']=$r;
     //   echo"theusernameis". $_SESSION['userid'];
     //   echo "<br>";
      //  echo $_SESSION['usertype'];
        echo "<h1> Welcome   ".$_SESSION['username']."</h1>";
       if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_array($result))
        {

        
    //    echo "cc";
       $cc= $row['pageid'];
        $x2=new page($cc);
       echo "<a href=".$x2->linkadress.">".$x2->friendlyname."</a>";
        // mysqli_free_result($result);
       echo "<br>";

       }
       include_once 'factorycontroller.php';
      
      

   }
   else
   {
    echo "error";
   }
    ///   $l=$z->returnlink();
     
     // $newlink = new page($l);
       
        
     }
    }
    else   {
             //  echo'<script>alert("Wrong input")</script>';
                 header("Location: ../index.php");
                 //$x=new page(3);
                 //$x->echohtml($x);

   }
}
      ?>