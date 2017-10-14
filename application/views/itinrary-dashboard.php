  

  <div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s3"><a href="#test1">Add Itinrary</a></li>
        <li class="tab col s3"><a class="active" href="#test2">List Itinrary</a></li>        
      </ul>
    </div>

    <!-- Forms -->
    <div id="test1" class="col s12">
      <div class="row">
    <form id="addItinraryForm" method="post" enctype="multipart/form-data">
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
      </div> 
     <div class="row">
          <div class="input-field col s12">
            <input  name="date" id="date" type="text" class="validate"> 
            <label for="date">Date</label>
          </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
              <textarea  class="validate materialize-textarea" id="details" name="details">
              </textarea>
              <label for="details">Details</label>
            </div>
        </div> 
    </form>
  </div>
    </div>
    <div id="test2" class="col s12">
      
<div class="container">
 <div class="row">
 <div>
  <!-- <div class="page-header">
      <div class="page-title">Itinrary Management</div>      
      <div class="page-button"><a class="waves-effect waves-light btn blue" id="addItinrary">Add</a></div>
  </div> -->
   <div class="page-content">
    <table border="1" class="responsive-table centered">
    <thead>
      <tr>
        <th>Order</th>  
        <th>Date</th>
        <th>Details</th>            
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($allItinrary as $key => $allItinraryRow) { ?>
      <tr id="itinrary-id<?php echo $allItinraryRow['id']; ?>">
        <td><?php echo $allItinraryRow['id']; ?></td>  
       <!--   <td><?php //echo $allItinraryRow['tour_name']; ?></td> -->
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
  </div>   



