
<?php
session_start();
include_once '../model/proxy.php';
include_once "../model/page.php";
if(isset($_SESSION['usertype']))
{
    $x=new proxycheck();
    $y=$x->check($_SESSION['usertype'],13);
if($y==1)
{//include_once "../controller/loadpagecontroller.php";
    $x=new page(13);

$x->echohtml($x);
}   
else
{  echo"you dont have permission to this page";
header("Location:error.php");

}


}
 else   
{
    echo "you are not logged in";
    header("Location:error.php");
}
?>
<html>
<head>
 
  <title>Send Greetings</title>
</head>

<body>
   <div class="main">
    <p class="sign" align="center">Events</p>
    <em>Leave id empty if you want to send to all employees</em>
    <form action="../controller/managercontroller.php" method="post">
   <div class="form-group ">

         
              <span class="help-block">
                  
              </span>
                </div>
               <div class="form-group ">
             
             <div class="un">
           
          
                     <label for="Category">Choose an Event</label>

    <select name="cars" id="cars">
    
    <?php
    include_once "../controller/greetingscontroller.php";
     ?>
        </select> 
           
              </div>               
             
                <div class="pass">
                  <input class="pass" type="text" id ="pass" name="pass" align="center" placeholder="id">
                               
                 </div>                                        
         <input class="Submit" type="submit" value="send" >
      </div>
                      
   </form>  
 

     
</body>

</html>
<style >
    body {
        background-color: #F3EBF6;    
        font-family: 'Ubuntu', sans-serif;
    }
    
    .main {
        background-color: #FFFFFF;
        width: 400px;
        height: 800px;
        margin: 7em auto;
        border-radius: 1.5em;
        box-shadow: 0px 11px 35px 2px rgba(0, 0, 0, 0.14);
    }
    
    .sign {
        padding-top: 40px;
        color: #8C55AA; 
        font-family: 'Ubuntu', sans-serif;
        font-weight: bold;
        font-size: 23px;
    }
    
    .un {
    width: 76%;
    color: rgb(38, 50, 56);
    font-weight: 700;
    font-size: 14px;
    letter-spacing: 1px;
    background: rgba(136, 126, 126, 0.04);
    padding: 10px 20px;
    border: none;
    border-radius: 20px;
    outline: none;
    box-sizing: border-box;
    border: 2px solid rgba(0, 0, 0, 0.02);
    margin-bottom: 50px;
    margin-left: 46px;
    text-align: center;
    margin-bottom: 27px;
    font-family: 'Ubuntu', sans-serif;
    }
    
    form.form1 {
        padding-top: 40px;
    }
    
    .pass {
            width: 76%;
    color: rgb(38, 50, 56);
    font-weight: 700;
    font-size: 14px;
    letter-spacing: 1px;
    background: rgba(136, 126, 126, 0.04);
    padding: 10px 20px;
    border: none;
    border-radius: 20px;
    outline: none;
    box-sizing: border-box;
    border: 2px solid rgba(0, 0, 0, 0.02);
    margin-bottom: 50px;
    margin-left: 46px;
    text-align: center;
    margin-bottom: 27px;
    font-family: 'Ubuntu', sans-serif;
    }
    
   
    .un:focus, .pass:focus {
        border: 2px solid rgba(0, 0, 0, 0.18) !important;
        
    }
    
    .Submit {
      cursor: pointer;
        border-radius: 5em;
        color: #fff;
        background: linear-gradient(to right, #9C27B0, #E040FB);
        border: 0;
        padding-left: 40px;
        padding-right: 40px;
        padding-bottom: 10px;
        padding-top: 10px;
        font-family: 'Ubuntu', sans-serif;
        margin-left: 35%;
        font-size: 13px;
        box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.04);
    }
    
    
    
    a {
        text-shadow: 0px 0px 3px rgba(117, 117, 117, 0.12);
        color: #E1BEE7;
        text-decoration: none
    }
    
    @media (max-width: 600px) {
        .main {
            border-radius: 0px;
        }
</style>





