
<div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s3"><a href="#test1">Add Photo</a></li>
        <li class="tab col s3"><a class="active" href="#test2">List Photo</a></li>
       
      </ul>
    </div>
    <div id="test1" class="col s12"><div class="row">
    <form id="addPhotosForm" method="post" enctype="multipart/form-data">
     <div class="row">        
        <div class="input-field col s12">
         <select name="tour_id" id="tour_id">
              <?php foreach ($allTour as $key => $allTourRow) { ?>
              <option  value="<?php echo $allTourRow["id"]; ?>"><?php echo $allTourRow["name"]; ?></option>
              <?php  } ?>
            </select> 
          <label for="title">Select Tour</label>
        </div>
      </div> 
     <div class="row">
          <div class="input-field col s12">
            <input  name="photos" id="photos" type="file" class="validate"> 
            <label for="photos" style="margin-top: -42px !important;">Photo</label>
          </div>
      </div>      
    </form>
  </div>
</div>
    <div id="test2" class="col s12"><div class="container">
 <div class="row">
 <div>
  <div class="page-header">
      <div class="page-title">Photos Management</div>      
     <!--  <div class="page-button"><a class="waves-effect waves-light btn blue" id="addPhotos">Add</a></div> -->
  </div>
   <div class="page-content">
    <table border="1" class="responsive-table centered">
    <thead>
      <tr>
        <th>Order</th>
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
        <a data-photos-id="<?php echo $photosRow['id']; ?>" class="btn-floating waves-effect waves-light red delete-photos"><i class="material-icons">delete</i></a>
        <a data-photos-id="<?php echo $photosRow['id']; ?>" class="btn-floating waves-effect waves-light blue-grey edit-photos"><i class="material-icons">mode_edit</i></a>
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





















