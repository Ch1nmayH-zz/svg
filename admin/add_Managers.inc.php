<?php

session_start();

if (!isset($_SESSION['id'])) {

    echo "<script> alert('You are not authorized to visit this page'); 
    location.href = '../index.php';</script>";
} elseif ($_SESSION['role'] != 'admin') {

    echo "<script> alert('You are not authorized to visit this page'); 
    location.href = '../index.php';</script>";
} elseif ($_SESSION['role'] == 'admin') {

    if (isset($_POST['add'])) {

        include "../includes/db_connection.php";
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $personalPh = $_POST["personalPh"];
        $email = $_POST["email"];
        $pswd = $_POST["pswd"];
    }

    $sql = "INSERT INTO userdetails(fname,lname,email,personalPh,parentPh,course,year,rollno,pswd,role,remarks,'status');
    values('$fname','$lname','$email','$personalPh','N.A','N.A','N.A','N.AS','$pswd','manager','N.A','active')";

    $result = mysqli_query($con, $sql);
    if ($result) {
        header("location:./managers.inc.php");
    } else {


        echo 'error';
    }
} else {

    echo "<script> alert('error'); 
    location.href = './managers.inc.php';</script>";
}