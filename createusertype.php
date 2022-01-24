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
                        <form action="../controller/createusertypecontroller.php" method="post">
                                <div class="form-group ">
                                <label>first Name</label>
                                <input type="text" name="type" class="form-control">
                                <span class="help-block"></span>
                            </div>
               					 <input type="submit" class="btn btn-primary" value="Submit">
                        </form>
                    </div>
                </div>        
            </div>
        </div>
    </body>
</html>