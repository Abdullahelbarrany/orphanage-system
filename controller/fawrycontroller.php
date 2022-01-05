<?php

if (isset($_POST["id"]) && !empty($_POST["id"])) {
    $id = $_POST["id"];
    // Prepare a delete statement
    include_once '../model/staffclass.php';
    $delete = new staff($id);
    if ($delete->delete($id)) 
    {
        header("location: ../view/manegerview.php");
    } else {
               header("location: ../view/manegerview.php");

    }
} else {
    // Check existence of id parameter
    if (empty(trim($_GET["id"]))) {
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}