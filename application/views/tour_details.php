<div id="detailpage" class="parallax-container" style="    top: 100px;margin-bottom: 100px;">
  <div class="parallax">
    <div class="parallax-overlay"></div><img src="<?php echo base_url();?>html/images/<?php echo $tourDetails[0]['home_banner']; ?>">
   </div>
   <div class="container">
   <?php foreach ($singleMonth as $key => $singleMonthRow) {  

         $monthNum = $singleMonthRow['month'];
         $monthName = date("F", mktime(0, 0, 0, $monthNum, 10));
      ?>
     <div class="page-title" style="color:#fff;">Tours in  <?php echo $monthName; ?></div>
     <?php } ?>
   </div>   
 </div>

<!-- Tour Details Start Here -->

<div class="row">
  <div class="TBM-area">
    <!-- Tour Details Area -->
    <div class="col s12 m9 TBM-details-area">
      <?php foreach ($singleMonth as $key => $singleMonthRow) { ?>  
      <div class="TBM-title">
        <h5><?php echo $singleMonthRow['title']; ?></h5>
      </div>
      <div class="TBM-description">
        <p>         
          <?php echo $singleMonthRow['description']; ?>
        </p>
      </div>
      <?php } ?>

      <!-- List of tour -->
      <div class="row tourList-area-block">
        <?php foreach ($tourDetails as $key => $tourRow) { 

          $this->load->view('tourDetail_frame',array("tourRow"=>$tourRow));

         } ?>
      </div>
    </div>
    <!-- Sidebar Area -->
    <div class="col s12 m3 sidebar-area">
      <div class="row">
        <div class="searh-area">
          <center>
            <h5>Search Tours</h5>
            <label>Find our exciting tours today!</label>
          </center>
          <form>
            <div class="input-field">
              <input id="last_name" type="text" class="validate">
              <label for="last_name">Tour name</label>
            </div>
            <input type="submit" class="waves-effect waves-light btn btn-search" name="" value="Search">
          </form>
        </div>

        <div></div>
        <!-- Form -->
        <div class="searh-area">
          <center><h5>Quick Contact</h5></center>
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
                <option value="" disabled selected>Choose your destination</option>
                <option value="1">Roopkund Trek</option>
                <option value="2">Leh Ladakh</option>
                <option value="3">Valley of Flowers</option>
                <option value="3">Beyul Pamako Trek</option>
                <option value="3">The Bailey Trail Trek</option>
                <option value="3">Lapti Valley Trek</option>
                <option value="3">Bhimashankar</option>
              </select>
              <label for="destination">Destination</label>
            </div>
            <div class="input-field">
              <select>
                <option value="" disabled selected>Choose your month</option>
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