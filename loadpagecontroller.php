<?php

include_once "../model/page.php";
include_once "../model/loadpage.php";
$x=new page(5);
$y=$x->returnlang();
if($y==1)
{
	$z= new loadpage($y);
echo "$z->word";
}
else
{$z= new loadpage($y);
echo "$z->word";

}
