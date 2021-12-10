<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>Manager Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <h1>Manger</h1>
    <style type="text/css">

        h1{
            text-align: center;
        }
        .wrapper{
            width: 650px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
    
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12" align="left">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">User Details</h2>
                        <a href="../view/adduserview.php" class="btn btn-success pull-right">Add New User</a>
                    </div>	
                    <?php
                    // Include config file
                    require_once '../Controller/readusercontroller.php';
                     ?>
                </div>
            </div>        
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12" align="left">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">User Type</h2>
                        <a href="../view/createusertype.php" class="btn btn-success pull-right">Add New UserType</a>
                    </div>	
                    <?php
                    // Include config file
                    require_once '../Controller/readusertypecontroller.php';
                     ?>
                </div>
            </div>        
        </div>
            <div class="container-fluid">
            <div class="row">
                <div class="col-md-12" align="left">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Child app</h2>
                        
                    </div>  
                    <?php
                    // Include config file
                    require_once '../controller/readchildcontroller.php';
                     ?>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
<style >
    

</style>