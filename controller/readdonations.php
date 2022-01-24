<?php
session_start();
require_once '../model/readdonations.php';
$read = new readdonation();

$x=1;
$result = $read->readAll($x);
if (mysqli_num_rows($result) > 0) {
    echo "<table class='table table-bordered table-striped'>";
    echo "<thead>";
    echo "<tr>";
        echo "<th>ID</th>";
    echo "<th>QUANTITY</th>";
    echo "<th>CATEGORY ID</th>";
    echo "<th>DONATION ID</th>";
    echo "<th>STATE ID</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . " </td>";
        echo "<td>" . $row['Qty'] . "</td>";
        echo "<td>" . $row['catid'] . "</td>";
          echo "<td>" . $row['donid'] . "</td>";
            echo "<td>" . $row['state_id'] . "</td>";
             echo "<td>";
        echo "<td>";
        echo "<a href='../view/read.php?id=" . $row['id'] . "' title='accept donation' data-toggle='tooltip'>
							<span class='glyphicon glyphicon-eye-open'></span>
						  </a>";
                echo "<a href='../view/delete.php?id=" . $row['id'] . "' title='reject donation' data-toggle='tooltip'>
              <span class='glyphicon glyphicon-trash'></span>
             
              </a>";

        
        
        echo "</td>";
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