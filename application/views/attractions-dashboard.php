
<div class="container">
 <div class="row">

 <div class="card-panel">

  <div class="page-header">
      <div class="page-title">Attractions Management</div>      
      <div class="page-button"><a class="waves-effect waves-light btn blue" id="addAttractions">Add</a></div>
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
      <?php foreach ($attractionsData as $key => $attractionsRow) { ?>
      <tr id="attractions-id<?php echo $attractionsRow['id']; ?>">  
         <td><?php echo $attractionsRow['id']; ?></td>         
        <td><?php echo $attractionsRow['tour_id']; ?></td> 
         <td><?php echo $attractionsRow['title']; ?></td>              
        <td><img src="<?php echo base_url(); ?>html/images/Detail/<?php echo $attractionsRow['photos']; ?>" width="200" height="200"/></td>     
        <td class="right-align blog-btn">
        <a data-attractions-id="<?php echo $attractionsRow['id']; ?>" class="btn-floating waves-effect waves-light red delete-attractions"><i class="material-icons">delete</i></a>
        <a data-attractions-id="<?php echo $attractionsRow['id']; ?>" class="btn-floating waves-effect waves-light blue-grey edit-attractions"><i class="material-icons">mode_edit</i></a>
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
  <div id="attractionsModal" class="modal">
    <div class="modal-content">
      <?php $this->load->view("addTest"); ?>
    </div>
    <div class="modal-footer">
      <a id="sendAttractions" href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Save</a>
    </div>
  </div>

  <!-- Modal Structure -->
   <div id="editAttractionsModal" class="modal">
    <div class="modal-content">
     </div>

    <div class="modal-footer">
      <a  id="updateAttractions" href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Save</a>
    </div>
  </div>
