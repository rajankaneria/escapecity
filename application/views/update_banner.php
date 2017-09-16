<div class="container">
<div class="row">
         <form class="col s12" enctype="multipart/form-data" id="updateForm" method="post">
	      <div class="row">
	        <div class="input-field col s12">
	          <input placeholder="enter your name" name="banner" id="banner" type="file" class="validate">
	          <label for="file">file</label>
	          <img src="<?php echo base_url(); ?>html/images/tours/<?php echo $bannerDetail['banner']; ?>" />
	        </div>
	      </div>
	       <div class="input-field col s12">
           <select name="tour_id" id="tour_id">
		    <?php foreach ($typename as $key => $alltype) { ?>
		      <option value="<?php echo $alltype['id']; ?>"><?php echo $alltype['name']; ?></option>
           <?php } ?>
		   </select>
           <label>Materialize Select</label>
           </div>

		   <input type="hidden" name="bannerID" id="bannerID" value="<?php echo $bannerDetail["id"]; ?>" />	

           	 
         </form>
       </div>
       </div>