<?php

include_once "../model/page.php";
include_once "../model/loadpage.php";
$x=new page(5);
$y=$x->returnlang();
$z= new loadpage($y,5);
echo $z->word;


