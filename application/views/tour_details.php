<div id="detailpage" class="parallax-container">
  <div class="parallax">
    <div class="parallax-overlay"></div><img src="<?php echo base_url();?>html/images/<?php echo $tourDetails[0]['home_banner']; ?>">
   </div>
   <div class="container">
    <?php foreach($allMonthDetails as $key => $allMonthRow) { 

         $monthNum = $allMonthRow['month'];
         $monthName = date("F", mktime(0, 0, 0, $monthNum, 10));
         //echo $monthName; // Output: May

      ?>
     <div class="page-title" style="color:#fff;">Tours in <?php echo $monthName; ?></div>
     <?php } ?>
   </div>   
 </div> 


<!-- Tour Details Start Here -->

<div class="row">
  <div class="TBM-area">
    <!-- Tour Details Area -->
    <div class="col s12 m9 TBM-details-area">
      <?php foreach($allMonthDetails as $key => $allMonthRow){ ?>
      <div class="TBM-title">
        <h5><?php echo $allMonthRow['title']; ?></h5>
      </div>
      <div class="TBM-description">
        <p>
          <?php echo $allMonthRow['description']; ?>
        </p>
      </div>
      <?php } ?>

      <!-- List of tour -->
      <div class="row tourList-area-block">
        <?php foreach ($tourDetails as $key => $tourRow) { ?>
        <div class="tourList-area">
          <div class="tour-img-area col s12 m4">
            <img src="<?php echo base_url(); ?>html/images/<?php echo $tourRow['home_banner']; ?>" class="card-image">
          </div>
          <div class="tour-content col s12 m8">
            <h5 class="tour-title"><?php echo $tourRow['name']; ?></h5>
            <h6 class="tour-sub-title"><?php echo $tourRow['tour_name']; ?></h6>               
              <p><?php echo substr($tourRow['detail'],0,135)."...."; ?></p>
              <div class="row">
                <div class="col s12 m6">
                  <i class="price fa fa-inr" aria-hidden="true">19000</i>
                  <i class="fa fa-inr off-price-inr" aria-hidden="true"></i> <span  class="off-price">19000</span><span class="perHead">/ Person</span>
                </div>  
                <a class="col s12 m6  waves-effect waves-light btn black" href="<?php echo base_url();?>tour/id/<?php echo $tourRow['id']; ?>">VIEW MORE</a>
              </div>
          </div>
        </div>
        <div class="col s12 m12">
          <div class="row tour-deails-footer-area">
               <div class="col s2 detail-box">
                  <div class="detail-header-icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
                  <div class="detail-header-value">3 days</div>
               </div>

              <div class="col s2 detail-box">
                <div class="detail-header-icon"><i class="fa fa-arrows-h" aria-hidden="true"></i></div>
                <div class="detail-header-value">Easy</div>
              </div>


              <div class="col s2 detail-box">
                <div class="detail-header-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                <div class="detail-header-value">Ahmednagar</div>
              </div>

              <div class="col s2 detail-box">
                <div class="detail-header-icon"><i class="fa fa-area-chart" aria-hidden="true"></i></div>
                <div class="detail-header-value">4671 feet</div>
              </div>

              <div class="col s2 detail-box">
                <div class="detail-header-icon"><i class="fa fa-money" aria-hidden="true"></i></div>
                <div class="detail-header-value">5000</div>
              </div>
            </div>
        </div>
        <?php } ?>
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
              <label for="last_name">Last Name</label>
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
                <option value="" disabled selected>Choose your option</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
              </select>
              <label for="destination">Destination</label>
            </div>
            <div class="input-field">
              <select>
                <option value="" disabled selected>Choose your option</option>
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