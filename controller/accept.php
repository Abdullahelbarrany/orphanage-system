<?php
session_start();
if(isset($_SESSION['did']))
{
    $s=$_SESSION['did'];
    include_once '../model/state.php';
    $x = new changestate();
    $x->getstate($s);
    $x->getparent($x->stateid);
  //  echo $x->stateid."<br>".$x->pid;
    $x->updatestate($s,$x->pid);
    echo "state changed successfully";

    //echo 
}