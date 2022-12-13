 <!-- Modal 2 -->
 <div class="modal fade" id="exampleModal1<?php echo $value["id"]?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title"  id="exampleModalLabel">Show Article</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
									<form action="../controller/RouterAjout.php?mode=edit"  enctype="multipart/form-data" method="post">
      <div class="modal-body">
      <div class="container">
      <div class="form-outline mb-4 ">
                <input type="hidden" id="nom-2" name="id" value='<?php echo $value['id']?>'  class="form-control form-control-lg" />
              </div>
          <div class="form-outline mb-4 ">
                <input type="text" id="nom-2" name="titre" value='<?php echo $value['titre']?>'  class="form-control form-control-lg" />
                <label class="form-label" for="titre">titre</label>
              </div>

              <div class="form-outline mb-4 ">
                <input type="text" id="nom-3" name="tag" value='<?php echo $value['tag']?>' class="form-control form-control-lg" />
                <label class="form-label" for="tag">tag</label>
              </div>

              <div class="form-outline mb-4 ">
                <input type="date" id="date" name="date" value='<?php echo $value['date']?>'  class="form-control form-control-lg" />
                <label class="form-label" for="date">date</label>
              </div>

              <div class="form-outline mb-4 ">
                <input type="file"  name="image"    />
				<span   name="image"> <img src="../images/addImage/<?php echo $value["image"]?>" width="80px"/></span>

              </div>

              <div class="form-outline mb-4 ">
                <input type="text"  name="desC" value='<?php echo $value['descriptionC']?>'  class="form-control form-control-lg" />
                <label class="form-label" for="desC">description Courte</label>
              </div>

              <div class=" mb-4 ">
                <textarea   name="desD"   class="form-control form-control-lg" >
			<?php echo $value['descriptionD']?> 
                </textarea>
                <label class="form-label" for="desD">description Détaillé</label>
              </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="input" class="btn btn-primary">Update</button>
      </div>
    </div>
</form>
    </div>
  </div>
</div>