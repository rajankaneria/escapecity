<?php $this->load->view("admin-nav"); ?>
<div class="container">
 <div class="row">
 <div class="card-panel">
  <div class="page-header">
      <div class="page-title">Rate Management</div>      
      <div class="page-button"><a class="waves-effect waves-light btn blue" id="addRate">Add</a></div>
  </div>
   <div class="page-content">
    <table border="1" class="responsive-table centered">
    <thead>
      <tr>
        <th>Order</th>
        <th>Tour</th>    
        <th>Title</th>
        <th>Details</th>             
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($allRateData as $key => $allRateRow) { ?>
      <tr id="rate-id<?php echo $allRateRow['id']; ?>">  
        <td><?php echo $allRateRow['id']; ?></td>  
         <td><?php echo $allRateRow['tour_id']; ?></td>         
        <td><?php echo $allRateRow['title']; ?></td>
        <td><?php echo $allRateRow['detail']; ?></td>        
        <td class="right-align blog-btn">
        <a data-rate-id="<?php echo $allRateRow['id']; ?>" class="btn-floating waves-effect waves-light red delete-rate"><i class="material-icons">delete</i></a>
        <a data-rate-id="<?php echo $allRateRow['id']; ?>" class="btn-floating waves-effect waves-light blue-grey edit-rate"><i class="material-icons">mode_edit</i></a>
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
  <div id="rateModal" class="modal">
    <div class="modal-content">
      <?php $this->load->view("addRate"); ?>
    </div>
    <div class="modal-footer">
      <a id="sendRate" href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Save</a>
    </div>
  </div>

  <!-- Modal Structure -->
   <div id="editRateModal" class="modal">
    <div class="modal-content">
     </div>

    <div class="modal-footer">
      <a  id="updateRate" href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Save</a>
    </div>
  </div>
