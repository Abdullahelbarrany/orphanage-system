<?php
session_start();
include_once '../model/proxy.php';
include_once "../model/page.php";
if(isset($_SESSION['usertype']))
{
    $x=new proxycheck();
    $y=$x->check($_SESSION['usertype'],11);
if($y==1)
{//include_once "../controller/loadpagecontroller.php";
    $x=new page(11);

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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <style type="text/css">
        .wrapper{
            width: 650px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
        }
    </style>
   
</head>
<body>
    
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Accept donation</h2>
                        
                    </div>
                    <?php
                 
                    require_once '../controller/rdm.php';
                     ?>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>