<?php
session_start();
include('includes/dbconnection.php');

if (isset($_POST['signup'])) {
    $adminname = $_POST['adminname'];
    $mobile = $_POST['mobile'];
    $adminuser = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    // Check if the username or email already exists
    $query = mysqli_query($con, "SELECT * FROM tbladmin WHERE UserName='$adminuser' OR Email='$email'");
    $ret = mysqli_fetch_array($query);

    if ($ret > 0) {
        $msg = "Username or Email already exists.";
    } else {
        // Insert data into the database
        $query = mysqli_query($con, "INSERT INTO tbladmin (AdminName, MobileNumber, UserName, Email, Password) 
                                    VALUES ('$adminname', '$mobile', '$adminuser', '$email', '$password')");
        if ($query) {
            $msg = "Signup successful. Redirecting to login...";
            header("refresh:3;url=index.php"); // Redirect to dashboard after 3 seconds
        } else {
            $msg = "Something went wrong. Please try again.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Signup Page">
    <meta name="author" content="AVMS">
    <meta name="keywords" content="signup, avms">
    <title>AVMS Signup</title>

    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link href="css/theme.css" rel="stylesheet" media="all">
</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="index.php" style="font-size:24px;">
                                Apartment Visitor Management System (AVMS)
                            </a>
                        </div>
                        <p style="font-size:16px; color:red" align="center">
                            <?php if ($msg) { echo $msg; } ?>
                        </p>
                        <div class="login-form">
                            <form action="" method="post" name="signup">
                                <div class="form-group">
                                    <label>Admin Name</label>
                                    <input class="au-input au-input--full" type="text" name="adminname" placeholder="Full Name" required="true">
                                </div>
                                <div class="form-group">
                                    <label>Mobile Number</label>
                                    <input class="au-input au-input--full" type="text" name="mobile" placeholder="Mobile Number" required="true" pattern="[0-9]{10}">
                                </div>
                                <div class="form-group">
                                    <label>User Name</label>
                                    <input class="au-input au-input--full" type="text" name="username" placeholder="User Name" required="true">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email" required="true">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password" required="true">
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit" name="signup">Sign Up</button>
                                <div class="login-checkbox">
                                    <label>
                                        Already have an account? <a href="index.php">Login here</a>.
                                    </label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="vendor/jquery-3.2.1.min.js"></script>
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <script src="vendor/slick/slick.min.js"></script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js"></script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
