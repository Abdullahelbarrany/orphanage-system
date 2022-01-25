
<!DOCTYPE html>
<?php
include_once '../controller/readchildwaitingcontroller.php';
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>View Record</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
        <style type="text/css">
            .wrapper{
                width: 500px;
                margin: 0 auto;
            }
        </style>
    </head>
    <body>
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <form action="../controller/readchildwaitingcontroller.php" method="post">

                            <div class="page-header">
                                <h1>View Record</h1>
                            </div>
                            <div class="form-group">
                                <label>Full Name</label>
                                <p class="form-control-static"><?php echo $row["Fullname"]; ?></p>
                            </div>
                            <div class="form-group">
                                <label>DOB</label>
                                <p class="form-control-static"><?php echo $row["dob"]; ?></p>
                            </div>
                            <div class="form-group">
                                <label>Child Details</label>
                                <p class="form-control-static"><?php echo $row["childdetails"]; ?></p>
                            </div>
                             <div class="form-group">
                                <label>Diseases</label>
                                <p class="form-control-static"><?php echo $row["diseases"]; ?></p>
                            </div>
                             <div class="form-group">
                                <label>Secretary ID</label>
                                <p class="form-control-static"><?php echo $row["secid"]; ?></p>
                            </div>
                            <p><a href="../view/manegerview.php" class="btn btn-primary">Back</a></p>
                             <input type="hidden" name="id" value="<?php echo trim($_GET["id"]); ?>"/>
                            <p><a href="../controller/deletechildcontroller.php" class="btn btn-danger">Reject</a></p>
                            <p><a href="../index.php" class="btn btn-primary">Accept</a></p>
                        </form>
                    </div>
                </div>        
            </div>
        </div>
    </body>
</html>