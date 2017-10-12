<div class="row">
    <form id="addRateForm" method="post" enctype="multipart/form-data">
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
              <input type="text" name="title" id="title" placeholder="Entyer your Title">
              <label for="details">Title</label>
            </div>
        </div> 
      <div class="row">
        <div class="input-field col s12">
              <textarea  class="validate materialize-textarea"  id="detail" name="detail">
              </textarea>
              <label for="details">Details</label>
            </div>
        </div> 
    </form>
  </div>