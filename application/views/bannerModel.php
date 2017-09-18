 <div id="addBannerModel" class="modal">
    <div class="modal-content">
      <div class="container">
      <div class="row">
         <form class="col s12" enctype="multipart/form-data" id="addbanner" method="post">
  	      <div class="row">
  	        <div class="input-field col s12">
  	          <input placeholder="enter your name" name="banner" id="name" type="file" class="validate">
  	          <label for="file">file</label>
  	        </div>
  	      </div>

	        <div class="input-field col s12">
           <select name="tour_name">
           <?php foreach ($typename as $key => $alltype) { ?>
           <option value="<?php echo $alltype['id']; ?>"><?php echo $alltype['name']; ?></option>
           <?php } ?>
		       </select>
            <label>Select Tour</label>
          </div>
         </form>
       </div>
    </div>
    </div>
    <div class="modal-footer">
      <a href="#!" id="addBannerBtn" class=" waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>