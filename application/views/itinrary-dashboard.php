
<div class="container">
 <div class="row">
 <div class="card-panel">
  <div class="page-header">
      <div class="page-title">Itinrary Management</div>      
      <div class="page-button"><a class="waves-effect waves-light btn blue" id="addItinrary">Add</a></div>
  </div>
   <div class="page-content">
   	<table border="1" class="responsive-table centered">
    <thead>
   		<tr>
        <th>Order</th>
        <th>Tour</th>    
        <th>Date</th>
        <th>Details</th>            
        <th>Actions</th>
   		</tr>
    </thead>
    <tbody>
      <?php foreach ($allItinraryData as $key => $allItinraryRow) { ?>
      <tr id="itinrary-id<?php echo $allItinraryRow['id']; ?>">  
         <td><?php echo $allItinraryRow['tour_id']; ?></td>         
        <td><?php echo $allItinraryRow['date']; ?></td>
        <td><?php echo $allItinraryRow['details']; ?></td>           
        <td class="right-align blog-btn">
        <a data-itinrary-id="<?php echo $allItinraryRow['id']; ?>" class="btn-floating waves-effect waves-light red delete-itinrary"><i class="material-icons">delete</i></a>
        <a data-itinrary-id="<?php echo $allItinraryRow['id']; ?>" class="btn-floating waves-effect waves-light blue-grey edit-itinrary"><i class="material-icons">mode_edit</i></a>
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
  <div id="itinraryModal" class="modal">
    <div class="modal-content">
      <?php $this->load->view("addItinrary"); ?>
    </div>
    <div class="modal-footer">
      <a id="sendItinrary" href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Save</a>
    </div>
  </div>

  <!-- Modal Structure -->
   <div id="editItinraryModal" class="modal">
    <div class="modal-content">
     </div>

    <div class="modal-footer">
      <a  id="updateItinrary" href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Save</a>
    </div>
  </div>
