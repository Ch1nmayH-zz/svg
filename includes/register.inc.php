<?php

if(isset($_POST['sub'])){

    include "db_connection.php";
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $year = $_POST["year"];
    $course = $_POST["course"];
    $rollno = $_POST["rollno"];
    $personalPh = $_POST["perPh"];
    $parentPh = $_POST["parPh"];
    $email = $_POST["email"];
    $pswd = $_POST["password"];
    $cpswd = $_POST["cPassword"];
    
    // $role = 'student';
    // $remarks = 'N.A';



}







if($personalPh == $parentPh){
    echo "<script> alert('parents number and personal number cannot be the same') </script>";
    exit();
     // header("location: ../register.php?error=personal number and parent''s number cannot be same");
    // exit();
   
}

if(empty($course)){
    
    header("location: ../register.php?error=ENTER THE COURSE");
    exit();
}
if(empty($year)){
    
    header("location: ../register.php?error=ENTER THE YEAR");
    exit();
}

if($pswd != $cpswd){
    
    header("location: ../register.php?error=PASSWORDS DO NOT MATCH");
    exit();

}

else{
    $sql = "INSERT INTO userdetails(fname,lname,email,personalPh,parentPh,course,year,rollno,pswd,role,remarks,status) values('$fname','$lname','$email','$personalPh','$parentPh','$course','$year','$rollno','$pswd','student','N.A','Pending')";

    $result = mysqli_query($con, $sql);
    if($result){
        header("location: ../index.php");
    }
    
    else{
    
    
        echo 'error';
    }

}


    




?>