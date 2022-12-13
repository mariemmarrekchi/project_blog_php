<?php
    session_start();
    require_once('../model/class/ArticleModel.php');
    $article=new ArticleModel();

    global $produit;
    if(isset($_GET['produit']))	{
	$produit=$_GET['produit'];
	$res=$article->getDataByTag($produit);
    $result=$res->fetchAll();

}		
		
						?>

		<?php foreach ($result as $key => $value) {
			# code...
		?>
		<div class="col-lg-6 col-md-6 mb-5">
			<div class="blog-item">
				<img src="Project/images/addImage/<?php echo $value['image'] ?>" alt="" class="img-fluid rounded">
	
				<div class="blog-item-content bg-white p-4">
					<div class="blog-item-meta  py-1 px-2">
						<span class="text-muted text-capitalize mr-3"><a href="Project/controller/ControllerLike.php?name=<?php echo $value['titre']  ?>&id=<?php echo $value['id']?>"><img src="https://media1.giphy.com/avatars/yevbel/WFkxSurRcMYO.gif" width="100px" height="100px" /></a><?php echo $value['tag'] ?></span>
					</div> 
	
					<h3 class="mt-3 mb-3">Description Courte : <a href="vue/blog-single.php"><?php echo $value['titre'] ?></a></h3>
					<p class="mb-4"><?php echo $value['descriptionC'] ?></p>
	
					<a href="Project/vue/blog-single.php?id=<?php echo $value['id'] ?>" class="btn btn-small btn-main btn-round-full">voir détail plus</a>
				</div>
			</div>
		</div>
	<?php }?>
		
