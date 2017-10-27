<div class="container">
  <div class="moadalHeader-title">
    <div class="row modal-row">
      <div class="col s12 m6">
        <h5>Edit Photo</h5>
      </div>
      <div class="col s12 m6">
        <div class="tourName">
          <div><label>Tour</label></div>
          <?php foreach ($allTour as $key => $allTourRow) { ?>
            <div class="tourDeclaration"><?php echo $allTourRow["name"]; ?></div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div><hr>




<!-- <div class="moadalHeader-title">
    <div class="row modal-row">
      <div class="col s12 m6">
        <h5>Edit Photo</h5>
    </div>
  </div>
</div> -->

<div class="row">
    <form id="photosForm" method="post" enctype="multipart/form-data">
        <label for="photos">Photo</label> 
        <div class="input-field col s12">
          <input  name="photos" id="photos" type="file" class="validate UploadPhoto" style="display: none;"> 
          <button type="button" class="btn btnUpload" onclick="$('.UploadPhoto').click()">File Upload</button>
        </div>
    <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
     
    </form>
  </div>