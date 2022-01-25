<?php
session_start();
include_once '../model/proxy.php';
include_once "../model/page.php";
if(isset($_SESSION['usertype']))
{
    $x=new proxycheck();
    $y=$x->check($_SESSION['usertype'],18);
if($y==1)
{//include_once "../controller/loadpagecontroller.php";
    $x=new page(18);

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