<?php
// Check existence of id parameter before processing further
if (isset($_GET["id"]) && !empty(trim($_GET["id"]))) {
    $id = trim($_GET["id"]);

    include_once '../Model/readchildwaiting.php';
    $reader = new ReadClasschild();
    if ($row = $reader->readOneRecord($id)) {
        $Fullname = $row["Fullname"];
        $dob = $row["dob"];
        $childdetails = $row["childdetails"];
         $diseases = $row["diseases"];
        $secid = $row["secid"];
    } else {
        echo "Something went wrong. Please try again later.";
    }
} else {
    // URL doesn't contain id parameter. Redirect to error page
    header("location: error.php");
    exit();
}
?>