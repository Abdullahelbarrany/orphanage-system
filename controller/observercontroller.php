<?php 
include_once '../model/observer.php';
  header("Location: ../view/manegerview.php");
$y = new removechild();
$y->notify();


?>