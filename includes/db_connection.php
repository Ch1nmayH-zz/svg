<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'svg';

$con = mysqli_connect($host, $user, $pass , $db);

if(!$con){

    die('connection to database failed'. mysqli_connect_error());
}

else{

    
  
    // echo "connected to database";   
}

?>