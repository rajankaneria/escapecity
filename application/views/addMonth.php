<div class="row">
    <form id="addMonthForm" method="post" enctype="multipart/form-data">
      <div class="row">
      <div class="input-field col s12 m12">       
       <select name="month" id="month">
        <option>Select Month</option>        
        <option value="1">January</option>
        <option value="2">February</option>  
        <option value="3">March</option>
        <option value="4">April</option>
        <option value="5">May</option>
        <option value="6">June</option>
        <option value="7">July</option>
        <option value="8">August</option>
        <option value="9">September</option>        
        <option value="10">October</option>
        <option value="11">November</option>
        <option value="12">December</option>        
        </select>     
      </div>
    </div>
      <div class="row">        
        <div class="input-field col s12">
        <input id="title" name="title" type="text" class="validate" placeholder="Enter your Blog title">
          <label for="title">Title</label>
        </div>
      </div>
     <div class="row">
          <div class="input-field col s12">
            <input  name="image" id="image" type="file" class="validate"> 
            <label for="image" style="margin-top: -42px !important;">Image</label>
          </div>
      </div> 

      <div class="row">
        <div class="input-field col s12">
              <textarea  class="validate materialize-textarea"  id="description" name="description">
              </textarea>
              <label for="details">Description</label>
            </div>
        </div> 
    </form>
  </div>