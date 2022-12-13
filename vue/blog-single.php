<?php
session_start();
require("../model/class/ArticleModel.php");

$article=new ArticleModel ();
$id=$_GET['id'];
$res=$article->getDataAll();
$result=$res->fetchAll();

$id=$_GET['id'];
$res2=$article->getDataById($id);
$result2=$res2->fetchAll();
//latest
$res1=$article->Latest();
$result1=$res1->fetchAll();


?>
<!doctype html>
<html lang="en">
<?php
  require("inc/header.php");
  ?>
  <link rel="stylesheet" href="../css/styleRegister.css">
  
</head>

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
          <span class="text-white">News details</span>
          <h1 class="text-capitalize mb-4 text-lg">Blog Single</h1>
          <ul class="list-inline">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">News details</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>



<section class="section blog-wrap bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
	<div class="col-lg-12 mb-5">
		<div class="single-blog-item">
			<img src="images/blog/2.jpg" alt="" class="img-fluid rounded">

			<div class="blog-item-content bg-white p-5">
				
			<?php foreach ($result2 as $key => $value1) {
			# code...
		?>
				<h2 class="mt-3 mb-4">Titre: <a href="blog-single.html"><?php echo $value1['titre'];?></a></h2>
				<p class="lead mb-4">Description Détaillés: <?php echo $value1['descriptionD'];?></p>


				<h3 class="quote">Description courte: <?php echo $value1['descriptionC'];?></h3>
				<a href="#"><img class="mr-4"width="100px" height="100px" src="../images/addImage/<?php echo $value1['image'] ?>" alt=""/></a>
				

				<div class="tag-option mt-5 clearfix">
				    <ul class="float-left list-inline"> 
				    	<li>Tags: <?php echo $value1['tag'];?></li> 
				    	
				   	</ul>        

				    <ul class="float-right list-inline">
				        <li class="list-inline-item"> Share: </li>
				        <li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
				        <li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
				        <li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a></li>
				        <li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
				    </ul>
			    </div>
			</div>
		</div>
	</div>
<?php }?>

	
	

	<div class="col-lg-12">
		<form class="contact-form bg-white rounded p-5" id="comment-form">
			<h4 class="mb-4">Write a comment</h4>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<input class="form-control" type="text" name="name" id="name" placeholder="Name:">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<input class="form-control" type="text" name="mail" id="mail" placeholder="Email:">
					</div>
				</div>
			</div>


			<textarea class="form-control mb-3" name="comment" id="comment" cols="30" rows="5" placeholder="Comment"></textarea>

			<input class="btn btn-main btn-round-full" type="submit" name="submit-contact" id="submit_contact" value="Submit Message">
		</form>
	</div>
</div>
            </div>
            <div class="col-lg-4">
                <div class="sidebar-wrap">
	

	

	<div class="sidebar-widget latest-post card border-0 p-4 mb-3">
		

		<div class="sidebar-widget latest-post card border-0 p-4 mb-3">
			<h5>Latest Posts</h5>
			<?php foreach ($result1 as $key => $value1) {
			# code...
		?>
			

			
			<div class="media border-bottom py-3">
				<a href="#"><img class="mr-4"width="100px" height="100px" src="../images/addImage/<?php echo $value1['image'] ?>" alt=""/></a>
				<div class="media-body">
					<h6 class="my-2"><a href="#">Titre : <?php echo $value1['titre'] ?></a></h6>
					<span class="text-sm text-muted">Description Courte : <?php echo $value1['descriptionC'] ?></span>
				</div>
			</div>
		<?php } ?>
		</div>

     

    
	</div>

	<div class="sidebar-widget bg-white rounded tags p-4 mb-3">
			<h5 class="mb-4">Tags</h5>
			<?php foreach ($result as $key => $value) {
			# code...
		?>
			<a href="#"><?php echo $value['tag'] ?></a>

			<?php
			}?>
			
		</div>
</div>
            </div>   
        </div>
    </div>
</section>


<?php
  require("inc/footer.php");
  ?>

  </body>
  </html>