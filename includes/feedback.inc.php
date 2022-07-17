<?php

session_start();
if (!isset($_SESSION['id'])) {


    echo "<script> 
    
    alert('You need to first log in to give the feedback'); 
    location.href = '../login.php';
    </script>";
} else {

    if (isset($_POST['feedbackSend'])) {





        include "./db_connection.php";
        $feedback = $_POST['feedback'];
        $id = $_SESSION['id'];

        $sql1 = "SELECT * FROM userdetails WHERE `id` = '$id'";

        if ($result1 = mysqli_query($con, $sql1)) {

            if (mysqli_num_rows($result1) > 0) {

                while ($row = mysqli_fetch_assoc($result1)) {

                    $name = $row['fname'] . " " . $row['lname'];
                }
            }
        } else {

            echo
            "<script> 
        alert('There was an error, please try again.');
        location.href = '../index.php';
        </script>";
        }

        $sql2 = "INSERT INTO feedback(`id`,`name`,`feedback`) VALUES('$id', '$name', '$feedback')";

        if ($result2 = mysqli_query($con, $sql2)) {

            echo
            "<script> 
        alert('Feedback Submitted');
        location.href = '../index.php';
        </script>";
        } else {

            echo
            "<script> 
        alert('There was an error, please try again.');
        location.href = '../index.php';
        </script>";
        }
    }
}