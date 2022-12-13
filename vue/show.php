 <!-- Modal 2 -->
 <div class="modal fade" id="exampleModal2<?php echo $value["id"]?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title"  id="exampleModalLabel">Show Article</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
									<form action="#" method="post">
      <div class="modal-body">
      <div class="container">
      
          <div class="form-outline mb-4 ">
                <label class="form-label" for="titre">titre</label>
                <input type="text" id="nom-2" name="titre" readonly value="<?php echo $value['titre']?>"  class="form-control form-control-lg" />
              </div>

              <div class="form-outline mb-4 ">
                <input type="text" id="nom-3" name="tag" readonly value="<?php echo $value['tag']?>" class="form-control form-control-lg" />
                <label class="form-label" for="tag">tag</label>
              </div>

              <div class="form-outline mb-4 ">
              <label class="form-label" for="date">date</label>
              <input type="date" id="date" name="date" readonly  value="<?php echo $value['date']?>" class="form-control form-control-lg" />
              </div>

              <div class="form-outline mb-4 ">
              <label class="form-label" for="image">image</label>
              <img width="80px" height="80px" src="<?php if (!empty($value["image"])){ echo "../images/addImage/".$value['image'];} else{echo "../images/404-left.png";} ?>"/>
              </div>

              <div class="form-outline mb-4 ">
                <label class="form-label" for="desC">description Courte</label>
                <input type="text"  name="desC" value="<?php echo $value['descriptionC']?>"  readonly class="form-control form-control-lg" />
              </div>

              <div class="form-outline mb-4 ">
              <label class="form-label" for="desD">description Détaillé</label>
                <textarea type="text"  name="desD"   readonly class="form-control form-control-lg" >
                <?php echo $value['descriptionC']?>
                </textarea>
              </div>
              
              <div class="form-outline mb-4 ">
              <label class="form-label" for="blog">Blogeur</label>

                <input type="texte" type="text"  name="blog" value="<?php echo $value['nom']?>"  readonly class="form-control form-control-lg" >
              </div>

      </div>
      
    </div>
</form>
								
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									</div>
									</div>
								</div>
								</div>