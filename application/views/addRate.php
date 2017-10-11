<div class="row">
    <form id="addForm" method="post" enctype="multipart/form-data">
      <div class="row">        
        <div class="input-field col s12">
        <select name="tour_id" id="tour_id">
              <?php foreach ($allTour as $key => $allTourRow) { ?>
              <option <?php if($tour_id == $allTourRow["id"]){ echo "selected='selected'"; } ?> value="<?php echo $allTourRow["id"]; ?>"><?php echo $allTourRow["name"]; ?></option>
              <?php  } ?>
            </select> 
          <label for="title">Blog Title</label>
        </div>
      </div>
     <div class="row">
          <div class="input-field col s12">
            <input  name="image" id="image" type="file" class="validate"> 
            <label for="name" style="margin-top: -42px !important;">Blog Image</label>
          </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
              <textarea  class="validate materialize-textarea"  id="details" name="details">
              </textarea>
              <label for="details">Blog Details</label>
            </div>
        </div> 
    </form>
  </div>