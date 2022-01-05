<?php
include_once "../model/decorative.php";
$x= new Meal();
$x->Cost();
header("Location:../view/invoice.php");
 echo '<script>alert("Thank you for adding Meal")</script>';










?>