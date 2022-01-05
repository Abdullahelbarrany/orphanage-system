<?php
require_once '../model/ReadClassUser.php';
$read = new ReadClassUser();
$result = $read->readAll();
if (mysqli_num_rows($result) > 0) {
    echo "<table class='table table-bordered table-striped'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>#</th>";
    echo "<th>First Name</th>";
    echo "<th>Last Name</th>";
    echo "<th>Phone Number</th>";
    echo "<th>E-mail</th>";
    echo "<th>UserTypeID</th>";
    echo "<th>salary</th>";
    echo "<th>Action</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['f_name'] . "</td>";
        echo "<td>" . $row['l_name'] . "</td>";
          echo "<td>" . $row['phonenumber'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
              echo "<td>" . $row['usertypeid'] . "</td>";
        echo "<td>" . $row['salary'] . "</td>";
        echo "<td>";
        echo "<a href='View/read.php?id=" . $row['id'] . "' title='View Record' data-toggle='tooltip'>
							<span class='glyphicon glyphicon-eye-open'></span>
						  </a>";
        echo "<a href='../view/update.php?id=" . $row['id'] . "' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
        echo "<a href='../view/delete.php?id=" . $row['id'] . "' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
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