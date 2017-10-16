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
        <a href="<?php echo base_url() ?>admin/Month/" class="waves-effect waves-block <?php if (strpos($_SERVER['PHP_SELF'], 'banner') !== false) { ?> active-menu <?php } ?>">
            <span>Month</span>
        </a>
    </li>

     <li ng-class="url == 'download' ? 'active' : ''">
        <a href="<?php echo base_url() ?>Tour_details/itinraryDashboard/" class="waves-effect waves-block <?php if (strpos($_SERVER['PHP_SELF'], 'banner') !== false) { ?> active-menu <?php } ?>">
            <span>Itinrary</span>
        </a>
    </li>

      <li ng-class="url == 'download' ? 'active' : ''">
        <a href="<?php echo base_url() ?>Tour_details/attractionsDashboard/" class="waves-effect waves-block <?php if (strpos($_SERVER['PHP_SELF'], 'banner') !== false) { ?> active-menu <?php } ?>">
            <span>Attractions</span>
        </a>
    </li>

    <li ng-class="url == 'download' ? 'active' : ''">
        <a href="<?php echo base_url() ?>Tour_details/rateDashboard/" class="waves-effect waves-block <?php if (strpos($_SERVER['PHP_SELF'], 'banner') !== false) { ?> active-menu <?php } ?>">
            <span>Rate</span>
        </a>
    </li>

      <li ng-class="url == 'download' ? 'active' : ''">
        <a href="<?php echo base_url() ?>Tour_details/photoDashboard/" class="waves-effect waves-block <?php if (strpos($_SERVER['PHP_SELF'], 'banner') !== false) { ?> active-menu <?php } ?>">
            <span>Photo</span>
        </a>
    </li>

     <li ng-class="url == 'download' ? 'active' : ''">
      <a href="<?php echo base_url() ?>Testimonials/" class="waves-effect waves-block <?php if (strpos($_SERVER['PHP_SELF'], 'banner') !== false) { ?> active-menu <?php } ?>">
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
      <div class="page-title">Tour Management</div>      
     <!--  <div class="page-button"><a class="waves-effect waves-light btn blue" id="addPhotos">Photo List</a></div> -->
  </div>
   <div class="page-content">
    <table border="1" class="responsive-table centered">
            <thead>
              <tr>
                <th>Order</th>
                <th>Name</th>
                <th>Tour Type</th>
                <th>Region</th>   
                <th>Period</th>                
              </tr>
            </thead>
              <tbody> 
                <?php foreach ($tour_list as $key => $tourdata) { ?>
                  <tr id="tour<?php echo $tourdata["id"]; ?>">
                    <td><?php echo $tourdata["id"]; ?></td>
                    <td><?php echo $tourdata["name"]; ?></td>
                    <td><?php echo $tourdata["tour_type"]; ?></td>
                    <td><?php echo $tourdata["region_name"]; ?></td>
                    <td><?php echo $tourdata["period_to"]." - ". $tourdata["period_from"];; ?></td>                 
                    <!-- <td><img src="<?php echo base_url() ?>html/images/<?php echo $tourdata['home_banner']; ?>" width="150" height="150"/>    </td> -->
                     <td class="right-align tour-btn">
                      <a data-tour-id="<?php echo $tourdata['id']; ?>"  class="btn-floating waves-effect waves-light  tour-itinrary-edit-btn"><i class="material-icons edit-icon">mode_edit</i></a>
                    <!--  <a data-tour-id="<?php echo $tourdata['id']; ?>"  class="btn-floating waves-effect waves-light  tour-delete-btn"><i class="material-icons delete-icon">delete</i></a>-->
                    </td> 
                  </tr>
                <?php } ?>
              </tbody>
          </table>
   </div>
  </div>
 </div>  
</div>

<!-- Modal Structure -->
  <div id="itinraryModal" class="modal">
    <div class="modal-content">
     <?php $this->load->view("itinrary-dashboard",array("allItinrary"=>$allItinrary,"allTour"=>$allTour)); ?>
    </div>
    <div class="modal-footer">
      <a id="sendItinrary" href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Save</a>
    </div>
  </div>

  <!-- Modal Structure -->
   <div id="editItinraryModal" class="modal">
    <div class="modal-content">
     </div>

    <div class="modal-footer">
      <a  id="updateItinrary" href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Save</a>
    </div>
  </div>
</div>