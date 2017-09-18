<?php $this->load->view("admin-nav"); ?>

<section class="content">
  <a class="waves-effect black btn ADD" id="addbanner">ADD</a>
    <div class="row clearfix">
     <div class="card">
      <div class="header">
        <h2>
          Add Banner
        </h2>
      </div>

      <div class="body">
        <div class="table-responsive">
          <table class="table responsive-table centered">
            <thead>
              <tr>
                <th>id</th>       
                <th>tour_id</th>
                <th>banner</th>
                <th>action</th>    
              </tr>
            </thead>
              <tbody>
                  <?php foreach ($bannerimg as $key => $banner) { ?>
                  <tr id="banner<?php echo $banner["id"]; ?>">
                  
                    <td><?php echo $banner['id'];  ?></td>
                    <td><?php echo $banner['tour_id'];  ?></td>
                    <td>  <img src="<?php echo base_url() ?>html/images/<?php echo $banner['banner']; ?>" width="150" height="150"/></td>
                     
                    <td class="right-align tour-btn">
                      <a data-banner-id="<?php echo $banner['id']; ?>" class="btn-floating waves-effect waves-light blue-grey banner-edit-btn"><i class="material-icons">mode_edit</i></a>
                      <a data-banner-id="<?php echo $banner['id']; ?>" class="btn-floating waves-effect waves-light red banner-delete-btn"><i class="material-icons">delete</i></a>
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