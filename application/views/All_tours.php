<div id="detailpage" class="parallax-container" style="top: 100px;margin-bottom: 100px;">
  <div class="parallax">
    <center><h5 class="ttl-tours">Tours</h5></center>
    <div class="parallax-overlay"></div><img src="<?php echo base_url();?>html/images/<?php echo $tourDetails[0]['home_banner']; ?>">
   </div>
     
 </div>

<!-- Tour Details Start Here -->

<div class="row" style="position: relative;">
  <div class="TBM-area">   <!-- Tour Details Area -->
    <div class="col s12 m9 TBM-details-area">

      <!-- List of tour -->
      <div class="row tourList-area-block">
        <?php foreach ($tourDetails as $key => $tourRow) { 

          $this->load->view('tourDetail_frame',array("tourRow"=>$tourRow));

         } ?>
      </div>
    </div>
    <!-- Sidebar Area -->
    <div class="col s12 m3 sidebar-area search-sidebar">
      <div class="row">
        <div class="searh-area">
          <center>
            <h5 class="box-2-heading">Search Tours</h5>
            <!-- <label>Find our exciting tours today!</label> -->
          </center>
          <form>
            <div class="input-field">
              <input id="last_name" type="text" class="validate">
              <label for="last_name">Tour Name</label>
            </div>
            <input type="submit" class="waves-effect waves-light btn btn-search" name="" value="Search">
          </form>
        </div>

        <div></div>
        <!-- Form -->
        <div class="searh-area">
          <center><h5 class="box-2-heading">Quick Contact</h5></center>
          <form>
            <div class="input-field">
              <input id="last_name" type="text" class="validate" required="required">
              <label for="last_name">Full Name</label>
            </div>
            <div class="input-field">
              <input id="email" type="email" class="validate" required="required">
              <label for="email">E-mail</label>
            </div>
            <div class="input-field">
              <input id="contact" type="text" class="validate" required="required">
              <label for="contact">Contact</label>
            </div>
            <div class="input-field">
              <select>
                <option value="" disabled selected>Choose your option</option>
                 <option value="1">Roopkund Trek</option>
                <option value="2">Leh Ladakh</option>
                <option value="3">Valley of Flowers</option>
              </select>
              <label for="destination">Destination</label>
            </div>
            <div class="input-field">
              <select>
                <option value="" disabled selected>Choose your Month</option>
                <option value="January">January</option>
                <option value="February">February</option>
                <option value="March">March</option>
                <option value="April">April</option>
                <option value="May">May</option>
                <option value="June">June</option>
                <option value="July">July</option>
                <option value="August">August</option>
                <option value="September">September</option>
                <option value="October">October</option>
                <option value="November">November</option>
                <option value="December">December</option>
              </select>
              <label for="monthOfTravel">Month of Travel</label>
            </div>
            <input type="submit" class="waves-effect waves-light btn btn-search" name="" value="Send">
          </form>
        </div>
      </div>
    </div>
    <!-- Sidebar Over here -->
  </div>
 <!-- Tour Details Over Here -->
</div>