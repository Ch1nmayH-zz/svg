<?php
session_start();
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
        <title>FeedBack</title>
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/dataTables.bootstrap.min.css">>
        <link rel="stylesheet" href="../css/bootstrap-social.css">
        <link rel="stylesheet" href="css/bootstrap-select.css">
        <link rel="stylesheet" href="../css/fileinput.min.css">
        <link rel="stylesheet" href="../css/awesome-bootstrap-checkbox.css">
        <link rel="stylesheet" href="../css/style.css">
        <script type="text/javascript" src="../js/jquery-1.11.3-jquery.min.js"></script>
        <script type="text/javascript" src="../js/validation.min.js"></script>
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
                                        <th>Feedback</th>
                                        <!-- <th>role</th>
                                        <th>Status</th>
                                        <th>Action</th> -->
                                    </tr>
                                </thead>



                                <?php

                            $sql = "SELECT * FROM feedback";
                            if ($result = mysqli_query($con, $sql)) {
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {

                            ?>

                                <tbody>
                                    <tr>
                                        <td name='table_id'><?php echo $row['id'] ?></td>
                                        <td><?php echo $row['name'] . " " . $row['lname']; ?></td>
                                        <td><?php echo $row['feedback'] ?></td>
                                        <!-- <td><?php echo $row['role'] ?></td>
                                        <td><span class="badge badge-warning">Active</span></td> -->

                                        <!-- <td><button class="btn btn-sm btn-danger" name="delete">Delete</button>

                                        </td> -->


                                    </tr>









                                    <?php



                                    }
                                }
                            } else {
                                    ?>
                                    <h1>No records found</h1>
                                    <?php
                            }
                                ?>
                                </tbody>
                            </table>
                        </div>
                        <?php

                    // else {

                    // echo "error";
                    // }

                    ?>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </body>