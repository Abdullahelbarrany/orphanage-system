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
                            <h2>create user</h2>
                        </div>
                        <p>Please enter the information of the new user</p>
                        <form action="../Controller/createusercontroller.php" method="post">
                                <div class="form-group ">
                                <label>first Name</label>
                                <input type="text" name="firstname" class="form-control">
                                <span class="help-block"></span>
                            </div>
                <div class="form-group ">
                                <label>Last Name</label>
                                <input type="text" name="lastname" class="form-control">
                                <span class="help-block"></span>
                            </div>
                              <div class="form-group ">
                            <label for="choose-file" class="label-title">Upload Profile Picture</label>
                             <input type="file" id="choose-file" size="80">
                         </div>
                            <div class="form-group ">
                                <label>Password</label>
                                <input type="Password"  name="Password" class="form-control"></input>
                                <span class="help-block"></span>
                            </div>
                            <div class="form-group ">
                                <label>Confirm Password</label>
                                <input type="Password"  name="ConfirmPassword" class="form-control"></input>
                                <span class="help-block"></span>
                            </div>
                            <div class="form-group ">
                                <label>Salary</label>
                                <input type="text" name="salary" class="form-control">
                                <span class="help-block"></span>
                            </div>
                 <div class="form-group ">
                                <label>Email</label>
                                <input type="text" name="Email" class="form-control">
                                <span class="help-block"></span>
                            </div>
                            <div class="form-group ">
                                <label>Phone Number</label>
                                <input type="text" name="Phonenumber" class="form-control">
                                <span class="help-block"></span>
                            </div>
                <div class="form-group ">
                                  <label for="Usertype">Choose a User Type:</label>
                    <select name="cars" id="cars">
                      <option value="1">Manager</option>
                      <option value="2">Accountant</option>
                      <option value="4">Secartary</option>
                      <option value="5">HR</option>
                    </select>
                            </div>
                            <input type="hidden" name="id">
                            <input type="submit" class="btn btn-primary" value="Submit">
                            <a href="../index.php" class="btn btn-default">Cancel</a>
                        </form>
                    </div>
                </div>        
            </div>
        </div>
    </body>
</html>