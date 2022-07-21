<?php

session_start();

if (!isset($_SESSION['id'])) {

    echo "<script> alert('You are not authorized to visit this page'); 
    location.href = '../index.php';</script>";
} elseif ($_SESSION['role'] != 'admin') {

    echo "<script> alert('You are not authorized to visit this page'); 
    location.href = '../index.php';</script>";
}
?>






<!doctype html>
<html lang="en" class="no-js">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="theme-color" content="#3e454c">
        <title>Profile Updation</title>
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">>
        <link rel="stylesheet" href="css/bootstrap-social.css">
        <link rel="stylesheet" href="css/bootstrap-select.css">
        <link rel="stylesheet" href="css/fileinput.min.css">
        <link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
        <link rel="stylesheet" href="css/style.css">
        <script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
        <script type="text/javascript" src="js/validation.min.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>

    </head>

    <body>
        <?php include('../includes/header.php'); ?>
        <div class="ts-main-content">
            <?php include('../includes/sidebar.php'); ?>
            <div class="content-wrapper">
                <div class="container-fluid">


                    <div class="row">
                        <div class="col-md-12">



                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">

                                            ID : &nbsp; <?php echo $_SESSION['id']; ?>
                                        </div>
                                        <div class="panel-body">
                                            <form method="post" action="./add_Student.inc.php" name="registration"
                                                class="form-horizontal" onSubmit="return valid();">




                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label"> Registration No : </label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="rollno" id="regno" class="form-control"
                                                            required="required">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">First Name : </label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="fname" id="fname" class="form-control"
                                                            required="required">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">Last Name : </label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="lname" id="mname" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">Email : </label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="email" id="lname" class="form-control"
                                                            required="required">
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">Personal Number : </label>
                                                    <div class="col-sm-8">
                                                        <input type="number" name="personalPh" id="lname"
                                                            class="form-control" required="required">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">Course : </label>
                                                    <div class="col-sm-8">
                                                        <select name="course" class="form-control" required="required">

                                                            <option value="BCA">BCA</option>
                                                            <option value="BBA">BBA</option>
                                                            <option value="BCOM">BCOM</option>
                                                            <option value="BVOC">BVOC</option>
                                                            <option value="BBA">BBA</option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">Year : </label>
                                                    <div class="col-sm-8">
                                                        <select name="year" class="form-control" required="required">

                                                            <option value="1">|</option>
                                                            <option value="2">||</option>
                                                            <option value="3">|||</option>


                                                        </select>
                                                    </div>
                                                </div>










                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label"> Password : </label>
                                                    <div class="col-sm-8">
                                                        <input type="password" name="pswd" id="regno"
                                                            class="form-control" required="required">
                                                    </div>
                                                </div>




                                                <div class="col-sm-6 col-sm-offset-4">

                                                    <input type="submit" name="add" Value="Create Student"
                                                        class="btn btn-primary">
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap-select.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.dataTables.min.js"></script>
        <script src="js/dataTables.bootstrap.min.js"></script>
        <script src="js/Chart.min.js"></script>
        <script src="js/fileinput.js"></script>
        <script src="js/chartData.js"></script>
        <script src="js/main.js"></script>
    </body>



</html>