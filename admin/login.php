<?php
session_start();

include("includes/db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="../assets/css2/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css2/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css2/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="../assets/css2/iofrm-theme4.css">
</head>
<body>
    <div class="form-body">
        <div class="website-logo">
            <a href="index.html">
                <div class="logo">
                    <img class="logo-size" src="../assets/img2/logo-light.svg" alt="">
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="../assets/img2/graphic1.svg" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Get more things done with Loggin platform.</h3>
                        <p>Access to the most powerfull tool in the entire design and web industry.</p>
                        <div class="page-links">
                            <a href="login4.html" class="active">Login</a>
                        </div>
                        <form action="login.php" method="post">
                            <input class="form-control" type="text" name="admin_email" placeholder="Username" required>
                            <input class="form-control" type="password" name="admin_pass" placeholder="Password" required>
                            <div class="form-button">
                                <button id="submit" name="admin_login" type="submit" class="ibtn">Login</button> <a href="forget4.html">Forget password?</a>
                            </div>
                        </form>
                        <!-- <div class="other-links">
                            <span>Or login with</span><a href="#">Facebook</a><a href="#">Google</a><a href="#">Linkedin</a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="assets/js2/jquery.min.js"></script>
<script src="assets/js2/popper.min.js"></script>
<script src="assets/js2/bootstrap.min.js"></script>
<script src="assets/js2/main.js"></script>
</body>
</html>

<?php
if(isset($_POST['admin_login'])){
    $admin_email = mysqli_real_escape_string($con,$_POST['admin_email']);
    
    $admin_pass = mysqli_real_escape_string($con,$_POST['admin_pass']);
    
    $get_admin = "select * from admins where admin_email='$admin_email' AND admin_pass='$admin_pass'  ";
    
    $run_admin = mysqli_query($con,$get_admin);

    $count = mysqli_num_rows($run_admin);

    if($count==1){
        $_SESSION['admin_email']=$admin_email;

        echo "<script>alert('You are logged in into admin panel')</script>" ;

        echo "<script>window.open('index.php?dashboard','_self')</script>";
    }else{
        echo "<script>alert('Email and Password match is wrong')</script>";
    }
}
?>
