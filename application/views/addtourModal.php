<!-- Modal Structure -->
<div id="addtourModal" class="modal">
  <div class="modal-content">

    <div class="addTour-area">
      <div class="row"><center><h5>Add New Tour</h5></center>
         <form class="col s12" enctype="multipart/form-data" id="addForm" method="post">
	      <div class="row">
	        <div class="input-field col s12 m6">
	          <input placeholder="enter your name" name="name" id="name" type="text" class="validate">
	          <label for="name">Name</label>
	        </div>
	      
	       <!--<div class="row">
	        <div class="input-field col s12">
	          <input placeholder="select home banner" name="banner" id="banner" type="file" class="validate">
	          <label for="banner">home Banner</label>
	        </div>
	       </div>-->

	        <div class="input-field col s12 m6">
			<select name="type_id" id="type_id">
			 <option>Select Tour Type</option>
			  <?php foreach ($touritem as $key => $touritemRow) { ?>
			  <option value="<?php echo $touritemRow["t_id"]; ?>"><?php echo $touritemRow["tour_name"]; ?></option>
			  <?php  } ?>
			  </select>
			</div>

		    <div class="input-field col s12 m6">
			    <select name="region_id" id="region_id">
			    <option>Select Region</option>
			     <?php foreach ($region_type as $key => $type) { ?>
			      <option value="<?php echo $type["id"]; ?>"><?php echo $type["name"]; ?></option>
			      <?php  } ?>
			    </select>
			</div>
			
			<div class="input-field col s6 m6">			  
			 <select name="period_to" id="period_to">
			  <option>Period From</option>			  
			  <option value="January">January</option>
			  <option value="February">February</option>	
			  <option value="March">March</option>
			  <option value="April">April</option>
			  <option value="May">May</option>
			  <option value="June">June</option>
			  <option value="July">July</option>
			  <option value="August">August</option>
			  <option value="September">September</option>			  
			  <option value="October">October</option>
			  <option value="November">November</option>
			  <option value="December">December</option>			  
			  </select>			
			</div>
		  
	        <div class="input-field col s6 m6">			  
			  <select name="period_from" id="period_from">
			  <option>Period To</option>			  
			  <option value="January">January</option>
			  <option value="February">February</option>
			  <option value="March">March</option>
			  <option value="April">April</option>
			  <option value="May">May</option>
			  <option value="June">June</option>
			  <option value="July">July</option>
			  <option value="August">August</option>
			  <option value="September">September</option>			
			  <option value="October">October</option>
			  <option value="November">November</option>
			  <option value="December">December</option>			  
			  </select>			
			</div>
		    <div class="input-field col s12 m6">
		        <input placeholder="Enter your Location" name="location" id="location" type="text" class="validate">
		        <label for="location">Location</label>
		    </div>
	      	
	      	<div class="input-field col s12 m6">
	          <input placeholder="Enter your Height" name="height" id="height" type="text" class="validate">
	          <label for="Height">Height</label>
	        </div>
	      	
	      	<div class="input-field col s12 m6">			  
			  <select name="dificulty" id="dificulty">
			  <option>Select Dificulty</option>			  
			  <option value="Easy">Easy</option>
			  <option value="Medium">Medium</option>
			  <option value="Hard">Hard</option>			 	  
			  </select>			
			</div> 
	     
      		<div class="input-field col s12 m6">
	          <input placeholder="Enter your Duration" name="duration" id="duration" type="text" class="validate">
	          <label for="duration">Duration</label>
	        </div>
	      	
        	<div class="input-field col s12 m6">
          		<input placeholder="Enter your Map" name="map" id="map" type="text" class="validate">
          		<label for="name">Map</label>
        	</div>
	        

	        <div class="input-field col s12 m6">
	          <input  name="price" id="price" type="text" class="validate"  placeholder="Enter your Price">
	          <label for="price">Price</label>          
	        </div>
	     
	        <div class="input-field col s12 m6">
	          <input  name="home_banner" id="home_banner" type="file" class="validate" style="display: none;">	
	        <label for="name" style="margin-top: -42px !important;">Home Banner</label>
	        <a href="#" onclick="$('input#home_banner').click()" class="btn btn-upload">Upload Banner</a>
	        </div>
      		<div class="input-field col s12">
	          <textarea id="textarea1" class="validate materialize-textarea"  id="detail" name="detail">
	          </textarea>
	          <label for="details">Details</label>
	        </div>
	        <div class="input-field col s12 center">
	        	<a href="#!" id="addTourButton" class="waves-effect waves-green btn-flat btn-add">add</a>
	        </div>
	    	</div>
	     </form>

       </div>
    </div>
    </div>
  </div>