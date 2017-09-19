<div class="row">
    <form id="updateTestForm" method="post" enctype="multipart/form-data">
      <div class="row">        
        <div class="input-field col s12">
          <input id="title" name="title" type="text" class="validate" placeholder="Enter your Blog title" value="<?php echo $title; ?>">
          <label for="title">Title</label>
        </div>
      </div>
       <div class="row">        
        <div class="input-field col s12">
          <input id="details" name="details" type="text" class="validate" placeholder="Enter your Blog Contents" value="<?php echo $details; ?>">
          <label for="details">Contents</label>
        </div>
      </div>
       <div class="row">        
        <div class="input-field col s12">
          <input id="image" name="image" type="file" class="validate">
          <img src="<?php echo base_url();?>html/images/testimonials/<?php echo $image; ?>" />
          <label for="Blog-Image">Image</label>
          <input type="hidden" name="testID" id="testID" value="<?php echo $id ?>">
        </div>
      </div>   
    </form>
  </div>