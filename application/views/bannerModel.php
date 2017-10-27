<div id="addBannerModel" class="modal">
    <div class="modal-content">
      <div class="addTour-area">
      <div class="row">
        <center><h5>Add New Banner</h5></center>
      </div>
        <form class="col s12" enctype="multipart/form-data" id="addbanner" method="post">
  	      <div class="row">
  	        <div class="input-field col s12 m6">
  	          <!-- <label for="file">file</label> -->
              <input placeholder="enter your name" name="banner" id="name" type="file" class="validate" style="display: none;">
              <a href="#" onclick="$('input#name').click()" class="btn btn-upload">Upload File</a>
  	          
  	        </div>
  	   
	        <div class="input-field col s12 m6">
           <select name="tour_name">
           <?php foreach ($typename as $key => $alltype) { ?>
           <option value="<?php echo $alltype['id']; ?>"><?php echo $alltype['name']; ?></option>
           <?php } ?>
		       </select>
            <label>Select Tour</label>
          </div>
          <div class="input-field col s12 m12 center">
            <a href="#!" id="addBannerBtn" class=" waves-effect waves-green btn-flat">Agree</a>
          </div>
        </div>
         </form>
       </div>
    </div>
</div>