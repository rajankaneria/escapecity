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
          <li><a href="<?php echo base_url() ?>tour/tourByMonth/1/">January</a></li>
          <li><a href="<?php echo base_url() ?>tour/tourByMonth/2/">February</a></li>
          <li><a href="<?php echo base_url() ?>tour/tourByMonth/3/">March</a></li>
          <li><a href="<?php echo base_url() ?>tour/tourByMonth/4/">April</a></li>
          <li><a href="<?php echo base_url() ?>tour/tourByMonth/5/">May</a></li>
          <li><a href="<?php echo base_url() ?>tour/tourByMonth/6/">June</a></li>
        </ul>
        <ul class="col m6 s6" style="margin-top: 7px;">
          <li><a href="<?php echo base_url() ?>tour/tourByMonth/7/">July</a></li>
          <li><a href="<?php echo base_url() ?>tour/tourByMonth/8/">August</a></li>
          <li><a href="<?php echo base_url() ?>tour/tourByMonth/9/">September</a></li>
          <li><a href="<?php echo base_url() ?>tour/tourByMonth/10/">October</a></li>
          <li><a href="<?php echo base_url() ?>tour/tourByMonth/11/">November</a></li>
          <li><a href="<?php echo base_url() ?>tour/tourByMonth/12/">December</a></li>
        </ul>
        
      </div>
      <div class="col s12 m4 popular-area">
        <h5>New Popular Destination</h5>
        <ul class="row">
          <div class=" col m6 s12">
            <li><a href="#">Roopkund Trek</a></li>
            <li><a href="#">Leh Ladakh</a></li>
            <li><a href="#">Valley of Flowers</a></li>
            <li><a href="#">Beyul Pamako Trek</a></li>
            <li><a href="#">The Bailey Trail Trek</a></li>
            <li><a href="#">Lapti Valley Trek</a></li>
          </div>
          <div class=" col m6 s12">
            <li><a href="#">Bhimashankar</a></li>
            <li><a href="#">Lohagad</a></li>
            <li><a href="#">Harihar Trek</a></li>
            <li><a href="#">Coorg, Karnataka,</a></li>
            <li><a href="#">Munnar</a></li>
            <li><a href="#">Kodachadri, Karnataka</a></li>
          </div>
        </ul>
      </div>
      <div class="col s12 m4 address-area">
        <h5>Contact Us</h5>
        <ul class="address"> 
          <li><strong>Escape City</strong></li>
          <li>A-4, 303,L B PARK, Besides Abhishek Restaurant,</li>
          <li>Opp Bhavik Complex Ghod Dod Road,</li>
          <li>Surat 395007</li>
        </ul>
        <ul class="contact-number">
          <i class="call fa fa-phone-square" aria-hidden="true">&nbsp; (+91) 97272 20481</i>
          <i class="call fa fa-phone-square" aria-hidden="true">&nbsp; (+91) 99986 20481</i>
        </ul>
        <ul class="mail-address-area">
          <a href="mailto:info@escapcity.com"><i class="mail-address fa fa-envelope" aria-hidden="true">&nbsp;<span style="font-family: 'Roboto', sans-serif !important;"> info@escapcity.com</span></i>
          </a>
          <a href="mailto:escapcity@gmail.com"><i class="mail-address fa fa-envelope" aria-hidden="true">&nbsp; <span style="font-family:'Roboto', sans-serif;">escapcity@gmail.com</span></i>
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