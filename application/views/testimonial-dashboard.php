<?php $this->load->view("admin-nav"); ?>
<div class="container">
 <div class="row">

 <div class="card-panel">

  <div class="page-header">
      <div class="page-title">Testimonials Management</div>      
      <div class="page-button"><a class="waves-effect waves-light btn blue" id="addTest">Add</a></div>
  </div>
   <div class="page-content">
   	<table border="1" class="responsive-table centered">
    <thead>
   		<tr>
        <th>Order</th>
        <th>Title</th>    
        <th>Details</th>
        <th>Image</th>            
        <th>Actions</th>
   		</tr>
    </thead>
    <tbody>
      <?php foreach ($testData as $key => $testRow) { ?>
      <tr id="testid<?php echo $testRow['id']; ?>">  
         <td><?php echo $testRow['id']; ?></td>         
        <td><?php echo $testRow['title']; ?></td>
        <td><?php echo substr($testRow['details'],0,200)."...."; ?></td>        
        <td><img src="<?php echo base_url(); ?>html/images/testimonials/<?php echo $testRow['image']; ?>" width="200" height="200"/></td>     
        <td class="right-align blog-btn">
        <a data-test-id="<?php echo $testRow['id']; ?>" class="btn-floating waves-effect waves-light red test-delete-btn"><i class="material-icons">delete</i></a>
        <a data-test-id="<?php echo $testRow['id']; ?>" class="btn-floating waves-effect waves-light blue-grey test-edit-btn"><i class="material-icons">mode_edit</i></a>
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
  <div id="addTestModal" class="modal">
    <div class="modal-content">
      <?php $this->load->view("addTest"); ?>
    </div>
    <div class="modal-footer">
      <a id="sendTestData" href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Save</a>
    </div>
  </div>

  <!-- Modal Structure -->
   <div id="editTestModal" class="modal">
    <div class="modal-content">
     </div>

    <div class="modal-footer">
      <a  id="updateTest" href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Save</a>
    </div>
  </div>
