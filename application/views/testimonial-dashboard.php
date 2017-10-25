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
      <div class="page-title">Testimonials Management</div>      
      <div class="page-button"><a class="waves-effect waves-light btn blue" id="addTest">Add</a></div>
  </div>
   <div class="page-content">
   	<table border="1" class="responsive-table centered">
    <thead>
   		<tr>
        <th>Order</th>
        <th>Title</th>    
        <th>Details</th>
        <th>Image</th>            
        <th>Actions</th>
   		</tr>
    </thead>
    <tbody>
      <?php foreach ($testData as $key => $testRow) { ?>
      <tr id="testid<?php echo $testRow['id']; ?>">  
         <td><?php echo $testRow['id']; ?></td>         
        <td><?php echo $testRow['title']; ?></td>
        <td><textarea><?php echo substr($testRow['details'],0,200)."...."; ?></textarea></td>
        <td><img src="<?php echo base_url(); ?>html/images/testimonials/<?php echo $testRow['image']; ?>" width="200" height="200"/></td>     
        <td class="right-align blog-btn">
        <a data-test-id="<?php echo $testRow['id']; ?>" class="btn-floating waves-effect waves-light test-edit-btn"><i class="material-icons edit-icon">mode_edit</i></a>
        <a data-test-id="<?php echo $testRow['id']; ?>" class="btn-floating waves-effect waves-light test-delete-btn"><i class="material-icons delete-icon">delete</i></a>
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
  <div id="addTestModal" class="modal">
    <div class="modal-content">
      <?php $this->load->view("addTest"); ?>
    </div>
    <div class="modal-footer">
      <a id="sendTestData" href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Save</a>
    </div>
  </div>

  <!-- Modal Structure -->
   <div id="editTestModal" class="modal">
    <div class="modal-content">
     </div>

    <div class="modal-footer">
      <a  id="updateTest" href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Save</a>
    </div>
  </div>
</div>