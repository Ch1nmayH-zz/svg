<?php
session_start();

if (!isset($_SESSION['id'])) {

    echo "<script> alert('You are not authorized to visit this page'); 
        location.href = '../index.php';</script>";
} elseif ($_SESSION['role'] != 'admin') {

    echo "<script> alert('You are not authorized to visit this page'); 
        location.href = '../index.php';</script>";
}

include('../includes/db_connection.php');
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
        <title>Students</title>
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

                    <div>

                        <div class="table-responsive">
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>email</th>
                                        <th>personal ph</th>
                                        <th>parent ph</th>
                                        <th>course</th>
                                        <th>year</th>
                                        <th>roll no</th>
                                        <th>password</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>



                                <?php

                            $sql = "SELECT * FROM userdetails WHERE role = 'student' AND status='pending'";
                            if ($result = mysqli_query($con, $sql)) {
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {

                            ?>

                                <tbody>
                                    <form action="./acceptStudent.inc.php" method="POST">
                                        <tr>


                                            <input type="hidden" name="id" value="<?php echo $row['id'];  ?>">
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['fname'] . " " . $row['lname']; ?></td>
                                            <td><?php echo $row['email'] ?></td>
                                            <td><?php echo $row['personalPh'] ?></td>
                                            <td><?php echo $row['parentPh'] ?></td>
                                            <td><?php echo $row['course'] ?></td>
                                            <td><?php echo $row['year'] ?></td>
                                            <td><?php echo $row['rollno'] ?></td>
                                            <td><?php echo $row['pswd'] ?></td>
                                            <td><span class="badge badge-warning"><?php echo $row['status'] ?></span>
                                            </td>
                                            <td><button class="btn btn-sm btn-danger" name="accept">
                                                    Accept
                                                </button>
                                            </td>
                                        </tr>
                                    </form>
                                    <?php
                                    }
                                } else {
                                }
                            }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </body>