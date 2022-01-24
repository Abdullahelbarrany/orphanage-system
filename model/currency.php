<?php


session_start();
if(isset($_SESSION['converted']))
{


	echo $_SESSION['converted'];
}