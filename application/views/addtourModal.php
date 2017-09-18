<!-- Modal Structure -->
<div id="addtourModal" class="modal">
  <div class="modal-content">

    <div class="container">
      <div class="row">
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
	        <div class="input-field col s12">
			  
				<select name="tourtype">
			  <?php foreach ($touritem as $key => $touritemRow) { ?>
			  <option value="<?php echo $touritemRow["name"]; ?>"><?php echo $touritemRow["name"]; ?></option>
			  <?php  } ?>
			  </select>
			
			</div>
		   </div>	

		   	 <div class="row">
		     <div class="input-field col s12">
			    <select name="regiontype">
			     <?php foreach ($region_type as $key => $type) { ?>
			      <option value="<?php echo $type["id"]; ?>"><?php echo $type["name"]; ?></option>
			      <?php  } ?>
			    </select>
			   
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