<?php
session_start();
require("../model/class/ArticleModel.php");

$article=new ArticleModel ();


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
		  <a class="navbar-brand" href="../../index.html">
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
	<section class="page-title bg-13">
	  <div class="container">
		<div class="row">
		  <div class="col-md-12">
			<div class="block text-center">
			  
			  <h1 class="text-capitalize mb-4 text-lg"> Like </h1>
			  <ul class="list-inline">
				<li class="list-inline-item"><a href="index.html" class="text-white">panier Like</a></li>
				<li class="list-inline-item"><span class="text-white">/</span></li>
				<li class="list-inline-item"><a href="#" class="text-white-50"> </a></li>
			  </ul>
			</div>
		  </div>
		</div>
	  </div>
	</section>
	<!-- section sing in-->
    
        </div>
    </section>
<!-- Table like-->
<div class="container">
               <div class="page-cart">
                   <div class="table-responsive table-hover">
                       <table class="cart-summary table table-bordered">
                           <tr>
                               <th>Numéro</th>
                               <th>titre</th>
                               <th>tag</th>
                               <th>date</th>
                               <th>image</th>
                            

                       </tr>
                       <?php 
								//unset( $_SESSION['whislist']);
								if(isset( $_SESSION['whislist'])){

									$whereIn2="";
	
									foreach($_SESSION['whislist'] as $valuee)
									{
										$whereIn2.="'".$valuee."'".",";

									}
									$list=array();
									$whereIn2=substr($whereIn2, 1, -2);
									$res=$article->getDataById($whereIn2);
                                    $result=$res->fetchAll();
									foreach ($result as $v) {
										array_push($list,$v);
									}
		
								?>
								<tbody>
									<?php 

									foreach ($list as $key => $val) {
									
														
										?>
									<tr >

                                    <td>
                                        <?php echo $key ;?> <img src="https://media1.giphy.com/avatars/yevbel/WFkxSurRcMYO.gif" width="100px" height="100px" />
                                    </td>

										<td>
                                        <?php echo $val['titre'] ;?>
                                    </td>

                                    <td>
                                        <?php echo $val['tag'] ;?>
                                    </td>
										
                                    <td>
                                        <?php echo $val['date'] ;?>
                                    </td>
                                    <td>
                                       <img src=" ../images/addImage/<?php echo $val['image'] ;?>" width="100px" height="100px" />
                                    </td>

									</tr>
									<?php
										}
                                
									?>
								</tbody>
								<?php
										
                                    }
									?>
								<tfoot>
									
									
								</tfoot>
     
 
       </table>
       </div>
       </div>
       </div>
	<?php
  require("inc/footer.php");
  ?>
	
	 
	  </html>

	 
   