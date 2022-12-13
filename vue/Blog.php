<?php
session_start();
require('C:/xampp/htdocs/megakit-2/Project/model/class/ArticleModel.php');
if (isset($_SESSION['email'])){
  $article=new ArticleModel();

 $res=$article->getData($_SESSION['code']);
 $result=$res->fetchAll(PDO::FETCH_ASSOC);
 foreach ($result as $key => $value) {
  echo $value['id'];
 }

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
         <!-- Button trigger modal -->
<button type="button" class="btn btn-success col-sm-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Ajouter Article 
</button>
<br/>


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Article Add</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="../controller/ControllerArticle.php" enctype="multipart/form-data" method="post">
      <div class="modal-body">
      <div class="container">
      
          <div class="form-outline mb-4 ">
                <input type="text" id="nom-2" name="titre" required  class="form-control form-control-lg" />
                <label class="form-label" for="titre">titre</label>
              </div>

              <div class="form-outline mb-4 ">
                <input type="text" id="nom-3" name="tag" required class="form-control form-control-lg" />
                <label class="form-label" for="tag">tag</label>
              </div>

              <div class="form-outline mb-4 ">
                <input type="date" id="date" name="date" required  class="form-control form-control-lg" />
                <label class="form-label" for="date">date</label>
              </div>

              <div class="form-group">
										
										<label for="exampleInputImage">Image</label>
										
										<input type="file"   name="image" id="exampleInputImage"  accept="image/*"  >
									
										
									</div>

              <div class="form-outline mb-4 ">
                <input type="text"  name="desC"  required class="form-control form-control-lg" />
                <label class="form-label" for="desC">description Courte</label>
              </div>

              <div class="form-outline mb-4 ">
                <textarea   name="desD" required  class="form-control form-control-lg" >
                </textarea>
                <label class="form-label" for="desD">description Détaillé</label>
              </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">ADD</button>
      </div>
    </div>
</form>
    </div>
  </div>
</div>

<!--Modal finished-->
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
                               <th>description Court</th>
                               <th>description Détail</th>
                               <th>Blogeur</th>

                       </tr>
                       <?php 
     
     foreach ($result as $key => $value) {
       
   ?>
           <tr>
               <td><?php echo $key ?></td>
               <td><?php echo $value['titre'] ?></td>
               <td><?php echo $value['tag'] ?></td>
               <td><?php echo $value['date'] ?></td>
                
               <td> <img width="80px" height="80px" src="<?php if (!empty($value["image"])){ echo "../images/addImage/".$value['image'];} else{echo "../images/404-left.png";} ?>"/></td>

               <td><?php echo $value['descriptionC'] ?></td>
               <td><?php echo $value['descriptionD'] ?></td>
               <td><?php echo $value['nom'] ?></td>
              <td>
               <a href="#exampleModal2:id=?<?php echo $value['id']?>"><img data-toggle="modal" data-target="#exampleModal2<?php echo $value['id']; ?>" width="50px" height="50px" alt="show" src="../images/show.png"/> </a>
								<?php
										require( 'show.php');			
									?>
                  </td>
                  <td>
               <a href="#exampleModal1:id=?<?php echo $value['id']?>"><img data-toggle="modal" data-target="#exampleModal1<?php echo $value['id']; ?>" width="50px" height="50px" alt="show" src="../images/edit.jpg"/> </a>
								<?php
										require 'updateproduit.php';			
									?>
                  </td>
                  <td>
               <a href="../controller/RouterAjout.php?id=<?php echo $value['id']?>&mode=delete"><img  width="50px" height="50px" alt="show" src="../images/delete.jpg"/> </a>
								
                  </td>

     </tr>
           
           <?php
       }
       ?>
       </table>
       </div>
       </div>
       </div>
      
       
   </div>
   <?php
  require("inc/footer.php");
  
  ?>
</body>
  </html>



<?php

}
else{
    header("location:singin.php");
}
?>