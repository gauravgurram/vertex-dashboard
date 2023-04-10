<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="assets/css/main/app.css">
    <link rel="stylesheet" href="assets/css/pages/auth.css">
    <link rel="icon" href="assets/images/logo/hel.png" type="image/gif" />

</head>

<body>
    <div id="auth">
        
<div class="row h-100">
    <div class="col-lg-5 col-12">
        <div id="auth-left">
        <a href="index.php"><img src="assets/images/logo/vertex-logo.png" alt="Logo" width="200" height="100"></a>

            <h1 class="auth-title">Sign Up</h1>
            <p class="auth-subtitle mb-5">Input your data to register to our website.</p>

            <form method="POST">
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="text" class="form-control form-control-xl" placeholder="Email" name="email" required>
                    <div class="form-control-icon">
                        <i class="bi bi-envelope"></i>
                    </div>
                </div>
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="text" class="form-control form-control-xl" placeholder="Username" name="username" required>
                    <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                    </div>
                </div>
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="password" class="form-control form-control-xl" placeholder="Password" name="password1" required>
                    <div class="form-control-icon">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                </div>
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="password" class="form-control form-control-xl" placeholder="Confirm Password" name="password2" required>
                    <div class="form-control-icon">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                </div>
                <input type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5" name="submit" value="Signup">
            </form>
            <div class="text-center mt-5 text-lg fs-4">
                <p class='text-gray-600'>Already have an account? <a href="auth-login.php" class="font-bold">Log
                        in</a>.</p>
            </div>
        </div>
    </div>
    <div class="col-lg-7 d-none d-lg-block">
        <div id="auth-right">

        </div>
    </div>
</div>
    </div>
</body>

</html>
<?php 
$con=mysqli_connect("localhost","root","","vertex");
if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password1=$_POST['password1'];
    $password2=$_POST['password2'];
    if(filter_var($email, FILTER_VALIDATE_EMAIL))
    {
    $sql="insert into register(email,username,password1,password2) values('$email','$username','$password1','$password2')";
    if(mysqli_query($con,$sql))
    {
        header('location:index.php');
    }
    }
    else
    {
        echo "<script>alert('Enter valid email id')</script>";
    }
}
?>