<?php

if (isset($_POST['add'])) {

    include "../includes/db_connection.php";
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $personalPh = $_POST["perPh"];
    $email = $_POST["email"];
    $pswd = $_POST["password"];
}

$sql = "INSERT INTO userdetails(fname,lname,email,personalPh,parentPh,course,year,rollno,pswd,role,remarks)
    values('$fname','$lname','$email','$personalPh','N.A','N.A','N.A','N.AS','$pswd','manager','N.A')";

$result = mysqli_query($con, $sql);
if ($result) {
    header("location:./managers.inc.php");
} else {


    echo 'error';
}