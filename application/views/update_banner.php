<div class="container">
<div class="row">
         <form class="col s12" enctype="multipart/form-data" id="updateForm" method="post">
	      <div class="row">
	        <div class="input-field col s12">
	          <input placeholder="enter your name" name="banner" id="banner" type="file" value="<?php echo $bannerDetail['banner']; ?>" class="validate">
	          <img src="<?php echo base_url() ?>html/images/<?php echo $bannerDetail['banner']; ?>" width="150" height="150"/>
	          <label for="file">file</label>
	        </div>
	      </div>
	       <div class="input-field col s12">
           <select name="tour_id">
		    <?php foreach ($typename as $key => $alltype) { ?>
		      <option value="<?php echo $alltype['id']; ?>"><?php echo $alltype['name']; ?></option>
           <?php } ?>
		   </select>
           <label>Materialize Select</label>
           </div>

           	 <input type="hidden" name="bannerID" id="bannerID" value="<?php echo $bannerDetail['id']; ?>" />	
         </form>
       </div>
       </div>