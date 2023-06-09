<?php 
$con=mysqli_connect("localhost","root","","vertex");
$id=$_GET['id'];
$sql="select * from portfolio where id='$id';";
$rs=mysqli_query($con,$sql);
$rw=mysqli_fetch_row($rs);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Testimonial Details</title>
    
    <link rel="stylesheet" href="assets/css/main/app.css">
    <link rel="stylesheet" href="assets/css/main/app-dark.css">
    <link rel="icon" href="assets/images/logo/hel.png" type="image/gif" />

    
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
    <div class="sidebar-header position-relative">
        <div class="d-flex justify-content-between align-items-center">
            <div class="logo">
            <a href="index.php"><img src="assets/images/logo/hel.png" alt="Logo"></a> 
            </div>
            <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--system-uicons" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21"><g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2" opacity=".3"></path><g transform="translate(-210 -1)"><path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path><circle cx="220.5" cy="11.5" r="4"></circle><path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2"></path></g></g></svg>
                <div class="form-check form-switch fs-6">
                    <input class="form-check-input  me-0" type="checkbox" id="toggle-dark" >
                    <label class="form-check-label" ></label>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z"></path></svg>
            </div>
            <div class="sidebar-toggler  x">
                <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
        </div>
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
            <li class="sidebar-title">Menu</li>
            
            <li
            class="sidebar-item active ">
            <a href="Homepage.php" class='sidebar-link'>
                <i class="bi bi-arrow-down-up"></i>
                <span>Home</span>
            </a>
        </li>

            
            <li
                class="sidebar-item active ">
                <a href="form-layout.php" class='sidebar-link'>
                    <i class="bi bi-arrow-down-up"></i>
                    <span>Services</span>
                </a>
            </li>
            <li
                class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-person-badge-fill"></i>
                    <span>Log In</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="auth-login.html">Login</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="auth-register.php">Register</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="auth-forgot-password.html">Forgot Password</a>
                    </li>
                </ul>
            </li>

            <li
            class="sidebar-item  ">
            <a href="table.php" class='sidebar-link'>
                <i class="bi bi-person-rolodex"></i>
                <span>Contact Us</span>
            </a>
        </li>

        <li
        class="sidebar-item active ">
        <a href="application-checkout.php" class='sidebar-link'>
            <i class="bi bi-bar-chart-steps"></i>
            <span>Career</span>
        </a>
    </li>
    <li
    class="sidebar-item active ">
    <a href="application-gallery.php" class='sidebar-link'>
        <i class="bi bi-image-fill"></i>
        <span>About Us</span>
    </a>
</li>

<li
class="sidebar-item active ">
<a href="application-chat.php" class='sidebar-link'>
    <i class="bi bi-bar-chart-line"></i>
    <span>Portfolio</span>
</a>
</li>

<li
class="sidebar-item  ">
<a href="auth-login.php" class='sidebar-link'>
    <i class="bi bi-bar-chart-line"></i>
    <span>Log Out</span>
</a>
</li>
        </ul>
    </div>
</div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Update Testimonial Details</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Form Layout</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- // Basic multiple Column Form section start -->
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Multiple Column</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" method="post" enctype="multipart/form-data">
                                <div class="row">
                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="first-name-column">Title</label>
                                                        <input type="text" id="first-name-column" class="form-control"
                                                            placeholder="Title" name="title" value="<?php echo $rw[1]?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="last-name-column">Describe</label>
                                                        <input type="text" id="last-name-column" class="form-control"
                                                            placeholder="Describe" name="describe" value="<?php echo $rw[3]?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                        <div class="form-group"><br><br>
                                            <label for="city-column">Previous File : </label>&emsp;&emsp;&emsp;
                                            <input type="image" name="file" src="<?php echo $rw[2]?>" width="100">
                                        </div>
                                    </div>
            
                                    <div class="col-md-6 col-12">
                                        <div class="form-group"><br><br><br><br><br>
                                            <label for="country-floating">Choose New File : </label>
                                            &emsp;&emsp;
                                            <input type="file" name="file" value="<?php echo $rw[2]?>" required>
                                        </div>
                                    </div>
                                   
                                    <div class="col-12 d-flex justify-content-end">
                                        <input type="submit" name="submit" class="btn btn-primary me-1 mb-1">
                                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- // Basic multiple Column Form section end -->
</div>
            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2021 &copy; Mazer</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                href="https://saugi.me">Saugi</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/app.js"></script>
    
</body>

</html>
<?php
if(isset($_POST['submit']))
{
    $title=$_POST['title'];
    $post=$_POST['describe'];
    $filename=$_FILES['file']['name'];
    $filesize=$_FILES['file']['size'];
    $filetype=$_FILES['file']['type'];
    $filestore='images/'.$filename;
    $filetmpname=$_FILES['file']['tmp_name'];
    move_uploaded_file($filetmpname,$filestore);
    $sql="update portfolio set title='$title',description='$post',image='$filestore' where id='$id'";
    if(mysqli_query($con,$sql))
    {
                echo "<script>alert('Updated Sucessfully!!!');</script>";
    }
    else
    {
        echo "Not Updated";
    }
}
?>