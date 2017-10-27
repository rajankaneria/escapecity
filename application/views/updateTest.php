<div class="moadalHeader-title">
    <div class="row modal-row">
      <div class="col s12 m6">
        <h5>Update Testimonials</h5>
    </div>
  </div>
</div>
<hr>

<div class="row">
    <form id="updateTestForm" method="post" enctype="multipart/form-data">
           
        <div class="input-field col s12 m6">
          <input id="title" name="title" type="text" class="validate" placeholder="Enter your Blog title" value="<?php echo $title; ?>">
          <label for="title">Title</label>
        </div>
      
        <div class="input-field col s12 m6">
          <input id="details" name="details" type="text" class="validate" placeholder="Enter your Blog Contents" value="<?php echo $details; ?>">
          <label for="details">Contents</label>
        </div>
      
        <div class="col s12 m12">
          
          <div class="modal-imgBox">
          <img src="<?php echo base_url();?>html/images/testimonials/<?php echo $image; ?>" height="150" width="150">
          <button type="button" class="btn btnUpload-circle" onclick="$('.updtaeTestImg').click()">
            <i class="fa fa-pencil" aria-hidden="true"></i>
          </button>
          </div>

        </div>


       <!--  <div class="input-field col s12 m6">
          <img height="150" src="<?php // echo base_url();?>html/images/testimonials/<?php //echo $image; ?>" />
        </div> -->
        
        <div class="input-field col s12 m6">
          
          <input id="image" name="image" type="file" class="validate updtaeTestImg" style="display: none;">
        <!--   <button type="button" class="btn btnUpdtaeTest" onclick="$('.updtaeTestImg').click()">File Uploade</button> -->
          <!-- <img width="300" src="<?php // echo base_url();?>html/images/testimonials/<?php // echo $image; ?>" /> -->
          <input type="hidden" name="testID" id="testID" value="<?php echo $id ?>">
        </div>
    </form>
  </div>