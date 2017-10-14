<?php $this->load->view("admin-nav"); ?>
<div class="container">
 <div class="row">

 <div class="card-panel">

  <div class="page-header">
      <div class="page-title">Tour Management</div>      
     <!--  <div class="page-button"><a class="waves-effect waves-light btn blue" id="addRate">Rate List</a></div> -->
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
                      <a data-tour-id="<?php echo $tourdata['id']; ?>"  class="btn-floating waves-effect waves-light tour-rate-edit-btn"><i class="material-icons edit-icon">mode_edit</i></a>
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
  <div id="rateModal" class="modal">
    <div class="modal-content">
      <?php $this->load->view("rate-dashboard",array("allRate"=>$allRate,"allTour"=>$allTour)); ?>
    </div>
    <div class="modal-footer">
      <a id="sendRate" href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Save</a>
    </div>
  </div>

  <!-- Modal Structure -->
   <div id="editRateModal" class="modal">
    <div class="modal-content">
     </div>

    <div class="modal-footer">
      <a  id="updateRate" href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Save</a>
    </div>
  </div>

