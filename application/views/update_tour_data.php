<div class="container">
      <div class="row">
         <form class="col s12" enctype="multipart/form-data" id="updateform" method="post">
	      <div class="row">
	        <div class="input-field col s12">

	          <input placeholder="enter your name" name="name" id="name" value="<?php echo $tourDetails['name']; ?>" type="text" class="validate">

	          <label for="name">Name</label>
	        </div>
	      </div>  
       
	       <!--<div class="row">
	        <div class="input-field col s12">
	          <input placeholder="select home banner" name="banner" id="banner" type="file" class="validate">
	          <label for="banner">home Banner</label>
	        </div>
	       </div>-->

	       <div class="row">
	        <div class="input-field col s12">
			  
				<select name="tour-type">
			  <?php foreach ($tourType as $key => $touritemRow) { ?>
			  <option <?php if($tourDetails['type_id'] == $touritemRow["id"]){ echo "selected='selected'"; } ?> value="<?php echo $touritemRow["id"]; ?>"><?php echo $touritemRow["name"]; ?></option>
			  <?php  } ?>
			  </select>
			
			</div>
		   </div>

		    <div class="row">
		     <div class="input-field col s12">
			    <select name="regiontype">
			     <?php foreach ($regionType as $key => $type) { ?>
			      <option value="<?php echo $type["id"]; ?>"><?php echo $type["name"]; ?></option>
			      <?php  } ?>
			    </select>
			   
			  </div>
			  </div>
		   <input type="hidden" name="tourID" id="tourID" value="<?php echo $tourDetails["id"]; ?>" />	   
         </form>
       </div>
    </div>

