<?php 
$con=mysqli_connect("localhost","root","","vertex");
$sql="select * from testimonial";
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
   <title>Vertex Technosys</title>
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
   <link rel="icon" href="images/favicon.png" type="image/gif" />
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
                        <li><i class="fa fa-globe" aria-hidden="true"></i> Language : <img src="images/fleg.png" alt="#" /></li>
                     </ul>
                     <form action="#">
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
   <!-- end header -->
   <!-- banner -->
   <section class="banner_main">
      <div class="container">
         <div class="row">
            <div class="col-md-7 col-lg-7">
               <div class="text-bg">
                  <h1>One Ambition.<br> Finding The Right Fit.</h1>
                  <span>for your Career</span>
                  <p>When it comes to IT staffing and recruitment, we truly understand what makes a CV tick. But we are not the only who will tell you we know our work. Here’s a few of our clients who are happy with our services.</p>
               </div>
            </div>
            <div class="col-md-5 col-lg-5">
               <div class="ban_img">
                  <figure><img src="https://idc.vertextechnosys.com/client/images/background/02.png" alt="#" /></figure>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- end banner -->
   <!-- about section -->
   <div id="about" class="about">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-12 col-lg-7">
               <div class="about_box">
                  <div class="titlepage">
                     <h2><strong class="yellow">Why Us </strong><br> It is a known fact that people we hardly know are the ones to improve our lives most dramatically.</h2>
                  </div>
<p>DC Technologies carries an international outlook when it comes to IT Staffing, Consulting and Business Process Services. With the launch of IDC Digital, our portfolio extends into Application and Digital services</p>                  
               </div>
            </div>
            <div class="col-md-12 col-lg-5">
               <div class="about_img">
                  <figure><img src="https://vertextechnosys.com/client/images/about/aboutinner.png" alt="#"/></figure>
               </div>
            </div>
         </div>
      </div>
   </div>
<br><br><br>
   <section class="banner_main">
      <div class="container">
         <div class="row">
            <div class="col-md-7 col-lg-7">
               <div class="text-bg">
                  <h1>
                     What do you get with us as your partner?</h1><br><br>
                  <span>You get more than just a helping hand in all the below-mentioned services.</span>
                  <br><br><br>
               </div>
            </div>
            <div class="col-md-5 col-lg-5">
               <div class="ban_img">
                  <figure><img src="https://idc.vertextechnosys.com/client/images/about/aboutimg1.png" alt="#" /></figure>
               </div>
            </div>
         </div>
      </div>
   </section>

   <!-- about section -->
   <!-- service section -->
   <div id="service" class="service">
      <div class="container">
         <div class="row">
            <div class="col-md-7">
               <div class="titlepage">
                  <h2><strong class="yellow">Services</strong><br>WE CAN HELP YOUR Skills GROW</h2>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-4 col-sm-6">
               <div id="ho_color" class="service_box">
                  <img src="images/service_icon1.png" alt="#" />
                  <h3>Looking for People ?</h3><br>
                  <p>With the right mix of technology and human, we help you to hire candidates from the lowest to the highest position who can contribute to your business goals and company ethos.</p>    
               </div>
            </div>
            <div class="col-md-4 col-sm-6">
               <div id="ho_color" class="service_box">
                  <img src="images/service_icon2.png" alt="#" />
                  <h3>Looking for Consultancy Services ?</h3>
                  <p>We get your organization where it needs to be through in-depth indusrty knowledge, technical expertise and best transformation approaches while upskilling your workforce.</p>
               </div>
            </div>
            <div class="col-md-4 col-sm-6">
               <div id="ho_color" class="service_box">
                  <img src="images/service_icon3.png" alt="#" />
                  <h3>Looking for Application Services ?</h3>
                  <p>We specialize in custom development, application support, maintenance and application managed services through modern technology stacks.</p>
               </div>
            </div>
            <div class="col-md-4 col-sm-6">
               <div id="ho_color" class="service_box">
                  <img src="images/service_icon4.png" alt="#" />
                  <h3>Looking for Work ?</h3>
                  <p>Whether it’s on-site or remote work, we help you extend your job search and find the next big opportunity across sectors and regions.</p>
               </div>
            </div>
            <div class="col-md-4 col-sm-6">
               <div id="ho_color" class="service_box">
                  <img src="images/service_icon5.png" alt="#" />
                  <h3>Looking for Digital Transformation and Business Agility ?</h3>
                  <p>Whether it’s Cloud, Agile, DevOps, SRE, or Big Data transformation, we help you build disruptive applications by leveraging cutting-edge digital technologies.</p>
               </div>
            </div>
            
         </div>
      </div>
   </div>
   </div>
   <!-- service section -->
   <!-- portfolio -->
   <div class="portfolio">
      <div class="container">
         <div class="row">
            <div class="col-md-12 ">
               <div class="titlepage">
                  <h2><strong class="yellow">Our Work</strong><br>Our Software company is a business of one or more experts that provides professional Work</h2>
                  <br><span>Websites</span>
               </div>
            </div>
         </div>
      </div>
      <div id="myCarousel" class="carousel slide portfolio_Carousel " data-ride="carousel">
         <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
         </ol>
         <div class="carousel-inner">
            <div class="carousel-item active">
               <div class="container">
                  <div class="carousel-caption ">
                     <div class="row">
                        <div class="col-md-3 col-sm-6">
                           <div class="portfolio_img">
                              <img src="https://vertextechnosys.com/client/images/portfolio/vishakatex.jpg" />
                              <div class="middle">
                                 <div class="text2"><h1 style="color:white ; font-weight: bolder;"><a href="https://vishakatex.in/">Vishaka Textiles</a></h1>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                           <div class="portfolio_img">
                              <img src="https://vertextechnosys.com/client/images/portfolio/whip1.JPG" alt="#" />
                              <div class="middle">
                                 <div class="text2"><h1 style="color:white ; font-weight: bolder;"><a href="http://whipsmartmi.com/">Whipsmart</a> </h1></div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                           <div class="portfolio_img">
                              <img src="https://vertextechnosys.com/client/images/portfolio/myrent.png" alt="#" />
                              <div class="middle">
                                 <div class="text2"><h1 style="color:white ; font-weight: bolder;"> <a href="https://myrentagreement.info/">Ramakant</a> </h1></div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                           <div class="portfolio_img">
                              <img src="https://vertextechnosys.com/client/images/portfolio/irji.png" alt="#" />
                              <div class="middle">
                                 <div class="text2"><h1 style="color:white ; font-weight: bolder;">IRJOI</h1></div>
                              </div>
                           </div>
                        </div>
                        
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end portfolio section -->
   
   
   <!-- testimonial -->
   <div id="client" class="testimonial">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage">
                  <h2><strong class="yellow">testimonial</strong><br>What is Syas our clients</h2>
               </div>
            </div>
         </div>
      </div>
      <div id="testimo" class="carousel slide testimonial_Carousel " data-ride="carousel">
         <ol class="carousel-indicators">
            <li data-target="#testimo" data-slide-to="0" class="active"></li>
            <li data-target="#testimo" data-slide-to="1"></li>
            <li data-target="#testimo" data-slide-to="2"></li>
         </ol>
         <div class="carousel-inner">
            <div class="carousel-item active">
               <div class="container">
                  <div class="carousel-caption ">
                     <div class="row">
                        <div class="col-md-6 offset-md-3">
                           <div class="test_box">
                           <?php while($rw=mysqli_fetch_row($rs))
                              {
                              ?>
                           <p><?php echo $rw[2];?></p>
                           <i><img src="../../Integrate/template/dist/<?php echo $rw[3];?>" alt="#" width="100" height="100"/></i><span><?php echo $rw[1];?></span> 
                           <?php 
                              }?>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div> 
         </div>
         <a class="carousel-control-prev" href="#testimo" role="button" data-slide="prev">
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
         </a>
         <a class="carousel-control-next" href="#testimo" role="button" data-slide="next">
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
         </a>
      </div>
            
    


   </div>
   <!-- end testimonial -->
   <!-- contact  section -->
   <div id="contact" class="contact ">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage">
                  <h2><strong class="yellow">Contact us</strong><br>Request a call back</h2>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-8 offset-md-2">
               <form id="post_form" class="contact_form" method="post">
                  <div class="row">
                     <div class="col-md-12 ">
                        <input class="contact_control" placeholder=" Name" type="type" name="Name">
                     </div>
                     <div class="col-md-12">
                        <input class="contact_control" placeholder="Email" type="type" name="Email">
                     </div>
                     <div class="col-md-12">
                        <input class="contact_control" placeholder="Company Name" type="type" name="Company">
                     </div>
                     <div class="col-md-12">
                        <input class="contact_control" placeholder="Contact Number " type="type" name="Mobile">
                     </div>
                     <div class="col-md-12">
                        <input class="contact_control" placeholder=" Message" type="type" name="Message">
                     </div>
                     <div class="col-md-12">
                        <input type="submit" name="submit" value="Submit" class="send_btn">
                     </div>
               </form>
            </div>
         </div>
      </div>
   </div>
   </div>
   <!-- end contact  section -->
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


<?php
$con=mysqli_connect("localhost","root","","vertex");
if(isset($_POST['submit']))
{
   $name=$_POST['Name'];
   $email=$_POST['Email'];
   $company=$_POST['Company'];
   $mobile=$_POST['Mobile'];
   $message=$_POST['Message'];
   $sql="insert into contactus(name,emailid,company,mobile_no,message) 
   values('$name','$email','$company','$mobile','$message')";
   if(mysqli_query($con,$sql))
   {
      echo "<script>alert('Thank you we will contact you soon')</script>";
      header('location:index.php');
   }
   else
   {
      echo mysqli_error($con);
   }
}
?>