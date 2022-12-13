
<?php
session_start();
require_once('../model/class/ContactModel.php');
if (isset($_SESSION['email'])){
  $contact=new ContactModel();

$res=$contact->afficherContact();
$result=$res->fetchAll(PDO::FETCH_ASSOC);
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
			 <li class="nav-item"><a class="nav-link" href="gestionBlog.php">Gestion Blog </a></li>
			  <li class="nav-item"><a class="nav-link" href="#">Consulter Commentaire</a></li>
			  <li class="nav-item"><a class="nav-link" href="consulterReponse.php">Consulter Reponse</a></li>
			 
			  <li class="nav-item"><a class="nav-link" href="consulterContact.php">Consulter Contact</a></li>
			</ul>

			<form class="form-lg-inline my-2 my-md-0 ml-lg-4 text-center">
			  <a href="../controller/RouterDecon.php" class="btn btn-solid-border btn-round-full">Sing Out</a>
			</form>
		  </div>
		</div>
	</nav>
</header>

<!-- Header Close --> 

<div class="main-wrapper ">
	<section class="page-title bg-11">
	  <div class="container">
		<div class="row">
		  <div class="col-md-12">
			<div class="block text-center">
			  
			  <h1 class="text-capitalize mb-4 text-lg"> Consulter Contact </h1>
			  <ul class="list-inline">
				<li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
				<li class="list-inline-item"><span class="text-white">/</span></li>
				
			  </ul>
        
			</div>
		  </div>
		</div>
	  </div>
	</section>
    <div class="card col-sm-8 " style="margin-left:200px;margin-top:50px">
         
         <div class="container">
               <div class="page-cart">
                   <div class="table-responsive table-hover">
                       <table class="cart-summary table table-bordered">
                           <tr>
                               <th>Numéro</th>
                               <th>nom</th>
                               <th>adress</th>
                               <th>contact</th>
                       </tr>
                       <?php 
     
     foreach ($result as $key => $value) {
       
   ?>
           <tr>
               <td><?php echo $key ?></td>
               <td><?php echo $value['name'] ?></td>
               <td><?php echo $value['adress'] ?></td>
               <td><?php echo $value['contact'] ?></td>

     </tr>
           
           <?php
       }
       ?>
       </table>
       </div>
       </div>
       </div>
      
       
   </div>
</body>
  </html>



<?php

}
else{
    header("location:singin.php");
}
?>