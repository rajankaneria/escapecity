<div id="detailpage" class="parallax-container">
  <div class="parallax">
    <div class="parallax-overlay"></div><img src="<?php echo base_url();?>html/images/<?php echo $tourDetail['home_banner']; ?>">
   </div>
   <div class="container">
     <div class="page-title" style="color:#fff"><?php echo $tourDetail['name']; ?></div>
   </div>   
 </div> 
<div class="container">
  <div class="row">
    <?php foreach ($tourDetails as $key => $tourRow) { ?>       
          <div class="col s4 card_panel">
              <div class="card">
                <div class="card-image">
                  <img src="<?php echo base_url(); ?>html/images/<?php echo $tourRow['home_banner']; ?>" class="card-image">
                </div>
                <div class="card-content">
                 <h6 class="card-title"><?php echo $tourRow['name']; ?></h6>
                <h5 class="card-sub-title"><?php echo $tourRow['tour_name']; ?></h5>               
                  <p><?php echo substr($tourRow['detail'],0,135)."...."; ?></p>
                   <a class="waves-effect waves-light btn grey darken-4 lighten-2" href="<?php echo base_url();?>tour/id/<?php echo $tourRow['id']; ?>">Details</a>
                </div>                
              </div> 
          </div>
          <?php } ?>
  </div>
</div>
