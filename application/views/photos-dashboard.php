<?php $this->load->view("admin-nav"); ?>
<div class="container">
 <div class="row">
 <div class="card-panel">
  <div class="page-header">
      <div class="page-title">Photos Management</div>      
      <div class="page-button"><a class="waves-effect waves-light btn blue" id="addPhotos">Add</a></div>
  </div>
   <div class="page-content">
   	<table border="1" class="responsive-table centered">
    <thead>
   		<tr>
        <th>Order</th>
        <th>Tour</th>       
        <th>Photos</th>            
        <th>Actions</th>
   		</tr>
    </thead>
    <tbody>
      <?php foreach ($photosData as $key => $photosRow) { ?>
      <tr id="photos-id<?php echo $photosRow['id']; ?>">  
         <td><?php echo $photosRow['id']; ?></td>         
        <td><?php echo $photosRow['tour_id']; ?></td>            
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

<!-- Modal Structure -->
  <div id="photosModal" class="modal">
    <div class="modal-content">
      <?php $this->load->view("addPhotos"); ?>
    </div>
    <div class="modal-footer">
      <a id="sendPhotos" href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Save</a>
    </div>
  </div>

  <!-- Modal Structure -->
   <div id="editPhotosModal" class="modal">
    <div class="modal-content">
     </div>

    <div class="modal-footer">
      <a  id="updatePhotos" href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Save</a>
    </div>
  </div>
