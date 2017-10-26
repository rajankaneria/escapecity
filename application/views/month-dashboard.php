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
      <div class="page-title">Month Management</div>      
      <div class="page-button"><a class="waves-effect waves-light btn blue" id="addMonth">Add</a></div>
  </div>
   <div class="page-content">
   	<table border="1" class="responsive-table centered">
    <thead>
   		<tr>
        <th>Order</th>
        <th>Month</th>
        <th>Title</th>    
        <!-- <th>Description</th> -->
        <th>Image</th>            
        <th>Actions</th>
   		</tr>
    </thead>
    <tbody>
      <?php foreach ($monthDetails as $key => $monthRow) { ?>
      <tr id="month-id<?php echo $monthRow['id']; ?>">  
        <td><?php echo $monthRow['id']; ?></td>  
         <?php $monthNum  = $monthRow['month'];
          $monthName = date('F', mktime(0, 0, 0, $monthNum, 10)); ?>       
        <td><?php echo $monthName; ?></td>         
        <td><?php echo $monthRow['title']; ?></td>
        <!-- <td><?php //echo substr($monthRow['description'], 0,180)."...."; ?></td>   -->      
        <td><img src="<?php echo base_url(); ?>html/images/tours/<?php echo $monthRow['image']; ?>" width="170" height="170"/></td>     
        <td class="right-align blog-btn">
        <a data-month-id="<?php echo $monthRow['id']; ?>" class="btn-floating waves-effect waves-light edit-month-btn"><i class="material-icons edit-icon">mode_edit</i></a>
        <a data-month-id="<?php echo $monthRow['id']; ?>" class="btn-floating waves-effect waves-light delete-month-btn"><i class="material-icons delete-icon">delete</i></a>
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
  <div id="addMonthModal" class="modal">
    <div class="modal-content">
      <?php $this->load->view("addMonth"); ?>
    </div>
    <div class="modal-footer">
      <a id="sendMonthData" href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Save</a>
    </div>
  </div>

  <!-- Modal Structure -->
   <div id="editMonthModal" class="modal">
    <div class="modal-content">
     </div>

    <div class="modal-footer">
      <a  id="updateMonth" href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Save</a>
    </div>
  </div>
</div>
