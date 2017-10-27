<div class="moadalHeader-title">
    <div class="row modal-row">
      <div class="col s12 m6">
        <h5>Add Testimonials</h5>
    </div>
  </div>
</div>
<hr>
<div class="row">
    <form id="addTestForm" method="post" enctype="multipart/form-data">
            
        <div class="input-field col s12 m6">
        <input id="title" name="title" type="text" class="validate" placeholder="Enter your Blog title">
          <label for="title">Title</label>
        </div>
     
          <div class="input-field col s12 m6">
            <input  name="image" id="image" type="file" class="validate testImg" style="display: none;"> 
            <button type="button" class="btn btnTestPhoto" onclick="$('.testImg').click()">File Uploade</button>
            <!-- <label for="name" style="margin-top: -42px !important;">Image</label> -->
          </div>
     
        <div class="input-field col s12 m12">
              <textarea  class="validate materialize-textarea"  id="details" name="details">
              </textarea>
              <label for="details">Details</label>
            </div>
    </form>
  </div>