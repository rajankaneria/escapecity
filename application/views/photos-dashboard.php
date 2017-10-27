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
   <div class="page-content">
    <table border="1" class="responsive-table centered">
    <thead>
      <tr>
        <th>ID</th>
     <!--    <th>Tour</th>   -->     
        <th>Photos</th>            
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($allPhotos as $key => $photosRow) { ?>
      <tr id="photos-id<?php echo $photosRow['id']; ?>">  
         <td><?php echo $photosRow['id']; ?></td>         
     <!--    <td><?php echo $photosRow['tour_name']; ?></td>       -->      
       <td><img src="<?php echo base_url(); ?>html/images/Detail/<?php echo $photosRow['photos']; ?>" width="200" height="200"/></td> 
        <td class="right-align blog-btn">
        <a data-photos-id="<?php echo $photosRow['id']; ?>" class="btn-floating waves-effect waves-light edit-photos"><i class="material-icons edit-icon">mode_edit</i></a>
        <a data-photos-id="<?php echo $photosRow['id']; ?>" class="btn-floating waves-effect waves-light delete-photos"><i class="material-icons delete-icon">delete</i></a>
        </td>
      </tr>
      <?php } ?>
      </tbody>
    </table>
   </div>
  </div>
 </div>  
</div>
</div>
</div>





















