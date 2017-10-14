  <div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s3"><a href="#test1">Add Rate</a></li>
        <li class="tab col s3"><a class="active" href="#test2">Rate List</a></li>
       
      </ul>
    </div>
    <div id="test1" class="col s12"><div class="row">
    <form id="addRateForm" method="post" enctype="multipart/form-data">
       <div class="row">        
        <div class="input-field col s12">
        <select name="tour_id" id="tour_id">
              <?php foreach ($allTour as $key => $allTourRow) { ?>
              <option value="<?php echo $allTourRow["id"]; ?>"><?php echo $allTourRow["name"]; ?></option>
              <?php  } ?>
            </select> 
          <label for="title">Select Tour</label>
        </div>
      </div> 
       <div class="row">
        <div class="input-field col s12">
              <input type="text" name="title" id="title" placeholder="Entyer your Title">
              <label for="details">Title</label>
            </div>
        </div> 
      <div class="row">
        <div class="input-field col s12">
              <textarea  class="validate materialize-textarea"  id="detail" name="detail">
              </textarea>
              <label for="details">Details</label>
            </div>
        </div> 
    </form>
  </div></div>
    <div id="test2" class="col s12"><div class="container">
 <div class="row">
 <div>
  <div class="page-header">
      <div class="page-title">Rate Management</div>      
     <!--  <div class="page-button"><a class="waves-effect waves-light btn blue" id="addRate">Add</a></div> -->
  </div>
   <div class="page-content">
    <table border="1" class="responsive-table centered">
    <thead>
      <tr>
        <th>Order</th>
      <!--   <th>Tour</th>   -->  
        <th>Title</th>
        <th>Details</th>             
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($allRate as $key => $allRateRow) { ?>
      <tr id="rate-id<?php echo $allRateRow['id']; ?>">  
        <td><?php echo $allRateRow['id']; ?></td>  
     <!--     <td><?php echo $allRateRow['tour_name']; ?></td>   -->       
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

</div>
    
  </div>

































