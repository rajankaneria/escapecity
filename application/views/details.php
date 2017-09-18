<div id="detailpage" class="parallax-container">
  <div class="parallax">
    <div class="parallax-overlay"></div><img src="http://localhost/escape_city/html/images/<?php echo $tourDetail['home_banner']; ?>">
    </div>
   <div class="container">
      <div class="page-main-title">      
      <?php echo $tourDetail["name"]; ?></div>   
 </div>
</div> 
 <!--===================== START full or main container container =================--> 
<div class="fullwidth-container tab_container">
   <div class="row">
     <div class="container lohagadh_container">
        <div class="col s9 tabs-title">

         <ul id="tabs-swipe-demo" class="tabs">
            <li class="tab col s3 tab-title"><a  href="#test-swipe-1" class="active">DETAILS</a></li>
            <li class="tab col s3 "><a  href="#test-swipe-2" >ITINRARY</a></li>
            <li class="tab col s3 "><a href="#test-swipe-3" >Attractions</a></li>
            <!-- <li class="tab col s3 "><a href="#test-swipe-4" >DATES</a></li> -->
            <li class="tab  col s3"><a href="#test-swipe-5" >RATES</a></li>
            <li class="tab col s3"><a href="#map" >MAPS</a></li>
          
            <li class="tab col s3 "><a href="#test-swipe-8" >PHOTOS</a></li>
          </ul>
<!--===============================1 swipe start=====================================-->
          <div id="test-swipe-1" class="col s12 box">
            <div class="row deails">
               <div class="col s3 detail-box">
                  <div class="detail-header-icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
                  <div class="detail-header-value">12 Days</div>
               </div>

              <div class="col s3 detail-box">
                <div class="detail-header-icon"><i class="fa fa-arrows-h" aria-hidden="true"></i></div>
                <div class="detail-header-value">6/10 Physicality</div>
              </div>

              <div class="col s3 detail-box">
                <div class="detail-header-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                <div class="detail-header-value">Lohagdh-Location</div>
              </div>

              <div class="col s3 detail-box">
                <div class="detail-header-icon"><i class="fa fa-area-chart" aria-hidden="true"></i></div>
                <div class="detail-header-value">5602m Altitude</div>
              </div>

              <div class="col s3 detail-box">
                <div class="detail-header-icon"><i class="fa fa-money" aria-hidden="true"></i></div>
                <div class="detail-header-value">INR2500/preson</div>
              </div>
            </div>
            <div class="row detail_contant"> 
                  <?php echo $tourDetail["detail"]; ?>        
            </div>
          </div>
    <!--============================2 swipe start===============================================-->
    <div id="test-swipe-2" class="col s12 details-box-content">
      <div class="row detail_contant">
      <?php foreach($tourItinrary as $key=>$itinraryRow){ ?>
      <div class="row">
        <div class="itinrary-numbers"><a class="btn-floating btn-large waves-effect waves-light grey darken-3 center-align"><?php echo $itinraryRow["date"]; ?></a>
        </div>
        <div class="itinrary-details">
          <div class="card-panel">
           <div class="itinrary-heading">
             <span>Day <?php echo $itinraryRow["date"]; ?></span>
           </div>

           <div class="itinrary-content">
             <p><?php echo $itinraryRow["details"]; ?></p>
             
           </div>
          </div>
        </div>
      </div>
      <?php } ?>

    </div>
  </div>

     <!--===================3 swipe start=======================================-->
  <div id="test-swipe-3" class="col s12 details-box-content">
    <?php foreach($tourattractions as $key => $tourattractionsRow){ ?>

   
  <div class="contantt">
    <h6 class="attractions-title"><?php echo $tourattractionsRow['title']; ?>:</h6>
    <?php echo $tourattractionsRow['details']; ?>
    </div>
    
    <?php  } ?>

  </div>
 
  <!--===================4 swipe start=======================================-->
<!--   <div id="test-swipe-4" class="col s12 details-box-content">
    <div class="row detail_contant">
     <h5 class="date-title">Dates</h5> 
     <p class="date-content">July 30 to August 10 (CLOSE)</p>
     <p class="date-content">August 13 to August 24 (CLOSE)</p>
     <p class="date-content">August 25 to September 05 (CLOSE)</p>
     <p class="date-content">August 27 to September 07 (CLOSE)</p>
     <p class="date-content">September 10 to September 21 (CLOSE)</p>
    </div>
  </div> -->
  <!--===================5 swipe start=======================================-->
  <div id="test-swipe-5" class="col s12 details-box-content">
    <div>
      <h5 class="row rate_contant">RATES</h5>
    </div>
    <div class="row rate">   
      <h5><?php echo $tourDetail["price"]; ?> </h5>      
    </div> 
     
      <?php foreach($tourprice as $key=>$rateRow){ ?>

      <div class="row">  
      <h5 class="inclusion-title"><?php echo $rateRow['title']; ?></h5>          
         <?php echo $rateRow["detail"]; ?>
    </div>
    <?php } ?> 
 
    
</div>
  <!--===================6 swipe start=======================================-->
  <div id="map" class="col s12 details-box-content">
    <div class="row map-title"><?php echo $tourDetail["map_title"]; ?></div>
    
     <div class="row">
      <?php echo $tourDetail["map"]; ?>
    </div>
    
    
  </div>
 
<!--===================8 swipe start=======================================-->
 <div id="test-swipe-8" class="col s12 details-box-content">
   <div class="row ">
   
     <?php foreach($tourphoto as $key=>$photoRow) { ?>
     <div class="col m3 itinrary-img ">
       <img class="materialboxed responsive-img" src="<?php echo base_url(); ?>html/images/<?php echo $photoRow['photos'];  ?>">
     </div>
     <?php } ?>

     </div>
    </div>
 <!--=====================8  swipe End=======================================-->
  </div>
   <!--======================end of 9 cols =======================-->

  <!--=======================start 3 cols=========================-->
 <div class="col s3 main-side-box">
    <div class="row book">
   <!--===================first box==============================-->
       <div class="col s3 m12">
         <div class="card-panel side-box-content">
            <div class="icon">
              <i class="fa awesome fa-tag icon-flipped"></i></div>
              <span class="white-text">
                  <center>                   
                   <?php echo $tourDetail["price"]; ?>                 
                   </center>
              </span>
              <center><p>par person +5% GST</p></center>
              <div class="book-btn">
                <a class="waves-effect white btn first-box">Book Now</a>
              </div>              
          </div>
        </div>
 <!--===================second box==============================-->

        <div class="col s3 m12">
          <div class="card-panel side-box-content">
           <span class="box-2-heading">
                  Available Dates
           </span>
           <div class="opening">
            <p><u>October 07  to October 12 (OPEN)</u></p>
            <p><u>October 14  to October 19 (OPEN)</u></p>
            <p><u>October 18  to October 23 (OPEN)</u></p>
            <p><u>October 21  to October 26 (OPEN)</u></p>
            <p><u>October 28  to November 02 (OPEN)</u></p>
            <p><u>November 04 to November 09 (OPEN)</u></p>
            <p><u>October 14  to October 19 (OPEN)</u></p>
           </div>
          </div>
        </div>
 <!--===================third box==============================-->
        <div class="col s3 m12">
         <div class="card-panel side-box-content">
           <center><h4>Search Tours</h4></center>
           <center><p>Find our exciting tours today!</p></center>
            <div class="row">
             <form class="col s12">
              <div class="row">
                <div class="input-field col s12">
                <i class="fa awesome fa-search material-icons prefix" aria-hidden="true"></i>           
                  <input id="icon_prefix" type="text" class="validate">
                  <label for="icon_prefix" class="placeholder" >Search Tour</label>
                </div>
              </div>
             </form>
           </div>
          </div>
        </div>
 <!--===================forth box==============================-->
    <div class="col s3 m12">
      <div class="card-panel side-box-content">
        <div class="row">
          <form class="col s12">
            <div class="row">
              <div class="input-field col s12">
                <i class="awesome material-icons prefix">account_circle</i>
                <input id="icon_prefix" type="text" class="validate">
                <label for="icon_prefix" class="placeholder">First Name</label>
              </div>
              <div class="input-field col s12">
              <i class="fa awesome fa-envelope-o material-icons prefix" aria-hidden="true"></i>
               <input id="icon_telephone" type="tel" class="validate">
                <label for="icon_telephone" class="placeholder">Email</label>
              </div>
               <div class="input-field col s12">
                <i class=" awesome material-icons prefix">phone</i>
                <input id="icon_telephone" type="tel" class="validate">
                <label for="icon_telephone" class="placeholder">Contact No</label>
              </div>
               <div class="input-field col s12">
                <i class="fa awesome fa-map-marker material-icons prefix" aria-hidden="true"></i>
                <input id="icon_telephone" type="tel" class="validate">
                <label for="icon_telephone" class="placeholder">Destination</label>
              </div>
               <div class="input-field col s12">
                <i class="fa awesome fa-calendar material-icons prefix" aria-hidden="true"></i>
                <input id="icon_telephone" type="tel" class="validate">
                <label for="icon_telephone" class="placeholder">Month of Travel</label>
              </div>
              <p style="margin-left: 15px;">
                <input type="checkbox" id="test5"  />
                <label for="test5" class="placeholder" >i'm not a robot</label>
              </p>
              <center><a class="waves-effect white btn first-box">Submit</a></center>
            </div>
          </form>
        </div>
      </div>
    </div>
   <!--==========================end of forth box==============================-->
     </div> 
    </div>
 <!--=============================End of cols 3=========================-->
  </div>
    <!--=====================end of lohardagh container=======-->
  </div>
</div>
<!--===================== END full or main container container =================--> 

