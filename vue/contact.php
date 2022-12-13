<!doctype html>
<html lang="en">
<?php
  require("inc/header.php");
  ?>

<link rel="stylesheet" href="../css/style.css">

</head>
<body>

<!-- Header Start --> 

<header class="navigation">
	<div class="header-top ">
		<div class="container">
			<div class="row justify-content-between align-items-center">
				<div class="col-lg-2 col-md-4">
					<div class="header-top-socials text-center text-lg-left text-md-left">
						<a href="https://www.facebook.com/themefisher" target="_blank"><i class="ti-facebook"></i></a>
						<a href="https://twitter.com/themefisher" target="_blank"><i class="ti-twitter"></i></a>
						<a href="https://github.com/themefisher/" target="_blank"><i class="ti-github"></i></a>
					</div>
				</div>
				<div class="col-lg-10 col-md-8 text-center text-lg-right text-md-right">
					<div class="header-top-info">
						<a href="tel:+23-345-67890">Call Us : <span>+23-345-67890</span></a>
						<a href="mailto:support@gmail.com" ><i class="fa fa-envelope mr-2"></i><span>support@gmail.com</span></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg  py-4" id="navbar">
		<div class="container">
		  <a class="navbar-brand" href="index.php">
		  	Mega<span>kit.</span>
		  </a>

		  <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
			<span class="fa fa-bars"></span>
		  </button>
	  
      <div class="collapse navbar-collapse text-center" id="navbarsExample09">
			<ul class="navbar-nav ml-auto">
			 <li class="nav-item"><a class="nav-link" href="../../index.php">Blog </a></li>
			  <li class="nav-item"><a class="nav-link" href="service.php">About</a></li>
			  <li class="nav-item"><a class="nav-link" href="like.php">Like</a></li>
			  <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blogger</a>
					<ul class="dropdown-menu" aria-labelledby="dropdown03">
						<li><a class="dropdown-item" href="singin.php">sing in</a></li>
						<li><a class="dropdown-item" href="register.php">register</a></li>
					</ul>
			  </li>   
			  <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
			</ul>

			
		  </div>
		</div>
	</nav>
</header>

<!-- Header Close --> 

<div class="main-wrapper ">
<section class="page-title bg-12">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Contact Us</span>
          <h1 class="text-capitalize mb-4 text-lg">Get in Touch</h1>
          <ul class="list-inline">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">Contact Us</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- contact form start -->
<section class="contact-form-wrap section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12">
                 <form  method="post" action="../controller/RouterContact.php">
                 <!-- form message -->
                    <div class="row">
                        <div class="col-12">
                            <?php 
                                if(isset($_SESSION['messageContact'])){
                            ?>
                            <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                        <?php echo $_SESSION['messageContact'];?>
                            </div>

                            <?php
                                }
                            ?>
                        </div>
                    </div>
                    <!-- end message -->
                    <span class="text-color">Send a message</span>
                    <h3 class="text-md mb-4">Contact Form</h3>
                    <div class="form-group">
                        <input name="name" type="text" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <input name="email" type="email" class="form-control" placeholder="Email Address">
                    </div>
                    <div class="form-group-2 mb-4">
                        <textarea name="message" class="form-control" rows="4" placeholder="Your Message"></textarea>
                    </div>
                    <button class="btn btn-main" name="submit" type="submit">Send Message</button>
                </form>
            </div>

            <div class="col-lg-5 col-sm-12">
                <div class="contact-content pl-lg-5 mt-5 mt-lg-0">
                    <span class="text-muted">We are Professionals</span>
                    <h2 class="mb-5 mt-2">Don’t Hesitate to contact with us for any kind of information</h2>

                    <ul class="address-block list-unstyled">
                        <li>
                            <i class="ti-direction mr-3"></i>North Main Street,Brooklyn Australia
                        </li>
                        <li>
                            <i class="ti-email mr-3"></i>Email: contact@mail.com
                        </li>
                        <li>
                            <i class="ti-mobile mr-3"></i>Phone:+88 01672 506 744
                        </li>
                    </ul>

                    <ul class="social-icons list-inline mt-5">
                        <li class="list-inline-item">
                            <a href="http://www.themefisher.com"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="http://www.themefisher.com"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="http://www.themefisher.com"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="google-map">
    <div id="map"></div>
</div>
<?php
  require("inc/footer.php");
  ?>


  </html>