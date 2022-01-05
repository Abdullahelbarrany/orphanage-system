<?php
include_once "../model/page.php";
include_once "../model/multilingual.php";
$x=new page(5);
$y=$x->returnlang();
if($y==1)
{$z=new gettranslationdetails(1);
	$lang=new changelanguage(2,5);
	header("Location:../view/sent.php");



}
else
{$z=new gettranslationdetails(2);
	$lang=new changelanguage(1,5);
	header("Location:../view/sent.php");

}
