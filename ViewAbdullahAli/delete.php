<html lang="en">
    <head>
        <?php include_once "../controller/readController.php";?>
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
                        <form action="../Controller/readController.php" method="post">

                            <div class="page-header">
                                <h1>View Record</h1>
                            </div>
                            <div class="form-group">
                                <label>Id</label>
                                <p class="form-control-static"><?php echo $row["id"]; ?></p>
                            </div>
                            
                            <p><a href="../controller/reject.php" class="btn btn-primary">Reject this Donation</a></p>
                        </form>
                    </div>
                </div>        
            </div>
        </div>
    </body>
</html>