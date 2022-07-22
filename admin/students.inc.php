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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">>
        <link rel="stylesheet" href="css/bootstrap-social.css">
        <link rel="stylesheet" href="css/bootstrap-select.css">
        <link rel="stylesheet" href="css/fileinput.min.css">
        <link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
        <link rel="stylesheet" href="css/style.css">
        <script type="text/javascript" defer src="js/jquery-1.11.3-jquery.min.js"></script>
        <script type="text/javascript" defer src="js/validation.min.js"></script>
        <script type="text/javascript" defer src="http://code.jquery.com/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" defer
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>

        <style>
        /* Style The Dropdown Button */
        .dropbtn {
            background-color: #4CAF50;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

        /* The container <div> - needed to position the dropdown content */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        /* Dropdown Content (Hidden by Default) */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        /* Links inside the dropdown */
        .dropdown-content a {
            color: black;
            padding: 6px;
            text-decoration: none;
            display: block;
        }

        /* Change color of dropdown links on hover */
        .dropdown-content a:hover {
            background-color: #f1f1f1
        }

        /* Show the dropdown menu on hover */
        .dropdown:hover .dropdown-content {
            display: block;
        }

        /* Change the background color of the dropdown button when the dropdown content is shown */
        .dropdown:hover .dropbtn {
            background-color: #3e8e41;
        }
        </style>
    </head>

    <body>
        <?php include('../includes/header.php'); ?>
        <div class="ts-main-content">
            <?php include('../includes/sidebar.php'); ?>
            <div class="content-wrapper">
                <div class="container-fluid">

                    <div>
                        <div>
                            <form action="./add_Student.php" method="post">
                                <button class="btn btn-sm btn-info" name="create_Student">Add new Student</button>
                            </form>
                        </div>
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



                            $sql = "SELECT * FROM userdetails WHERE role = 'student'";
                            if ($result = mysqli_query($con, $sql)) {
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {

                            ?>

                                <tbody>
                                    <form action="./deleteStudent.inc.php" method="POST">
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

                                            <td> <?php


                                                            if ($row['status'] == 'Suspended') {



                                                                echo "<span class='badge progress-bar-danger'>";
                                                            }

                                                            if ($row['status'] == 'Active') {



                                                                echo "<span class='badge progress-bar-success'>";
                                                            }

                                                            if ($row['status'] == 'Pending') {



                                                                echo "<span class='badge progress-bar-warning'>";
                                                            }

                                                            echo $row['status'] . "</span>";



                                                            ?>

                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-sm btn-info dropdown-toggle">Action</button>
                                                    <div class="dropdown-content">
                                                        <a href="#" type="submit"><button class="btn btn-sm
                                                            btn-danger" name="delete">
                                                                Delete
                                                            </button></a>

                                                        <?php
                                                                if ($row['status'] == 'Active') {

                                                                    echo "<a href='#'><button class='btn btn-sm
                                                                btn-danger' name='suspend'>
                                                                    suspend
                                                                </button></a>";
                                                                } elseif ($row['status'] == 'Suspended') {

                                                                    echo "<a href='#'><button class='btn btn-sm
                                                                btn-success' name='reassign'>
                                                                    Reassign
                                                                </button></a>";
                                                                } elseif ($row['status'] == 'Pending') {

                                                                    echo "<a href='#'><button class='btn btn-sm
                                                                btn-warning' name='approve'>
                                                                    Approve
                                                                </button></a>";
                                                                }


                                                                ?>



                                                    </div>
                                                </div>
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