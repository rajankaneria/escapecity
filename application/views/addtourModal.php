<!-- Modal Structure -->
<div id="addtourModal" class="modal">
  <div class="modal-content">

    <div class="container">
      <div class="row">
         <form class="col s12" enctype="multipart/form-data" id="addForm" method="post">
	      <div class="row">
	        <div class="input-field col s12">
	          <input placeholder="Enter your Name" name="name" id="name" type="text" class="validate">
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
			  <option>Select Tourtype</option>
			  <?php foreach ($touritem as $key => $touritemRow) { ?>
			  <option value="<?php echo $touritemRow["id"]; ?>"><?php echo $touritemRow["name"]; ?></option>
			  <?php  } ?>
			  </select>			
			</div>
		   </div>	

		   	 <div class="row">
		     <div class="input-field col s12">
			    <select name="region_id" id="region_id">
			    	<option>Select Region</option>
			     <?php foreach ($region_type as $key => $type) { ?>
			      <option value="<?php echo $type["id"]; ?>"><?php echo $type["name"]; ?></option>
			      <?php  } ?>
			    </select>			   
			  </div>
			  </div>

			<div class="row">
		        <div class="input-field col s12">
		          <input placeholder="Enter your Map Title" name="map_title" id="map_title" type="text" class="validate">
		          <label for="name">Map Title</label>
		        </div>
	      	</div> 

	         <div class="row">
	        <div class="input-field col s12">
	          <input placeholder="Enter your Map" name="map" id="map" type="text" class="validate">
	          <label for="name">Map</label>
	        </div>
	      </div> 

	         <div class="row">
	        <div class="input-field col s12">

	        	<label for="name" style="margin-top: -42px !important;">Home Banner</label>
	          <input  name="home_banner" id="home_banner" type="file" class="validate">	          
	        </div>
	      </div> 

			<div class="row">
	        <div class="input-field col s12">	          
	          <textarea class="validate" id="detail" name="detail" style="height: 15rem !important;"></textarea>
	          <label for="name" style="margin-top: -42px !important;">Details</label>
	        </div>
	      </div>     


		     
         </form>
       </div>
    </div>

    <div class="modal-footer">
    
      <a href="#!" id="addTourButton" class="waves-effect waves-green btn-flat">add</a>
    </div>
    </div>
  </div>