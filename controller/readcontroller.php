<?php
// Check existence of id parameter before processing further
if (isset($_GET["id"]) && !empty(trim($_GET["id"]))) {
    $id = trim($_GET["id"]);

    include_once '../model/readdonations.php';
    $reader = new readdonation();
    if ($row = $reader->readOneRecord($id)) {
        $id = $row["id"];
       
    } else {
        echo "Something went wrong. Please try again later.";
    }
} else {
    // URL doesn't contain id parameter. Redirect to error page
    header("location: error.php");
    exit();
}
?>