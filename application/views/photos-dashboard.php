<div class="moadalHeader-title">
    <div class="row modal-row">
      <div class="col s12 m6">
        <h5>Photos Management</h5>
    </div>
  </div>
</div><hr>

<div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s3"><a href="#test1">Add Photo</a></li>
        <li class="tab col s3"><a class="active" href="#test2">List Photo</a></li>
       
      </ul>
    </div>
    <div id="test1" class="col s12"><div class="row">
    <form id="addPhotosForm" method="post" enctype="multipart/form-data">
     
        <div class="input-field col s12 m6">
         <select name="tour_id" id="tour_id">
          <?php foreach ($allTour as $key => $allTourRow) { ?>
              <option  value="<?php echo $allTourRow["id"]; ?>"><?php echo $allTourRow["name"]; ?></option>
              <?php  } ?>
            </select> 
          <label for="title">Select Tour</label>
        </div>
      
          <div class="input-field col s12 m6">
            <!-- <label for="photos" style="position: relative;display: block;top: -25px;">Photo</label> -->
            <input  name="photos" id="photos" type="file" class="validate newPhoto" style="display: none;"> 

            <button type="button" class="btn btnPhotoUpload" onclick="$('.newPhoto').click()">File Upload</button>
          </div>
    </form>
  </div>
</div>
    <div id="test2" class="col s12"><div class="container">
 <div class="row">
 <div>
 <!--  <div class="page-header">
      <div class="page-title">Photos Management </div>      
      <div class="page-button"><a class="waves-effect waves-light btn blue" id="addPhotos">Add</a></div>
  </div> -->
   <div class="page-content row">

    <?php foreach ($allPhotos as $key => $photosRow) { ?>
    <div class="col s6 m4">
      <div class="imgBox-are">
        <div class="imgBox">
        <img src="<?php echo base_url(); ?>html/images/Detail/<?php echo $photosRow['photos']; ?>" height="100"/>
        <div class="ftr-conteainer">
        <!-- <div class="id-area"><?php // echo $photosRow['id']; ?></div> -->
        <div class="btns-area">
          <!-- <a data-photos-id="<?php //echo $photosRow['id']; ?>" class="btn-floating waves-effect waves-light edit-photos"><i class="material-icons edit-icon">mode_edit</i></a> -->
        <a data-photos-id="<?php echo $photosRow['id']; ?>" class="btn-floating waves-effect waves-light delete-photos"><i class="material-icons delete-icon">delete</i></a>
        </div>
        </div>
        </div>
      </div>
    </div>
      <?php } ?>
   </div>
  </div>
 </div>  
</div>
</div>
</div>





















