<div class="tourList-area">
          <div class="tour-img-area col s12 m4">
            <img src="<?php echo base_url(); ?>html/images/<?php echo $tourRow['home_banner']; ?>" class="card-image">
          </div>
          <div class="tour-content col s12 m8">
            <div class="row" style="border-bottom: 1px solid #ddd;">
              <div class="col s12 m8">
                <h5 class="tour-title"><?php echo $tourRow['name']; ?></h5>
              </div>
              <div class="col s12 m4">
                <i class="price fa fa-inr" aria-hidden="true"><?php echo $tourRow['price']; ?></i>
                <i class="fa fa-inr off-price-inr" aria-hidden="true"></i> <span  class="off-price"><?php echo $tourRow['price']; ?></span><span class="perHead">/ Person</span>
              </div>  
            </div>
            <h6 class="tour-sub-title"><?php echo $tourRow['tour_name']; ?></h6>               
              <p><?php echo substr($tourRow['detail'],0,135)."...."; ?></p>
              <div class="row">
                <a class="col s12 m4  waves-effect waves-light btn black" href="<?php echo base_url();?>tour/id/<?php echo $tourRow['id']; ?>">VIEW MORE</a>
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