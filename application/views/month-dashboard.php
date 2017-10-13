<?php $this->load->view("admin-nav"); ?>
<div class="container">
 <div class="row">

 <div class="card-panel">

  <div class="page-header">
      <div class="page-title">Month Management</div>      
      <div class="page-button"><a class="waves-effect waves-light btn blue" id="addMonth">Add</a></div>
  </div>
   <div class="page-content">
   	<table border="1" class="responsive-table centered">
    <thead>
   		<tr>
        <th>Order</th>
        <th>Month</th>
        <th>Title</th>    
        <th>Description</th>
        <th>Image</th>            
        <th>Actions</th>
   		</tr>
    </thead>
    <tbody>
      <?php foreach ($monthDetails as $key => $monthRow) { ?>
      <tr id="month-id<?php echo $monthRow['id']; ?>">  
        <td><?php echo $monthRow['id']; ?></td>  
         <?php $monthNum  = $monthRow['month'];
          $monthName = date('F', mktime(0, 0, 0, $monthNum, 10)); ?>       
        <td><?php echo $monthName; ?></td>         
        <td><?php echo $monthRow['title']; ?></td>
        <td><?php echo substr($monthRow['description'], 0,180)."...."; ?></td>        
        <td><img src="<?php echo base_url(); ?>html/images/tours/<?php echo $monthRow['image']; ?>" width="170" height="170"/></td>     
        <td class="right-align blog-btn">
        <a data-month-id="<?php echo $monthRow['id']; ?>" class="btn-floating waves-effect waves-light red delete-month-btn"><i class="material-icons">delete</i></a>
        <a data-month-id="<?php echo $monthRow['id']; ?>" class="btn-floating waves-effect waves-light blue-grey edit-month-btn"><i class="material-icons">mode_edit</i></a>
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
  <div id="addMonthModal" class="modal">
    <div class="modal-content">
      <?php $this->load->view("addMonth"); ?>
    </div>
    <div class="modal-footer">
      <a id="sendMonthData" href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Save</a>
    </div>
  </div>

  <!-- Modal Structure -->
   <div id="editMonthModal" class="modal">
    <div class="modal-content">
     </div>

    <div class="modal-footer">
      <a  id="updateMonth" href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Save</a>
    </div>
  </div>
