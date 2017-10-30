<div id="detailpage" class="parallax-container">
  <div class="parallax">
    <div class="parallax-overlay"></div><img src="<?php echo base_url();?>html/images/<?php echo $tourDetail['home_banner']; ?>">
   </div>
   <div class="container">
     <div class="page-title" style="color:#fff"><?php echo $tourDetail['name']; ?></div>
   </div>
   
 </div>

 <!--===================== START full or main container container =================--> 
<div class="fullwidth-container tab_container">
   <div class="row">
     <div class="lohagadh_container">
        <div class="col s9 tabs-title">
         <ul id="tabs-swipe-demo" class="tabs">
            <li class="tab col s3 tab-title"><a  href="#test-swipe-1" class="active">DETAILS</a></li>
            <li class="tab col s3 "><a  href="#test-swipe-2">ITINRARY</a></li>
            <li class="tab col s3 "><a href="#test-swipe-3">Attractions</a></li>
            <!-- <li class="tab col s3 "><a href="#test-swipe-4" >DATES</a></li> -->
           <!--  <li class="tab  col s3"><a href="#test-swipe-5" >RATES</a></li> -->
            <li class="tab col s3"><a href="#map">MAPS</a></li>          
            <li class="tab col s3 "><a href="#test-swipe-8" >PHOTOS</a></li>
          </ul>
<!--===============================1 swipe start=====================================-->
          <div id="test-swipe-1" class="col s12 box">
            <div class="row deails">
               <div class="col s3 detail-box">
                  <div class="detail-header-icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
                  <div class="detail-header-value"><?php echo $tourDetail['duration'];  ?></div>
               </div>

              <div class="col s3 detail-box">
                <div class="detail-header-icon"><i class="fa fa-arrows-h" aria-hidden="true"></i></div>
                <div class="detail-header-value"><?php echo $tourDetail['dificulty'];  ?></div>
              </div>


              <div class="col s3 detail-box">
                <div class="detail-header-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                <div class="detail-header-value"><?php echo $tourDetail['location'];  ?></div>
              </div>

              <div class="col s3 detail-box">
                <div class="detail-header-icon"><i class="fa fa-area-chart" aria-hidden="true"></i></div>
                <div class="detail-header-value"><?php echo $tourDetail['height'];  ?></div>
              </div>

              <div class="col s3 detail-box">
                <div class="detail-header-icon"><i class="fa fa-money" aria-hidden="true"></i></div>
                <div class="detail-header-value"><?php echo $tourDetail['price'];  ?></div>
              </div>
            </div>
            <div class="row detail_contant"> 
                  <?php echo $tourDetail["detail"]; ?>       
                   <?php foreach($tourprice as $key=>$rateRow){ ?>

                    <div class="row">  
                    <h5 class="inclusion-title"><?php echo $rateRow['title']; ?></h5>          
                       <?php echo $rateRow["detail"]; ?>
                  </div>
                  <?php } ?>  
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
  <!-- <div id="test-swipe-5" class="col s12 details-box-content"> -->
   <!--  <div>
      <h5 class="row rate_contant">RATES</h5>
    </div> -->
    <!-- <div class="row rate">   
      <h5><?php echo $tourDetail["price"]; ?> </h5>      
    </div> 
     
      <?php foreach($tourprice as $key=>$rateRow){ ?>

      <div class="row">  
      <h5 class="inclusion-title"><?php echo $rateRow['title']; ?></h5>          
         <?php echo $rateRow["detail"]; ?>
    </div>
    <?php } ?> 
 
    
</div> -->
  <!--===================6 swipe start=======================================-->
  <div id="map" class="col s12 details-box-content">
      <div class="row">
      <?php echo $tourDetail["map"]; ?>
    </div>
    
    
  </div>
 
<!--===================8 swipe start=======================================-->
 <div id="test-swipe-8" class="col s12 details-box-content">
   <div class="row ">
   
     <?php foreach($tourphoto as $key=>$photoRow) { ?>
     <div class="col m3 itinrary-img ">
       <img class="materialboxed responsive-img" src="<?php echo base_url(); ?>html/images/Detail/<?php echo $photoRow['photos'];  ?>">
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
            <!-- <div class="icon">
              </div> -->
              <div class="price-Text">
                  <center>
                   <span class="fa awesome fa-2x fa-tag icon-flipped"> &nbsp; <span class="ratePrice"><?php echo $tourDetail["price"]; ?></span>
                   </center>
              </div>
              <center><p class="prPerson">Per Person +5% GST</p></center>
              <div class="book-btn">
                <a class="waves-effect white btn first-box">Book Now</a>
              </div>              
          </div>
        </div>
 <!--===================second box==============================-->
       <!-- <div class="col s3 m12">
          <div class="card-panel side-box-content">
           <h4 class="box-2-heading">Available Dates</h4>
           <div class="opening">
            <p>October 07  to October 12 (OPEN)</p>
            <p>October 14  to October 19 (OPEN)</p>
            <p>October 18  to October 23 (OPEN)</p>
            <p>October 21  to October 26 (OPEN)</p>
            <p>October 28  to November 02 (OPEN)</p>
            <p>November 04 to November 09 (OPEN)</p>
            <p>October 14  to October 19 (OPEN)</p>
           </div>
          </div>
        </div>
      -->
 <!--===================third box==============================-->
        <?php $this->load->view('sidebarFram'); ?>
   <!--==========================end of forth box==============================-->
     </div> 
    </div>
 <!--=============================End of cols 3=========================-->
  </div>
    <!--=====================end of lohardagh container=======-->
  </div>
</div>
<!--===================== END full or main container container =================--> 

