<?php $this->load->view("admin-nav"); ?>

<section class="content">
  <a class="waves-effect black btn ADD" id="addtour">ADD</a>
    <div class="row clearfix">
     <div class="card">
      <div class="header">
        <h2>
          Add Tour
        </h2>
      </div>

      <div class="body">
        <div class="table-responsive">
          <table class="table responsive-table centered">
            <thead>
              <tr>
                <th>Order</th>
                <th>name</th>
                <th>tour-type</th>
                <th>region_id</th>              
                <th>Period To</th>
                <th>Period From</th>
                <th>Home Banner</th>
              </tr>
            </thead>
              <tbody>
                <?php foreach ($tour_list as $key => $tourdata) { ?>
                  <tr id="tour<?php echo $tourdata["id"]; ?>">
                    <td><?php echo $tourdata["id"]; ?></td>
                    <td><?php echo $tourdata["name"]; ?></td>
                    <td><?php echo $tourdata["tour_type"]; ?></td>
                    <td><?php echo $tourdata["region_name"]; ?></td>
                    <td><?php echo $tourdata["period_to"]; ?></td>
                    <td><?php echo $tourdata["period_from"]; ?></td>
                    <td><img src="<?php echo base_url() ?>html/images/<?php echo $tourdata['home_banner']; ?>" width="150" height="150"/>    </td>
                    <td class="right-align tour-btn">
                      <a data-tour-id="<?php echo $tourdata['id']; ?>"  class="btn-floating waves-effect waves-light blue-grey tour-edit-btn"><i class="material-icons">mode_edit</i></a>
                      <a data-tour-id="<?php echo $tourdata['id']; ?>"  class="btn-floating waves-effect waves-light red tour-delete-btn"><i class="material-icons">delete</i></a>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
          </table>
        </div>
      </div>

    </div> 
   </div>
</section>
<!-- #END# Basic Examples -->