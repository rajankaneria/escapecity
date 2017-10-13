<div class="row">
    <form id="photosForm" method="post" enctype="multipart/form-data">
      <div class="row">        
        <div class="input-field col s12">
            <select name="tour_id" id="tour_id">
              <?php foreach ($allTour as $key => $allTourRow) { ?>
              <option <?php if($tour_id == $allTourRow["id"]){ echo "selected='selected'"; } ?> value="<?php echo $allTourRow["id"]; ?>"><?php echo $allTourRow["name"]; ?></option>
              <?php  } ?>
            </select>            
          <label for="title">Tour</label>
        </div>
      </div> 

      <div class="row">
        <div class="input-field col s12">
          <input  name="photos" id="photos" type="file" class="validate"> 
          <label for="photos" style="margin-top: -42px !important;">Photo</label>
        </div>
    </div> 
    <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
     
    </form>
  </div>