 <footer class="page-footer">

  <div class="parallax-container">
    <div class="parallax">
      <img src="<?php echo base_url(); ?>html/images/lapti.jpg">
  </div> 
  <div class="footer-area">
    <div class="row">
      <div class="col m4 s12 trip-area">
        <h5>MONTH WISE TRIPS </h5>
        <ul class="col m4 s6" style="margin-top: 7px;">
          <li><a href="#">January</a></li>
          <li><a href="#">February</a></li>
          <li><a href="#">March</a></li>
          <li><a href="#">April</a></li>
          <li><a href="#">May</a></li>
          <li><a href="#">June</a></li>
        </ul>
        <ul class="col m6 s6" style="margin-top: 7px;">
          <li><a href="#">July</a></li>
          <li><a href="#">August</a></li>
          <li><a href="#">September</a></li>
          <li><a href="#">October</a></li>
          <li><a href="#">November</a></li>
          <li><a href="#">December</a></li>
        </ul>
        
      </div>
      <div class="col s12 m4 popular-area">
        <h5>New Popular Destination</h5>
        <ul>
          <li><a href="#">Destination 1</a></li>
          <li><a href="#">Destination 2</a></li>
          <li><a href="#">Destination 3</a></li>
          <li><a href="#">Destination 4</a></li>
          <li><a href="#">Destination 5</a></li>
          <li><a href="#">Destination 6</a></li>
        </ul>
      </div>
      <div class="col s12 m4 address-area">
        <h5>Contact Us</h5>
        <ul class="address"> 
          <li><strong>Intelliworkz Business</strong></li>
          <li>Solutions F - 1003 Titanium City Center,</li>
          <li>Nr. Sachin Tower, Anandnagar Road, Prahaladnagar,</li>
          <li>Satellite, Ahmedabad - 380015</li>
        </ul>
        <ul class="contact-number">
          <i class="call fa fa-phone-square" aria-hidden="true">&nbsp; (+91) 98796 36303</i>
          <i class="call fa fa-phone-square" aria-hidden="true">&nbsp; (+91) 94278 01299</i>
        </ul>
        <ul class="mail-address-area">
          <a href="mailto:info@escapcity.com"><i class="mail-address fa fa-envelope" aria-hidden="true">&nbsp;<span style="font-family: "Roboto", sans-serif !important;"> info@escapcity.com</span></i>
          </a>
          <a href="mailto:escapcity@gmail.com"><i class="mail-address fa fa-envelope" aria-hidden="true">&nbsp; <span style="font-family: "Roboto", sans-serif;">escapcity@gmail.com</span></i>
          </a>
        </ul>  
      </div>
    </div>
  </div>
</div>
  <div class="footer-copyright">
    <div class="footer-copyright-area">
    © 2017 <a href="#">escapcity.com</a> | all Rights reserved. &nbsp;&nbsp;
    
      Developed by : &nbsp;<a href="http://intelliworkz.com/" target="_page"><span>Intelliworkz.com</span></a>
    </div>
    <div class="right footer-links">
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Blogs</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </div>
  </div>
</footer>
            




	 	<input type="hidden" id="site_url" value="<?php echo site_url(); ?>" />
	  	<input type="hidden" id="base_url" value="<?php echo base_url(); ?>" />
	  	<!--  Scripts-->
	  	<?php foreach($jsFiles as $fileName){ ?>
	  	<script src="<?php echo base_url(); ?>html/js/<?php echo $fileName; ?>"></script>
	  	<?php } ?>
	</body>
</html>