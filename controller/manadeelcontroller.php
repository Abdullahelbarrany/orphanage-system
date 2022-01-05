<?php
include_once "../model/decorative.php";
$x= new Beds();
$x->Cost();
header("Location:../view/invoice.php");
 echo '<script>alert("Thank you for helping us get Beds")</script>';


