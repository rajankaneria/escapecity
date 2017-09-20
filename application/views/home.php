<!--=========================== main slider ========================-->
<div id="mainSlider" class="carousel carousel-slider center" data-indicators="true">
   
<!--=======================slider for North India tours=======================-->

    <div class="carousel-item  white-text" href="<?php echo base_url();?>details">
      <div class="row">
        <div class="col s4 m4">
          <div class="location-title">Roopkund Trek</div>
      <div class="parallax-overlay"></div><img src="<?php echo base_url(); ?>html/images/roopkund.jpg"></div>
      <div class="col s4 m4">
        <div class="location-title">Leh Ladakh</div>
      <div class="parallax-overlay"></div><img src="<?php echo base_url(); ?>html/images/Ladakh.jpg"></div>
      <div class="col s4 m4">
        <div class="location-title"> Valley of Flowers</div>
      <div class="parallax-overlay"></div><img src="<?php echo base_url(); ?>html/images/flowers.jpg"></div>
     </div> 
     <div class="main-slider-item-title">North India</div>       
  </div>
<!--=======================slider for East India==============================-->

   <div class="carousel-item amber white-text" href="<?php base_url();?>dang">
     <div class="row">
      <div class="col s4 m4">
        <div class="location-title"> Beyul Pamako Trek</div>
      <div class="parallax-overlay"></div><img src="<?php echo base_url(); ?>html/images/beyul.jpg"></div>
      <div class="col s4 m4">
        <div class="location-title"> The Bailey Trail Trek</div>
      <div class="parallax-overlay"></div><img src="<?php echo base_url(); ?>html/images/bailey.jpg"></div>
      <div class="col s4 m4">
        <div class="location-title">Lapti Valley Trek</div>
      <div class="parallax-overlay"></div><img src="<?php echo base_url(); ?>html/images/lapti.jpg"></div>    
     </div>
     <div class="main-slider-item-title">East India</div>
   </div>
<!--=======================slider for West India================================-->
    <div class="carousel-item green white-text" href="<?php base_url();?>mulher">
       <div class="row">
        <div class="col s4 m4">
          <div class="location-title">Bhimashankar</div>
        <div class="parallax-overlay"></div><img src="<?php echo base_url(); ?>html/images/bhimashnkar.jpg"></div>
        <div class="col s4 m4">
          <div class="location-title"> Lohagad</div>
        <div class="parallax-overlay"></div><img src="<?php echo base_url(); ?>html/images/Lohagad.jpg"></div>
        <div class="col s4 m4">
          <div class="location-title">Harihar Trek</div>
        <div class="parallax-overlay"></div><img src="<?php echo base_url(); ?>html/images/harihar.jpg"></div>
       </div>  
       <div class="main-slider-item-title">West India</div>
    </div>
<!--=======================slider for South India============================-->
    <div class="carousel-item blue white-text" href="<?php base_url();?>songadh">
      <div class="row">
        <div class="col s4 m4">
           <div class="location-title">Coorg, Karnataka,</div>
        <div class="parallax-overlay"></div><img src="<?php echo base_url(); ?>html/images/coorg.jpg"></div>
        <div class="col s4 m4">
           <div class="location-title">Munnar</div>
        <div class="parallax-overlay"></div><img src="<?php echo base_url(); ?>html/images/Munnar.jpg"></div>
        <div class="col s4 m4">
           <div class="location-title"> Kodachadri, Karnataka</div>
        <div class="parallax-overlay"></div><img src="<?php echo base_url(); ?>html/images/kodachadri.jpg"></div>
       </div>
       <div class="main-slider-item-title">South India</div>
    </div>   
  </div>
<!--=======================End of main slider================================-->


<!--=======================START MAIN tours CARD  ===========================--> 

<div class="parallax-container home_parallax">
    <div class="parallax">
      <div class="parallax-overlay"></div>
        <img src="<?php echo base_url(); ?>html/images/back_img.jpg">
    </div>
<!--=====================start container=====================================-->
    <div class="container">
        <div class="carousel-fixed-item center">
          <div class="page-sub-title">Take a Look at Our</div>
          <div class="page-main-title">MOST POPULAR TOURS</div>
        </div>

      <div id="toursSlider" class="carousel carousel-slider center hide-on-med-and-down" data-indicators="true">
        
<!--======================1.North India ==================================-->          
        <div class="carousel-item carousel_card hide-on-med-and-down" href="#one!">
          <div class="row">
<!--========================first card========================================-->
      <?php foreach ($tourDetails as $key => $tourRow) { ?>       
          <div class="col s4 card_panel">
              <div class="card">
                <div class="card-image">
                  <img src="<?php echo base_url(); ?>html/images/<?php echo $tourRow['home_banner']; ?>" class="card-image">
                </div>
                <div class="card-content">
                 <h6 class="card-title" style="font-size: 15px"><?php echo $tourRow['name']; ?></h6>
                <h5 class="card-sub-title"><?php echo $tourRow['region_id']; ?></h5>
               
                  <p><?php echo substr($tourRow['detail'],0,135)."..........."; ?></p>
                   <a class="waves-effect waves-light btn grey darken-4 lighten-2" href="<?php echo base_url();?>">Details</a>
                </div>                
              </div> 
          </div>
          <?php } ?>

      </div>
    </div>
<!--===============================END North India=================================--> 

  </div> 
<!-- Ende Deskotop tour slider -->  

<!-- Start here mobile responsive single slider  -->
<div class="row">
<div id="mobileSlider" class="carousel carousel-slider-mobile center">
    
      <div class="carousel-item col s12" href="#one!" height="500">
          <div class="tourBox-area">
            <div class="imagesBox-area">
              <img src="<?php echo base_url(); ?>html/images/Roopkundcard.jpg" class="responsive-img">
            </div>
            <div class="tourContent-area">
              <div class="tourTitle-name">
                <h5>Roopkund Trek</h5>
              </div>
              <div class="tourSubtitle-area">
                <p>North India</p>
              </div>
              <div class="tourDescripton-area">
                <p>I am a very simple card. I am good at containing small bits of information.
                  I am convenient because I require little markup to use effectively.</p>
              </div>
              <div class="tourDetails-button">
                <a class="waves-effect tourdetails-black-btn waves-light btn">Details</a>
              </div>
            </div>
          </div>
      </div>
      <div class="carousel-item col s12" href="#two!">
           <div class="tourBox-area">
            <div class="imagesBox-area">
              <img src="<?php echo base_url(); ?>html/images/leh.jpg" class="responsive-img">
            </div>
            <div class="tourContent-area">
              <div class="tourTitle-name">
                <h5>Leh Ladakh</h5>
              </div>
              <div class="tourSubtitle-area">
                <p>North India</p>
              </div>
              <div class="tourDescripton-area">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              </div>
              <div class="tourDetails-button">
                <a class="waves-effect tourdetails-black-btn waves-light btn">Details</a>
              </div>
            </div>
          </div>
      </div>
      <div class="carousel-item col s12" href="#three!">
           <div class="tourBox-area">
            <div class="imagesBox-area">
              <img src="<?php echo base_url(); ?>html/images/rishikes.jpg" class="responsive-img">
            </div>
            <div class="tourContent-area">
              <div class="tourTitle-name">
                <h5>Rishikesh, Shivpuri</h5>
              </div>
              <div class="tourSubtitle-area">
                <p>North India</p>
              </div>
              <div class="tourDescripton-area">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              </div>
              <div class="tourDetails-button">
                <a class="waves-effect tourdetails-black-btn waves-light btn">Details</a>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>

<!-- Over here mobile responsive single slider  -->




 </div> 
 
 <!--============================END container====================================-->  
</div>
<!--============================END MAIN tours card ===================================-->




    


    
            