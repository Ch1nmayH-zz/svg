<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Colorlib Templates">
        <meta name="author" content="Colorlib">
        <meta name="keywords" content="Colorlib Templates">

        <title>Sign Up</title>

        <!-- Icons font CSS-->
        <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
        <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
        <!-- Font special for pages-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
            rel="stylesheet">

        <!-- Vendor CSS-->
        <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">

        <!-- Main CSS-->
        <link href="css/main.css" rel="stylesheet" media="all">
    </head>

    <body>
        <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
            <button class="back-btn"><a href="./index.php">Home</a></button>
            <div class="wrapper wrapper--w790">
                <div class="card card-5">
                    <div class="card-heading">
                        <h2 class="title">Registration Form</h2>
                    </div>
                    <div class="card-body">
                        <form action="./includes/register.inc.php" method="post">

                            <div class="form-row m-b-55">
                                <div class="name">Name</div>
                                <div class="value">
                                    <div class="row row-space">
                                        <div class="col-2">
                                            <div class="input-group-desc">
                                                <input class="input--style-5" type="text" name="fname" required>
                                                <label class="label--desc">first name</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="input-group-desc">
                                                <input class="input--style-5" type="text" name="lname" required>
                                                <label class="label--desc">last name</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="name">Email</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="email" name="email" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row m-b-55">
                                <div class="name">Personal Phone Number</div>
                                <div class="value">
                                    <div class="row row-refine">

                                        <div class="col-9">
                                            <div class="input-group-desc">
                                                <input class="input--style-5" type="text" name="perPh" required>
                                                <label class="label--desc">Phone Number</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row m-b-55">
                                <div class="name">Parent's Phone Number</div>
                                <div class="value">
                                    <div class="row row-refine">

                                        <div class="col-9">
                                            <div class="input-group-desc">
                                                <input class="input--style-5" type="text" name="parPh" required>
                                                <label class="label--desc">Phone Number</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name">Course</div>
                                <div class="value">
                                    <div class="input-group">
                                        <div class="rs-select2 js-select-simple select--no-search">
                                            <select name="course" required>
                                                <option disabled="disabled" selected="selected">Choose option</option>
                                                <option value="bca">BCA</option>
                                                <option value="bcom">BCOM</option>
                                                <option value="ba">BA</option>
                                                <option value="bba">BBA</option>
                                                <option value="bvoc">BVOC</option>
                                            </select>
                                            <div class="select-dropdown"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name">Year</div>
                                <div class="value">
                                    <div class="input-group">
                                        <div class="rs-select2 js-select-simple select--no-search">
                                            <select name="year" required>
                                                <option disabled="disabled" selected="selected">Choose option</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>

                                            </select>
                                            <div class="select-dropdown"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name">Roll No</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="number" name="rollno" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name">Password</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="password" name="password" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name">Confirm Password</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="password" name="cPassword" required>
                                    </div>
                                </div>
                            </div>




                            <div>
                                <button class="btn btn--radius-2 btn--green max-w" type="submit"
                                    name="sub">Register</button>
                            </div>
                        </form>
                        <div>
                            <h6 class="name te-xt pd-10">Already have an account?</h6>
                        </div>

                        <div>
                            <button class="btn btn--radius-2 btn--red te max-w" name="sub"><a
                                    href="login.php">Login</a></button>

                        </div>



                        <!--    
                            <?=
                                $error = $_GET['error'];

                            ?>

                            <h1><?=$error?></h1> 
                        
-->




                    </div>
                </div>
            </div>
        </div>

        <!-- Jquery JS-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <!-- Vendor JS-->
        <script src="vendor/select2/select2.min.js"></script>


        <!-- Main JS-->
        <script src="js/global.js"></script>

    </body>

</html>