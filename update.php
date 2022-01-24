<?php
include_once '../controller/updateController.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Update Record</title>
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
                        <div class="page-header">
                            <h2>Update Record</h2>
                        </div>
                        <p>Please edit the input values and submit to update the record.</p>
                        <form action="../controller/updateController.php" method="post">
                            <div class="form-group ">
                                <label>First Name</label>
                                <input type="text" name="name" class="form-control" value="<?php echo $fname; ?>">
                                <span class="help-block"></span>
                            </div>
                            <div class="form-group ">
                                <label>Last Name</label>
                                <textarea name="lname" class="form-control"><?php echo $lname; ?></textarea>
                                <span class="help-block"></span>
                            </div>
                             <div class="form-group ">
                                <label>Password</label>
                                <textarea name="password" class="form-control"><?php echo $password; ?></textarea>
                                <span class="help-block"></span>
                            </div>
                                                         <div class="form-group >">
                                <label>Email</label>
                                <textarea name="email" class="form-control"><?php echo $email; ?></textarea>
                                <span class="help-block"></span>
                            </div>
                            <div class="form-group ">
                                <label>Phone Number</label>
                                <textarea name="phonenumber" class="form-control"><?php echo $phonenumber; ?></textarea>
                                <span class="help-block"></span>
                            </div>
                            <div class="form-group ">
                                <label>User Type ID</label>
                                <textarea name="usertype" class="form-control"><?php echo $usertype; ?></textarea>
                                <span class="help-block"></span>
                            </div>
                            <div class="form-group ">
                                <label>Salary</label>
                                <input type="text" name="salary" class="form-control" value="<?php echo $salary; ?>">
                                <span class="help-block"><?php echo $salary_err; ?></span>
                            </div>
                            <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                            <input type="submit" class="btn btn-primary" value="Submit">
                            <a href="../index.php" class="btn btn-default">Cancel</a>
                        </form>
                    </div>
                </div>        
            </div>
        </div>
    </body>
</html>