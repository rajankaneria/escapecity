<?php $this->load->view("admin-nav"); ?>
<div class="container">
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