<div class="row">
    <form id="addItinraryForm" method="post" enctype="multipart/form-data">
      <div class="row">        
        <div class="input-field col s12">
        <select name="tour_id" id="tour_id">
              <?php foreach ($allTour as $key => $allTourRow) { ?>
              <option value="<?php echo $allTourRow["id"]; ?>"><?php echo $allTourRow["name"]; ?></option>
              <?php  } ?>
            </select> 
          <label for="title">Select Tour</label>
        </div>
      </div>
     <div class="row">
          <div class="input-field col s12">
            <input  name="date" id="date" type="text" class="validate"> 
            <label for="name">Date</label>
          </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
              <textarea  class="validate materialize-textarea"  id="details" name="details">
              </textarea>
              <label for="details">Details</label>
            </div>
        </div> 
    </form>
  </div>