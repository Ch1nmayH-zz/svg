<?php
session_start();


if(isset($_SESSION["id"])){

    if($_SESSION["role"] == 'student'){

        echo "user page";
    }
    elseif ($_SESSION["role"] == 'admin'){

        header("location:../admin");

    }
}

else{

    echo "you need to log in";
}

?>

<html>

    <head>
        <title>HOSTEL</title>
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
        <?php include("../includes/header.php");?>

        <div class="ts-main-content">
            <?php include("../includes/sidebar.php");?>
            <div class="content-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">

                        </div>
                    </div>
                </div>
            </div>
        </div>



    </body>

</html>