<?php

if(isset($_POST['log'])){

    session_start();
    include 'db_connection.php';
    $email = $_POST['email'];
    $password = $_POST['password'];

}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM userdetails WHERE email = '$email' and pswd = '$password'";



if($result = mysqli_query($con,$sql)){

    // if($result->num_rows>0){

        if(mysqli_num_rows($result) > 0){

        // echo "<script> alert('Logged in') </script>";

        // $row = mysqli_fetch_assoc($result);

        
      
    
        while ($row = mysqli_fetch_assoc($result)) {

          $_SESSION["id"] = $row["id"];
           $_SESSION["role"] = $row["role"]; 

           if($_SESSION["role"] == 'student'){

               header("location:../");
            //    header("location:../user");
           }

           if($_SESSION["role"] == 'admin'){
            
               header("location:../admin/");
        }
           if($_SESSION["role"] == 'manager'){
            
               header("location:../manager/");
        }
        


        }
    
           
        
    }

    else{


        echo "<script> alert('incorrect email and password');
            location.href = '../login.php';
        </script>";
        // header("location: ../login.php");
        // exit();
    }
}

else{

    echo "error";
}

?>