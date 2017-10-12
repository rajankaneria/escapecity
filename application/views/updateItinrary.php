<div class="row">
    <form id="updateItinraryForm" method="post" enctype="multipart/form-data">
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
          <input id="date" name="date" type="text" class="validate" placeholder="Enter your Date" value="<?php echo $date; ?>">
          <label for="date">Date</label>
        </div>
      </div>
     <div class="row">
        <div class="input-field col s12">
          <textarea  class="validate materialize-textarea"  id="details" name="details"><?php echo $details; ?>
            </textarea>
            <label for="details">Details</label>
          </div>
        </div> 
        <input type="hidden" name="id" id="id" value="<?php echo $id; ?>"> 
    </form>
  </div>