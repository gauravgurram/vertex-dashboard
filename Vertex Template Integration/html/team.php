<?php 
$con=mysqli_connect("localhost","root","","vertex");
$sql="select * from portfolio";
$rs=mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Portfolio</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="header_to d_none">
               <div class="container">
                  <div class="row">
                     <div class="col-md-6 col-sm-6">
                        <ul class="lan">
                           <li><i class="fa fa-globe" aria-hidden="true"></i> Language : <img src="images/fleg.png" alt="#"/></li>
                        </ul>
                        <form action="#" >
                           <div class="select-box">
                              <label for="select-box1" class="label select-box1"><span class="label-desc">English</span> </label>
                              <select id="select-box1" class="select">
                                 <option value="Choice 1">English</option>
                                 <option value="Choice 1">Falkla</option>
                                 <option value="Choice 2">Germa</option>
                                 <option value="Choice 3">Neverl</option>
                              </select>
                           </div>
                        </form>
                     </div>
                     <div class="col-md-6 col-sm-6 ">
                        <ul class="social_icon1">
                           <li> F0llow Us
                           </li>
                           <li> <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i>
                              </a>
                           </li>
                           <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                           <li> <a href="#"> <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                           <li> <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i>
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="header_midil">
               <div class="container">
                  <div class="row d_flex">
                     <div class="col-md-4 col-sm-4 d_none">
                        <ul class="conta_icon">
                           <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i> Call Us : +91 9422781840</a> </li>
                        </ul>
                     </div>
                     <div class="col-md-4 col-sm-4 ">
                        <a class="logo" href="#"><img src="images/vertex-logo (1).png" alt="#" /></a>
                     </div>
                     <div class="col-md-4 col-sm-4 d_none">
                        <ul class="conta_icon ">
                           <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>info@vertextechnosys.com</a> </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="header_bo">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12 col-sm-7">
                        <nav class="navigation navbar navbar-expand-md navbar-dark ">
                           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                           </button>
                           <div class="collapse navbar-collapse" id="navbarsExample04">
                              <ul class="navbar-nav mr-auto">
                                 <li class="nav-item active">
                                    <a class="nav-link" href="index.php"> Home </a>
                                 </li>    
                                 <li class="nav-item">
                                    <a class="nav-link" href="about.php">About Us</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="service.php">Services</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="team.php">Portfolio</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="client.php">Career</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="index.php">Consulting Services</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="contact.php">Contact Us</a>
                                 </li>
                              </ul>
                           </div>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      
      <?php while($rw=mysqli_fetch_row($rs))
                              {
                              ?>
      <div id="about" class="about">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12 col-lg-5">
                  <div class="about_img">
                     <figure><img src="../../Integrate/template/dist/<?php echo $rw[2];?>" alt="#" style="width:50%; margin-left: 50%; margin-bottom: 15%;" /></figure>
                  </div>
               </div>
               <div class="col-md-12 col-lg-7">
                  <div class="about_box">
                     <div class="titlepage">
                        <font size="7" style="font-weight: bolder; color:blue"><?php echo $rw[1];?></font>
                     </div>
                     <p><?php echo $rw[3];?></p>
                     <a class="read_morea" href="#">Our Story<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <?php
   }?>





      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <a class="logo2" href="#"><img src="images/vertex-logo (1).png" width="20%" height="20%" align="left" alt="#" /></a>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6">
                     <h3>about Vertex</h3>
                     <p align="left" class="text-white">Vertex Technosys is a software based company, our experts serve a wide range of software development like web design, graphic design, web development, software development, mobile development, seo services, digital marketing, e-commerce solutions, custom application development, product development & web promotions services.</p>
                  </div>
                  <div class="col-lg-2 col-md-6 col-sm-6">
                     <h3>Quick Links</h3>
                     <ul class="link_icon">
                        <li>
                           <a href="about.php">
                              </i>About Us
                        </li>
                        <li> <a href="service.php"> </i>Services</a></li>
                        <li> <a href="team.php"></i>Portfolio</a></li>
                        <li> <a href="client.php"></i>Career</a></li>
                        <li> <a href="contact.php"></i>Contact us</a></li>
                     </ul>
                  </div>
                  <div class="col-lg-2 col-md-6 col-sm-6">
                     <h3>Our Services</h3>
                     <ul class="link_icon">
                        <li> <a href="#"> Web Development </a></li>
                        <li>
                           <a href="#">
                              Graphics Design
                        </li>
                        <li> <a href="#"> SEO </a></li>
                        <li> <a href="#"> Custome Application</a></li>
                        <li> <a href="#"> Mobile App</a></li>
                     </ul>
                  </div>
                  <div class="col-lg-3 col-md-5 col-sm-5">
                     <h3>Contact Us</h3>
                     <ul class="location_icon">
                        <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a> 9/4, Shri Markendaya Yantramag Dharak Society, Near New WIT College, Next to Upahar Bakery lane, Solapur - 413006.
                        </li>
                        <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>info@vertextechnosys.com/li>
                        <li><a href="#"><i class="fa fa-volume-control-phone" aria-hidden="true"></i></a>+91 9823140574</li>
                     </ul>
                     <ul class="social_icon">
                        <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                        <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li> <a href="#">   <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>© 2019 All Rights Reserved.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>
