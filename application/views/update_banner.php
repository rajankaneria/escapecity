<div class="container">
	<div class="moadalHeader-title">
		<div class="row modal-row">
			<div class="col s12 m6">
				<h5>Update Banner</h5>
			</div>
			<div class="col s12 m6">
				<div class="tourName">
					<div><label>Tour</label></div>
					<?php foreach ($typename as $key => $alltype) { ?>
			      	<div class="tourDeclaration"><?php echo $alltype['name']; ?></div>
	           		<?php } ?>
				</div>
			</div>
		</div>
	</div><hr>

		<div class="row">
			<div class="container">
					<div class="modal-imgBox">
					<img src="<?php echo base_url() ?>html/images/<?php echo $bannerDetail['banner']; ?>" width="150" height="150"/>
					<button type="button" class="btn btnUpload-circle" onclick="$('.newUpload').click()">
						<i class="fa fa-pencil" aria-hidden="true"></i>
					</button>
					</div>
			</div>
		</div>

    <form class="col s12" enctype="multipart/form-data" id="updateForm" method="post">
        <div class="input-field" id="banner1">
          <!-- <label for="file">File</label> -->
          <input placeholder="enter your name" name="banner" id="banner" type="file" value="<?php echo $bannerDetail['banner']; ?>" class="validate newUpload" style="display: none;">
        </div>
        <input type="hidden" name="bannerID" id="bannerID" value="<?php echo $bannerDetail['id']; ?>" />	
    </form>
 </div>
