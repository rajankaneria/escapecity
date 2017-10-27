<div class="moadalHeader-title">
    <div class="row modal-row">
      <div class="col s12 m6">
        <h5>Attractions Management</h5>
    </div>
  </div>
</div>
<hr>
  <div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s3"><a href="#test1">Add Attractions</a></li>
        <li class="tab col s3"><a class="active" href="#test2">Attractions List</a></li> 
      </ul>
    </div>
    <div id="test1" class="col s12">
      <div class="row">
    <form id="addAttractionsForm" method="post" enctype="multipart/form-data">
      <div class="row">        
        <div class="input-field col s12">
        <select name="tour_id" id="tour_id">
          <?php var_dump($allTour); ?>
              <?php foreach ($allTour as $key => $allTourRow) { ?>
              <option value="<?php echo $allTourRow["id"]; ?>"><?php echo $allTourRow["name"]; ?></option>
              <?php  } ?>
            </select> 
          <label for="title">Select Tour</label>
        </div>
      </div> 
     <div class="row">
          <div class="input-field col s12">
            <input  name="title" id="title" type="text" class="validate"> 
            <label for="name">title</label>
          </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
              <textarea  class="validate materialize-textarea"  id="details" name="details">
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


   <div class="page-content">
    <table border="1" class="responsive-table centered">
    <thead>
      <tr>
        <th>Order</th>
        <!-- <th>Tour</th>    --> 
        <th>Title</th> 
        <th>Details</th>                
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($allAttractions as $key => $attractionsRow) { ?>
      <tr id="attractions-id<?php echo $attractionsRow['id']; ?>">  
         <td><?php echo $attractionsRow['id']; ?></td>         
       <!--  <td><?php echo $attractionsRow['tour_name']; ?></td>  -->
         <td><?php echo $attractionsRow['title']; ?></td> 
         <td><?php echo $attractionsRow['details']; ?></td>              
        
        <td class="right-align blog-btn">
        <a data-attractions-id="<?php echo $attractionsRow['id']; ?>" class="btn-floating waves-effect waves-light edit-attractions"><i class="material-icons edit-icon">mode_edit</i></a>
        <a data-attractions-id="<?php echo $attractionsRow['id']; ?>" class="btn-floating waves-effect waves-light delete-attractions"><i class="material-icons delete-icon">delete</i></a>
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