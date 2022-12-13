<?php
if(empty($_SESSION['email']) && empty($_SESSION['motpass']) || empty($_SESSION['email']) && empty($_SESSION['code']) ){
?>
<!doctype html>
<html lang="en">
  <?php
  require("inc/header.php");
  ?>
<link rel="stylesheet" href="../css/styleSing.css">

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
		  <a class="navbar-brand" href="index.html">
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
	<section class="page-title bg-1">
	  <div class="container">
		<div class="row">
		  <div class="col-md-12">
			<div class="block text-center">
			  
			  <h1 class="text-capitalize mb-4 text-lg"> Sing In</h1>
			  <ul class="list-inline">
				<li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
				<li class="list-inline-item"><span class="text-white">/</span></li>
				<li class="list-inline-item"><a href="#" class="text-white-50">Sing In</a></li>
			  </ul>
			</div>
		  </div>
		</div>
	  </div>
	</section>
	<!-- section sing in-->
    <section class="section blog-wrap bg-gray">
		<div class="container">
        <section class="vh-50" style="background-color: #3d6676;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-5">Sign in <?php if(isset($messageExsite)) { echo "<span class='btn btn-danger'>$messageExsite</span>"; }?> </h3>
			<?php if(isset($message)){ echo "<p class='btn btn-danger'> $message </p>"; }?>
            <form  action="../controller/Authentification.php" method="post">
			<div class="form-outline mb-4">
              <input type="email" id="typeEmailX-2" name="email" class="form-control form-control-lg" />
              <label class="form-label" for="email">Email</label>
            </div>

            <div class="form-outline mb-4">
              <input type="number"   name="code" id="code" class="form-control form-control-lg" />
              <label class="form-label" for="code">Code</label>
            </div>
            <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
			</form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
        </div>
    </section>

	
	<?php
  require("inc/footer.php");
  ?>
	
	 
	  </html>

	  <?php
		}
		else{
			header('location:compte.php');
		}
	?>
   