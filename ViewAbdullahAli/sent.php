<?php
session_start();
include_once "../model/page.php";

include_once '../model/proxy.php';

if(isset($_SESSION['type']))
{
	$x=new proxycheck();
	$y=$x->check($_SESSION['usertype'],5);
if($y==1)
{include_once "../controller/loadpagecontroller.php";
	$x=new page(5);

$x->echohtml($x);
}	
else
{  echo"you dont have permission to this page";

}


}
	
{
	echo "you are not logged in";
}

?>