<?php
session_start();
if(isset($_SESSION['did']))
{
    $s=$_SESSION['did'];
    include_once '../model/state.php';
    $x = new changestate();
    
    $x->updatestate($s,5);
    echo "state changed successfully";

    //echo 
}