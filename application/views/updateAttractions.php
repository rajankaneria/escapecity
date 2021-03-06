<div class="moadalHeader-title">
    <div class="row modal-row">
      <div class="col s12 m6">
        <h5>Update Attractions</h5>
    </div>
  </div>
</div>
<hr>

<div class="row">
    <form id="updateAttractionsForm" method="post" enctype="multipart/form-data">
             
        <div class="input-field col s12 m6">
            <select name="tour_id" id="tour_id">
              <?php foreach ($allTour as $key => $allTourRow) { ?>
              <option <?php if($tour_id == $allTourRow["id"]){ echo "selected='selected'"; } ?> value="<?php echo $allTourRow["id"]; ?>"><?php echo $allTourRow["name"]; ?></option>
              <?php  } ?>
            </select>            
          <label for="title">Tour</label>
        </div>
            
        <div class="input-field col s12 m6">
          <input id="title" name="title" type="text" class="validate" placeholder="Enter your Title" value="<?php echo $title; ?>">
          <label for="date">Title</label>
        </div>
      
        <div class="input-field col s12 m12">
          <textarea  class="validate materialize-textarea"  id="details" name="details"><?php echo $details; ?>
            </textarea>
            <label for="details">Details</label>
        </div>
        <input type="hidden" name="id" id="id" value="<?php echo $id; ?>"> 
    </form>
  </div>