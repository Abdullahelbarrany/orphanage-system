<?php
if (isset($_POST["id"]) && !empty($_POST["id"])) {
    $id = $_POST["id"];
    // Prepare a delete statement
    include_once '../model/child.php';
    $delete = new child;
  $delete->delete($id);
        echo "xxxxxxxx";
        include_once '../model/observer.php';
               header("location: ../view/manegerview.php");
                $y = new removechild;

			$y->notify();

}


?>