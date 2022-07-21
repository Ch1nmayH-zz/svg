<?php
session_start();
include('../includes/db_connection.php');
// include ('../includes/login.inc.php');
$id = $_SESSION['id'];

if (isset($_POST['update'])) {

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $year = $_POST["year"];
    $course = $_POST["course"];
    $rollno = $_POST["rollno"];
    $personalPh = $_POST["personalPh"];
    // $parentPh = $_POST["parPh"];
    $email = $_POST["email"];
    // $pswd = $_POST["password"];
    // $cpswd = $_POST["cPassword"];
    $sql = "UPDATE  userdetails SET fname = '$fname', lname= '$lname' ,email= '$email' ,personalPh= '$personalPh' ,course = '$course',year= '$year',rollno= '$rollno' WHERE id = '$id'";


    $result = mysqli_query($con, $sql);
    if ($result) {


        echo "<script>alert('Profile updated Succssfully');</script>";
    } else {
        echo "<script>alert('Profile updation failed');</script>";
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
                    <?php
                // $sid=isset($_SESSION['id']);
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
                                                    <label class="col-sm-2 control-label"> Registration No : </label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="rollno" id="regno" class="form-control"
                                                            required="required" value="<?php echo $row['rollno'] ?>">
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">First Name : </label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="fname" id="fname" class="form-control"
                                                            value="<?php echo $row['fname'] ?>" required="required">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">Last Name : </label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="lname" id="mname" class="form-control"
                                                            value="<?php echo $row['lname'] ?>">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">Email : </label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="email" id="lname" class="form-control"
                                                            value="<?php echo $row['email']; ?>" required="required">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">Personal Number : </label>
                                                    <div class="col-sm-8">
                                                        <input type="number" name="personalPh" id="lname"
                                                            class="form-control"
                                                            value="<?php echo $row['personalPh']; ?>"
                                                            required="required">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">Course : </label>
                                                    <div class="col-sm-8">
                                                        <select name="course" class="form-control" required="required">
                                                            <option value="<?php echo $row['course']; ?>">
                                                                <?php echo $row['course']; ?></option>
                                                            <option value="BCA">BCA</option>
                                                            <option value="BBA">BBA</option>
                                                            <option value="BCOM">BCOM</option>
                                                            <option value="BVOC">BVOC</option>
                                                            <option value="BBA">BBA</option>

                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">Year </label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="year" id="contact" class="form-control"
                                                            maxlength="10" value="<?php echo $row['year']; ?>"
                                                            required="required">
                                                    </div>
                                                </div>



                                                <?php } ?>





                                                <div class="col-sm-6 col-sm-offset-4">

                                                    <input type="submit" name="update" Value="Update Profile"
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