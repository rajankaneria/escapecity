<div class="moadalHeader-title">
    <div class="row modal-row">
      <div class="col s12 m6">
        <h5>Update Month</h5>
    </div>
  </div>
</div><hr>

<div class="row">
    <form id="updateMonthForm" method="post" enctype="multipart/form-data">
    
      <div class="input-field col s12 m4">       
       <select name="month" id="month">
        <option>Select Month</option>        
        <option  <?php if($month=='1'){echo "selected='selected'";} ?> value="1">January</option>
        <option  <?php if($month=='2'){echo "selected='selected'";} ?> value="2">February</option>  
        <option  <?php if($month=='3'){echo "selected='selected'";} ?> value="3">March</option>
        <option  <?php if($month=='4'){echo "selected='selected'";} ?> value="4">April</option>
        <option  <?php if($month=='5'){echo "selected='selected'";} ?> value="5">May</option>
        <option  <?php if($month=='6'){echo "selected='selected'";} ?> value="6">June</option>
        <option  <?php if($month=='7'){echo "selected='selected'";} ?> value="7">July</option>
        <option  <?php if($month=='8'){echo "selected='selected'";} ?> value="8">August</option>
        <option  <?php if($month=='9'){echo "selected='selected'";} ?> value="9">September</option>      
        <option  <?php if($month=='10'){echo "selected='selected'";} ?> value="10">October</option>
        <option  <?php if($month=='11'){echo "selected='selected'";} ?> value="11">November</option>
        <option  <?php if($month=='12'){echo "selected='selected'";} ?> value="12">December</option>     
        </select>    
        <label for="title">Select Month</label>   
      </div>
          
        <div class="input-field col s12 m8">
        <input id="title" name="title" type="text" class="validate" placeholder="Enter your Blog title" value="<?php echo $title; ?>">
          <label for="title">Title</label>
        </div>
      
        
        <div class="input-field col s12 m6 center">
          <label for="image">Image</label>
          <img  width="200" height="auto" src="<?php  echo base_url();?>html/images/tours/<?php echo $image; ?>">
        </div>

        <div class="input-field col s12 m6">
          <input  name="image" id="image" type="file" class="validate monthUpdate" style="display: none;"> 
          <button type="button" class="btn btnMonthUpload" onclick="$('.monthUpdate').click()">Upload File</button>           
          
        </div>

        <div class="input-field col s12">
              <textarea  class="validate materialize-textarea"  id="description" name="description"><?php echo $description; ?>
              </textarea>
              <label for="details">Details</label>
              <input type="hidden" name="month-id" id="month-id" value="<?php echo $id; ?>">
            </div>
    </form>
  </div>