<?php
// session_start();
error_reporting(0);
$role = $_SESSION['role'];
?>

<nav class="ts-sidebar">
    <ul class="ts-sidebar-menu">

        <li class="ts-label"><?php

                          if (isset($_SESSION['role'])) {
                            echo "$role";
                          } else {

                            echo "Guest";
                          }
                          ?></li>
        <?PHP if (isset($_SESSION['id'])) {
      if (isset($_SESSION['role'])) {

        if ($_SESSION['role'] == 'admin') {

    ?>
        <!-- <li><a href="dashboard.php"><i class="fa fa-desktop"></i>Dashboard</a></li> -->
        <li><a href="../index.php"><i class="fa fa-user"></i>Home</a></li>
        <li><a href="my-profile.php"><i class="fa fa-user"></i> My Profile</a></li>
        <li><a href="change-password.php"><i class="fa fa-files-o"></i>Change Password</a></li>
        <li><a href="change-password.php"><i class="fa fa-files-o"></i>Manage Managers</a></li>
        <li><a href="change-password.php"><i class="fa fa-files-o"></i>Manage Students</a></li>
        <li><a href="change-password.php"><i class="fa fa-files-o"></i>Event Management</a></li>
        <li><a href="change-password.php"><i class="fa fa-files-o"></i>Application</a></li>
        <li><a href="change-password.php"><i class="fa fa-files-o"></i>View Payment</a></li>
        <li><a href="change-password.php"><i class="fa fa-files-o"></i>View Feedback</a></li>
        <!-- <li><a href="book-hostel.php"><i class="fa fa-file-o"></i>Book Hostel</a></li>
              <li><a href="room-details.php"><i class="fa fa-file-o"></i>Room Details</a></li>
              <li><a href="access-log.php"><i class="fa fa-file-o"></i>Access log</a></li> -->
        <?php
        } elseif ($_SESSION['role'] == 'manager') {

        ?>
        <!-- <li><a href="dashboard.php"><i class="fa fa-desktop"></i>Dashboard</a></li> -->
        <li><a href="../index.php"><i class="fa fa-user"></i>Home</a></li>
        <li><a href="my-profile.php"><i class="fa fa-user"></i> My Profile</a></li>
        <li><a href="change-password.php"><i class="fa fa-files-o"></i>Change Password</a></li>
        <li><a href="change-password.php"><i class="fa fa-files-o"></i>Manage Batches</a></li>
        <li><a href="change-password.php"><i class="fa fa-files-o"></i>Manage Student Remarks</a></li>
        <li><a href="change-password.php"><i class="fa fa-files-o"></i>Attendance Management</a></li>
        <li><a href="change-password.php"><i class="fa fa-files-o"></i>Event Management</a></li>
        <li><a href="change-password.php"><i class="fa fa-files-o"></i>Application</a></li>
        <li><a href="change-password.php"><i class="fa fa-files-o"></i>View Feedback</a></li>
        <!-- <li><a href="book-hostel.php"><i class="fa fa-file-o"></i>Book Hostel</a></li>
              <li><a href="room-details.php"><i class="fa fa-file-o"></i>Room Details</a></li>
              <li><a href="access-log.php"><i class="fa fa-file-o"></i>Access log</a></li> -->
        <?php
        } elseif ($_SESSION['role'] == 'student') {

        ?>
        <!-- <li><a href="dashboard.php"><i class="fa fa-desktop"></i>Dashboard</a></li> -->
        <li><a href="../index.php"><i class="fa fa-user"></i>Home</a></li>
        <li><a href="my-profile.php"><i class="fa fa-user"></i> My Profile</a></li>
        <li><a href="change-password.php"><i class="fa fa-files-o"></i>Change Password</a></li>
        <li><a href="change-password.php"><i class="fa fa-files-o"></i>View Batches</a></li>
        <li><a href="change-password.php"><i class="fa fa-files-o"></i>View Event Details</a></li>
        <li><a href="change-password.php"><i class="fa fa-files-o"></i>Application</a></li>
        <li><a href="change-password.php"><i class="fa fa-files-o"></i>Fee payment</a></li>
        <li><a href="change-password.php"><i class="fa fa-files-o"></i>Give Feedback</a></li>
        <!-- <li><a href="book-hostel.php"><i class="fa fa-file-o"></i>Book Hostel</a></li>
              <li><a href="room-details.php"><i class="fa fa-file-o"></i>Room Details</a></li>
              <li><a href="access-log.php"><i class="fa fa-file-o"></i>Access log</a></li> -->
        <?php
        }
      }
    } else { ?>

        <li><a href="../index.php"><i class="fa fa-home"></i>Home</a></li>
        <li><a href="../register.php"><i class="fa fa-files-o"></i> User Registration</a></li>
        <li><a href="../login.php"><i class="fa fa-users"></i> User Login</a></li>
        <!-- <li><a href="admin"><i class="fa fa-user"></i> Admin Login</a></li> -->
        <?php } ?>

    </ul>
</nav>