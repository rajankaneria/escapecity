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
			  
				<select name="tourtype" id="tourtype">
			  <?php foreach ($tourType as $key => $touritemRow) { ?>
			  <option <?php if($tourDetails['type_id'] == $touritemRow["id"]){ 	echo "selected='selected'"; } ?> value="<?php echo $touritemRow["id"]; ?>"><?php echo $touritemRow["name"]; ?></option>
			  <?php  } ?>
			  </select>
			
			</div>
		   </div>

		    <div class="row">
		     <div class="input-field col s12">
			    <select name="region_id" id="region_id">
			     <?php foreach ($regionType as $key => $type) { ?>
			      <option value="<?php echo $type["id"]; ?>"><?php echo $type["name"]; ?></option>
			      <?php  } ?>
			    </select>
			   
			  </div>
			  </div>

			  <div class="row">
		        <div class="input-field col s12">
		          <input placeholder="Enter your Map Title" name="map_title" id="map_title" type="text" class="validate" value="<?php echo $tourDetails['map_title']; ?>">
		          <label for="name">Map Title</label>
		        </div>
	      	</div> 

	         <div class="row">
	        <div class="input-field col s12">
	          <input placeholder="Enter your Map" name="map" id="map" type="text" class="validate" value="<?php echo $tourDetails['map']; ?>">
	          <label for="name">Map</label>
	        </div>
	      </div> 

	         <div class="row">
	        <div class="input-field col s12">
	        <label for="name" style="margin-top: -42px !important;">Home Banner</label>
	          <input  name="home_banner" id="home_banner" type="file" class="validate">	
	          <img src="<?php echo base_url(); ?>html/images/tours/<?php echo $tourDetails['home_banner'];  ?>" style="width: 200px;height: 200px;" />          
	        </div>
	      </div> 

			<div class="row">
	        <div class="input-field col s12">	          
	          <textarea class="validate" id="detail" name="detail" style="height: 15rem !important;"><?php echo $tourDetails['detail']; ?></textarea>
	          <label for="name" style="margin-top: -42px !important;">Details</label>
	        </div>
	      </div>     

		   <input type="hidden" name="tourID" id="tourID" value="<?php echo $tourDetails["id"]; ?>" />	   
         </form>
       </div>
    </div>

