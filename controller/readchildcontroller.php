<?php
require_once '../model/readchildwaiting.php';
$read = new ReadClasschild();
$result = $read->readAll();
if (mysqli_num_rows($result) > 0) {
    echo "<table class='table table-bordered table-striped'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>#</th>";
    echo "<th>Full Name</th>";
    echo "<th>DOB</th>";
    echo "<th>Childdetails</th>";
    echo "<th>Diseases</th>";
    echo "<th>secretary id</th>";
    echo "<th>Action</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['Fullname'] . "</td>";
        echo "<td>" . $row['dob'] . "</td>";
          echo "<td>" . $row['childdetails'] . "</td>";
            echo "<td>" . $row['diseases'] . "</td>";
              echo "<td>" . $row['secid'] . "</td>";
       
        echo "<td>";
        echo "<a href='../view/readchildnode.php?id=" . $row['id'] . "' title='View Record' data-toggle='tooltip'>
							<span class='glyphicon glyphicon-eye-open'></span>
						  </a>";
       
        
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
    // Free result set
    mysqli_free_result($result);
} else {
    echo "<p class='lead'><em>No records were found.</em></p>";
}
?>