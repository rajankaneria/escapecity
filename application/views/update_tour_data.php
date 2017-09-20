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
			    <option <?php if($period_to=="January"){ echo "selected='selected'"; } ?> value="January">January</option>
			    <option <?php if($period_to=="February"){ echo "selected='selected'"; } ?> value="February">February</option>
			    <option <?php if($period_to=="March"){ echo "selected='selected'"; } ?> value="March">March</option>
			   <option <?php if($period_to=="April"){ echo "selected='selected'"; } ?> value="April">April</option>
			    <option <?php if($period_to=="May"){ echo "selected='selected'"; } ?> value="May">May</option>
			   <option <?php if($period_to=="June"){ echo "selected='selected'"; } ?> value="June">June</option>
			    <option <?php if($period_to=="July"){ echo "selected='selected'"; } ?> value="July">July</option>
			    <option <?php if($period_to=="August"){ echo "selected='selected'"; } ?> value="August">August</option>		  
			   <option <?php if($period_to=="September"){ echo "selected='selected'"; } ?> value="September">September</option>
			   <option <?php if($period_to=="October"){ echo "selected='selected'"; } ?> value="October">October</option>
			   <option <?php if($period_to=="November"){ echo "selected='selected'"; } ?> value="November">November</option>
			   <option <?php if($period_to=="December"){ echo "selected='selected'"; } ?> value="December">December</option>	  
			  </select>			
			</div>
			 <div class="input-field col s6">			  
			 <select name="period_from" id="period_from">
			  <option>Period To</option>			  
			    <option <?php if($period_from=="January"){ echo "selected='selected'"; } ?> value="January">January</option>
			    <option <?php if($period_from=="February"){ echo "selected='selected'"; } ?> value="February">February</option>
			    <option <?php if($period_from=="March"){ echo "selected='selected'"; } ?> value="March">March</option>
			   <option <?php if($period_from=="April"){ echo "selected='selected'"; } ?> value="April">April</option>
			    <option <?php if($period_from=="May"){ echo "selected='selected'"; } ?> value="May">May</option>
			   <option <?php if($period_from=="June"){ echo "selected='selected'"; } ?> value="June">June</option>
			    <option <?php if($period_from=="July"){ echo "selected='selected'"; } ?> value="July">July</option>
			    <option <?php if($period_from=="August"){ echo "selected='selected'"; } ?> value="August">August</option>		  
			   <option <?php if($period_from=="September"){ echo "selected='selected'"; } ?> value="September">September</option>
			   <option <?php if($period_from=="October"){ echo "selected='selected'"; } ?> value="October">October</option>
			   <option <?php if($period_from=="November"){ echo "selected='selected'"; } ?> value="November">November</option>
			   <option <?php if($period_from=="December"){ echo "selected='selected'"; } ?> value="December">December</option>	    
			  </select>			
			</div>
			</div>


			 <div class="row">
		        <div class="input-field col s12">

		        <label for="name" style="margin-top: -42px !important;">Home Banner</label>
		          <input  name="home_banner" id="home_banner" type="file" class="validate" >	       

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

