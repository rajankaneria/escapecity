<!-- Modal Structure -->
<div id="addtourModal" class="modal">
  <div class="modal-content">

    <div class="container">
      <div class="row"><center><h5>Add New Tour</h5></center>
         <form class="col s12" enctype="multipart/form-data" id="addForm" method="post">
	      <div class="row">
	        <div class="input-field col s12">
	          <input placeholder="enter your name" name="name" id="name" type="text" class="validate">
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
	        <div class="input-field col s12 m6">
			  
				<select name="type_id" id="type_id">
			  <?php foreach ($touritem as $key => $touritemRow) { ?>
			  <option value="<?php echo $touritemRow["id"]; ?>"><?php echo $touritemRow["name"]; ?></option>
			  <?php  } ?>
			  </select>
			
			</div>

		   </div>	

		   	 <div class="row">
		     <div class="input-field col s12">
			    <select name="region_id" id="region_id">

			     <?php foreach ($region_type as $key => $type) { ?>
			      <option value="<?php echo $type["id"]; ?>"><?php echo $type["name"]; ?></option>
			      <?php  } ?>
			    </select>
			   
			  </div>
			</div>


			<div class="row">
	        <div class="input-field col s6 m6">			  
			 <select name="period_to" id="period_to">
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
		  
	        <div class="input-field col s6 m6">			  
			  <select name="period_from" id="period_from">
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
		   </div>

			<div class="row" style="display: none;">
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
	          <input  name="price" id="price" type="text" class="validate"  placeholder="Enter your Price">
	          <label for="price">Price</label>          
	        </div>
	      </div>  

	        <div class="row">
	        <div class="input-field col s12">
	          <input  name="home_banner" id="home_banner" type="file" class="validate">	
	          <label for="name" style="margin-top: -42px !important;">Home Banner</label>
	        </div>
	      </div> 

			<div class="row">
				<div class="input-field col s12">
		          <textarea id="textarea1" class="validate materialize-textarea"  id="detail" name="detail">
		          </textarea>
		          <label for="details">Details</label>
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