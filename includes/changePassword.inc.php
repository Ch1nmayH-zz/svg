<?php
session_start();

$id = $_SESSION['id'];

if (!isset($_SESSION['id'])) {

    echo "<script> alert('You are not authorized to visit this page'); 
        location.href = '../index.php';</script>";
} else {

    include('../includes/db_connection.php');
}

if (isset($_POST['update'])) {

    $pswd = $_POST['pswd'];
    $Npswd = $_POST['newPass'];
    $CNpswd = $_POST['cNewPass'];

    $sql = "SELECT * FROM userdetails WHERE `id` = '$id'";

    if ($result = mysqli_query($con, $sql)) {

        if (mysqli_num_rows($result) > 0) {

            while ($row = mysqli_fetch_assoc($result)) {

                if ($row['pswd'] == $pswd) {

                    if (isset($Npswd) && isset($CNpswd)) {
                        if ($Npswd != $CNpswd) {

                            echo "<script> alert('Confirm password doesn't match the new password'); 
                    location.href = './changePassword.inc.php';</script>";
                        }

                        if ($Npswd == $CNpswd) {

                            $sql2 = "UPDATE `userdetails` SET `pswd` = '$Npswd' WHERE `id` = '$id'";
                            echo "<script> alert('Password Changed Succussfully'); 
                    location.href = './changePassword.inc.php';</script>";

                            if ($result2 = mysqli_query($con, $sql2)) {

                                echo "<script> alert('Password Changed successfully!'); 
                    location.href = './changePassword.inc.php';</script>";
                            } else {

                                echo "<script> alert('There was an error!. Please try again.'); 
                    location.href = './changePassword.inc.php';</script>";
                            }
                        }
                    }
                } elseif ($pswd != $row['pswd']) {
                    echo "<script> alert('Current password is incorrect'); 
                    location.href = './changePassword.inc.php';</script>";
                }
            }
        }
    }
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
        <title>Password Updation</title>
        <link rel="stylesheet" href="./css/font-awesome.min.css">
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/dataTables.bootstrap.min.css">>
        <link rel="stylesheet" href="./css/bootstrap-social.css">
        <link rel="stylesheet" href="./css/bootstrap-select.css">
        <link rel="stylesheet" href="./css/fileinput.min.css">
        <link rel="stylesheet" href="./css/awesome-bootstrap-checkbox.css">
        <link rel="stylesheet" href="./css/style.css">
        <script type="text/javascript" src="./js/jquery-1.11.3-jquery.min.js"></script>
        <script type="text/javascript" src="./js/validation.min.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>

    </head>

    <body>
        <?php include('./header.php'); ?>
        <div class="ts-main-content">
            <?php include('./sidebar.php'); ?>
            <div class="content-wrapper">
                <div class="container-fluid">
                    <?php
                $sql = "SELECT * from userdetails where id='$id'";
                $result = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="page-title"><?php echo $row['fname'] . " " . $row['lname']; ?>'s&nbsp;Profile
                            </h2>


                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">

                                            ID : &nbsp; <?php echo $_SESSION['id']; ?>

                                        </div>
                                        <div class="panel-body">
                                            <form method="post" action="" name="registration" class="form-horizontal"
                                                onSubmit="return valid();">



                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label"> Current Password </label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="pswd" id="pswd" class="form-control"
                                                            required="required">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label"> New Password </label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="newPass" id="newPass"
                                                            class="form-control" required="required">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label"> Confirm New Password </label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="cNewPass" id="cNewPass"
                                                            class="form-control" required="required">
                                                    </div>
                                                </div>


                                                <?php } ?> <div class="col-sm-6 col-sm-offset-4">

                                                    <input type="submit" name="update" Value="Update Password"
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
        <script src="./js/jquery.min.js"></script>
        <script src="./js/bootstrap-select.min.js"></script>
        <script src="./js/bootstrap.min.js"></script>
        <script src="./js/jquery.dataTables.min.js"></script>
        <script src="js/dataTables.bootstrap.min.js"></script>
        <script src="js/Chart.min.js"></script>
        <script src="js/fileinput.js"></script>
        <script src="js/chartData.js"></script>
        <script src="js/main.js"></script>
    </body>

</html>