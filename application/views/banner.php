<?php $this->load->view("admin-nav"); ?>
<div class="container row">
<div class="col m2 sticky" id="sidebar">
  <div class="sidebar-desktop">
   <ul>
    <li><center><label><h5>Menu</h5></label></center></li>
    <li ng-class="url == '' ? 'active' : ''" >
        <a href="<?php echo base_url() ?>admin/admin_tour" class="waves-effect waves-block <?php if (strpos($_SERVER['PHP_SELF'], 'admin_tour') !== false) { ?> active-menu <?php } ?>">
            <span>Add Tour</span>
        </a>
    </li>
    <li ng-class="url == 'download' ? 'active' : ''">
        <a href="<?php echo base_url() ?>admin/banner" class="waves-effect waves-block <?php if (strpos($_SERVER['PHP_SELF'], 'banner') !== false) { ?> active-menu <?php } ?>">
            <span>Banner</span>
        </a>
    </li>
    <li ng-class="url == 'download' ? 'active' : ''">
        <a href="<?php echo base_url() ?>admin/Month/" class="waves-effect waves-block <?php if (strpos($_SERVER['PHP_SELF'], 'Month') !== false) { ?> active-menu <?php } ?>">
            <span>Month</span>
        </a>
    </li>

     <li ng-class="url == 'download' ? 'active' : ''">
        <a href="<?php echo base_url() ?>Tour_details/itinraryDashboard/" class="waves-effect waves-block <?php if (strpos($_SERVER['PHP_SELF'], 'itinraryDashboard') !== false) { ?> active-menu <?php } ?>">
            <span>Itinrary</span>
        </a>
    </li>

      <li ng-class="url == 'download' ? 'active' : ''">
        <a href="<?php echo base_url() ?>Tour_details/attractionsDashboard/" class="waves-effect waves-block <?php if (strpos($_SERVER['PHP_SELF'], 'attractionsDashboard') !== false) { ?> active-menu <?php } ?>">
            <span>Attractions</span>
        </a>
    </li>

    <li ng-class="url == 'download' ? 'active' : ''">
        <a href="<?php echo base_url() ?>Tour_details/rateDashboard/" class="waves-effect waves-block <?php if (strpos($_SERVER['PHP_SELF'], 'rateDashboard') !== false) { ?> active-menu <?php } ?>">
            <span>Rate</span>
        </a>
    </li>

      <li ng-class="url == 'download' ? 'active' : ''">
        <a href="<?php echo base_url() ?>Tour_details/photoDashboard/" class="waves-effect waves-block <?php if (strpos($_SERVER['PHP_SELF'], 'photoDashboard') !== false) { ?> active-menu <?php } ?>">
            <span>Photo</span>
        </a>
    </li>

     <li ng-class="url == 'download' ? 'active' : ''">
        <a href="<?php echo base_url() ?>Testimonials/" class="waves-effect waves-block <?php if (strpos($_SERVER['PHP_SELF'], 'Testimonials') !== false) { ?> active-menu <?php } ?>">
            <span>Testimonials</span>
        </a>
    </li>
  </ul>
  </div>
</div>

<div class="col s12 m10">

 <div class="row">
 <div class="card-panel">
  <div class="page-header">
      <div class="page-title">Banner Management</div>      
      <div class="page-button"><a class="waves-effect waves-light btn blue" id="addbanner">Add</a></div>
  </div>
   <div class="page-content">
    <table border="1" class="responsive-table centered">    
            <thead>
              <tr>
                <th>Order</th>       
                <th>Tour Name</th>
                <th>Banner</th>
                <th>action</th>    
              </tr>
            </thead>
              <tbody>
                  <?php foreach ($bannerimg as $key => $banner) { ?>
                  <tr id="banner<?php echo $banner["id"]; ?>">                  
                    <td><?php echo $banner['id'];  ?></td>
                    <td><?php echo $banner['tour_name'];  ?></td>
                    <td>  <img src="<?php echo base_url() ?>html/images/<?php echo $banner['banner']; ?>" width="150" height="150"/></td>
                     
                    <td class="right-align tour-btn">
                      <a data-banner-id="<?php echo $banner['id']; ?>" class="btn-floating waves-effect waves-light banner-edit-btn"><i class="material-icons edit-icon">mode_edit</i></a>
                      <a data-banner-id="<?php echo $banner['id']; ?>" class="btn-floating waves-effect waves-light banner-delete-btn"><i class="material-icons delete-icon">delete</i></a>
                    </td>
                  </tr>
            <?php } ?>
              </tbody>
          </table>
       </div>
      </div>
     </div>  
    </div>  
  </div>
