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
			  
				<select name="type_id" id="type_id">
			  <?php foreach ($tourType as $key => $touritemRow) { ?>
			  <option <?php if($tourDetails['type_id'] == $touritemRow["id"]){ echo "selected='selected'"; } ?> value="<?php echo $touritemRow["id"]; ?>"><?php echo $touritemRow["name"]; ?></option>
			  <?php  } ?>
			  </select>
			
			</div>
		   </div>

		    <div class="row">
		     <div class="input-field col s12">
			    <select name="region_id" id="region_id">
			     <?php foreach ($regionType as $key => $type) { ?>
			      <option <?php if($tourDetails['region_id'] == $type["id"]){ echo "selected='selected'"; } ?> value="<?php echo $type["id"]; ?>"><?php echo $type["name"]; ?></option>
			      <?php  } ?>
			    </select>
			   
			  </div>
			  </div>
		   	<div class="row">
	        <div class="input-field col s6">			  
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
			 <div class="input-field col s6">			  
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


			 <div class="row">
		        <div class="input-field col s12">

		        <label for="name" style="margin-top: -42px !important;">Home Banner</label>
		          <input  name="home_banner" id="home_banner" type="file" class="validate">	       

		           <img src="<?php echo base_url() ?>html/images/<?php echo $tourDetails['home_banner']; ?>" width="150" height="150"/>           
		        </div>
	         </div> 
			<div class="row">
	        <div class="input-field col s12">
	          <input placeholder="Enter your Price" name="price" id="price" value="<?php echo $tourDetails['price']; ?>" type="text" class="validate">

	          <label for="name">Price</label>
	        </div>
	      </div> 
		   <input type="hidden" name="tourID" id="tourID" value="<?php echo $tourDetails["id"]; ?>" />	   
         </form>
       </div>
    </div>

