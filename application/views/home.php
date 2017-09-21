<!--=========================== main slider ========================-->
<div id="mainSlider" class="carousel carousel-slider center z-depth-1" data-indicators="true">
   
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

<div class="parallax-container home_parallax z-depth-1">
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


<!-- ================ Find Tour By Months Start Here =================== -->
<div class="row white z-depth-1" style="margin-top:0px; overflow: hidden;">
  <div class="tbm-title">
    <h5>Find a Tour by <span>Month</span></h5>
  </div>
  <div class="tourByMonth-area">
    <div class="carousel carousel-slider tmb-slider center" data-indicators="true">
      <div class="carousel-item" href="#one!">
        <div class="row">
          <div class="col m3">
            <div class="box">
              <figure class="snip1445">
                <img src="<?php echo base_url(); ?>html/images/image-holder.jpg" alt="sample84" />
                <figcaption>
                  <div>
                    <h4>January</h4>
                  </div>
                </figcaption>
                <a href="#"></a>
              </figure>
            </div>
          </div>
          <div class="col m3">
            <div class="box">
              <figure class="snip1445">
                <img src="<?php echo base_url(); ?>html/images/image-holder.jpg" alt="sample84" />
                <figcaption>
                  <div>
                    <h4>February</h4>
                  </div>
                </figcaption>
                <a href="#"></a>
              </figure>
            </div>
          </div>
          <div class="col m3">
            <div class="box">
              <figure class="snip1445">
                <img src="<?php echo base_url(); ?>html/images/image-holder.jpg" alt="sample84" />
                <figcaption>
                  <div>
                    <h4>March</h4>
                  </div>
                </figcaption>
                <a href="#"></a>
              </figure>
            </div>
          </div>
          <div class="col m3">
            <div class="box">
              <figure class="snip1445">
                <img src="<?php echo base_url(); ?>html/images/image-holder.jpg" alt="sample84" />
                <figcaption>
                  <div>
                    <h4>April</h4>
                  </div>
                </figcaption>
                <a href="#"></a>
              </figure>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item" href="#two!">
         <div class="row">
          <div class="col m3">
            <div class="box">
               <figure class="snip1445">
                <img src="<?php echo base_url(); ?>html/images/image-holder.jpg" alt="sample84" />
                <figcaption>
                  <div>
                    <h4>May</h4>
                  </div>
                </figcaption>
                <a href="#"></a>
              </figure>
            </div>
          </div>
          <div class="col m3">
            <div class="box">
               <figure class="snip1445">
                <img src="<?php echo base_url(); ?>html/images/image-holder.jpg" alt="sample84" />
                <figcaption>
                  <div>
                    <h4>June</h4>
                  </div>
                </figcaption>
                <a href="#"></a>
              </figure>
            </div>
          </div>
          <div class="col m3">
            <div class="box">
               <figure class="snip1445">
                <img src="<?php echo base_url(); ?>html/images/image-holder.jpg" alt="sample84" />
                <figcaption>
                  <div>
                    <h4>July</h4>
                  </div>
                </figcaption>
                <a href="#"></a>
              </figure>
            </div>
          </div>
          <div class="col m3">
            <div class="box">
               <figure class="snip1445">
                <img src="<?php echo base_url(); ?>html/images/image-holder.jpg" alt="sample84" />
                <figcaption>
                  <div>
                    <h4>August</h4>
                  </div>
                </figcaption>
                <a href="#"></a>
              </figure>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item " href="#three!">
         <div class="row">
          <div class="col m3">
            <div class="box">
               <figure class="snip1445">
                <img src="<?php echo base_url(); ?>html/images/image-holder.jpg" alt="sample84" />
                <figcaption>
                  <div>
                    <h4>September</h4>
                  </div>
                </figcaption>
                <a href="#"></a>
              </figure>
            </div>
          </div>
          <div class="col m3">
            <div class="box">
               <figure class="snip1445">
                <img src="<?php echo base_url(); ?>html/images/image-holder.jpg" alt="sample84" />
                <figcaption>
                  <div>
                    <h4>October</h4>
                  </div>
                </figcaption>
                <a href="#"></a>
              </figure>
            </div>
          </div>
          <div class="col m3">
            <div class="box">
               <figure class="snip1445">
                <img src="<?php echo base_url(); ?>html/images/image-holder.jpg" alt="sample84" />
                <figcaption>
                  <div>
                    <h4>November</h4>
                  </div>
                </figcaption>
                <a href="#"></a>
              </figure>
            </div>
          </div>
          <div class="col m3">
            <div class="box">
               <figure class="snip1445">
                <img src="<?php echo base_url(); ?>html/images/image-holder.jpg" alt="sample84" />
                <figcaption>
                  <div>
                    <h4>December</h4>
                  </div>
                </figcaption>
                <a href="#"></a>
              </figure>
            </div>
          </div>
        </div>
      </div>
  </div>
        
      
  </div>  
</div>
<!-- ================ Find Tour By Months Over Here =================== -->

<!-- ==================== Latest Post ================= -->
<div class="row">
  <div class="col s12 m6">
    <h5 class="latest-blog-title">Latest <span>Blog</span></h5>


    <div class="blog-item">
        <div class="blog-image-container"><img src="<?php echo base_url(); ?>html/images/blog/<?php echo $latestBlog["image"]; ?>" class="responsive-img"></div>
        <div class="blog-details">
          <div class="blog-main-title"><?php echo $latestBlog["title"]; ?></div>
          <div style="overflow: hidden;">
            <div class="blog-date">21st September, 2017</div>
            <div class="blog-author">- by <span><?php echo "John Doe"; ?></span></div>
          </div>
          <p class="blog-content"><?php echo substr($latestBlog["details"],0,500); ?>...</p>
        </div>
    </div>

      <!--
      <div class="blog-area z-depth-1">
        <div class="blog-bg-img">
          <img src="<?php echo base_url(); ?>html/images/blog/<?php echo $latestBlog["image"]; ?>" class="responsive-img">
        </div>
        <div class="blog-description">
            <h5 class="blog-title"><?php echo $latestBlog["title"]; ?></h5>
            <p class="blog-desc"><?php echo substr($latestBlog["details"],0,700); ?>...</p>
            <div class="readMore-btn"><center><button class="btn btn-black">Read More</button></center></div>
        </div>
      </div>
    -->
  </div>
  <div class="col s12 m6">
    <h5 class="latest-blog-title">Latest <span>Testimonials</span></h5>
    <div class="Testimonials-area">
      <div class="carousel carousel-slider testimoni-slider center" data-indicators="true">

        <!-- <div class="carousel-item red white" href="#one!">
          <h2 class="testimonials-name">Firts Name</h2>

        <div class="carousel-item red white" href="#one!">
            <div class="testimonials-img">
              <img src="<?php echo base_url(); ?>html/images/image-holder.jpg" class="testi-img">
              <div class="testi-name">
                <p>Testimonial one</p>
              </div>
            </div>
            <div class="user-testimonials">
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
              </p>
            </div>
        </div>
        <div class="carousel-item red white" href="#one!">

            <div class="testimonials-img">
              <img src="<?php echo base_url(); ?>html/images/image-holder.jpg" class="testi-img">
            </div>
            <div class="user-testimonials">
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
              </p>
            </div>
        </div> -->
        <?php foreach($testDetails as $key => $testRow){?>
        <div class="carousel-item" href="#one!">

            <div class="testimonials-img">
              <img src="<?php echo base_url(); ?>html/images/testimonials/<?php echo $testRow['image'];?>" class="testi-img">
            </div>
            <div class="testimonial-title"><?php echo $testRow['title'];?></div>
            <div class="user-testimonials">
              <p>
                <?php echo $testRow['details'];?>
              </p>
            </div>
        </div>
        <?php } ?>
       
      </div>
    </div>
  </div>
</div>  