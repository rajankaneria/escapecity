<!-- #Top Bar -->
    <section>
   

        <!-- mobile navigation menu start here -->

          <ul id="slide-out" class="side-nav admin-navigation">
            <li>
                <img src="<?php echo base_url(); ?>html/images/logo_black.png" class="responsive-img" width="200">
            </li>
            <li ng-class="url == '' ? 'active' : ''" >
                <a href="<?php echo base_url() ?>admin/admin_tour" class="waves-effect waves-block <?php if (strpos($_SERVER['PHP_SELF'], 'admin_tour') !== false) { ?> active-menu <?php } ?>">
                    <span>add tour</span>
                </a>
            </li>
            <li ng-class="url == 'download' ? 'active' : ''">
                <a href="<?php echo base_url() ?>admin/banner" class="waves-effect waves-block <?php if (strpos($_SERVER['PHP_SELF'], 'banner') !== false) { ?> active-menu <?php } ?>">
                    <span>banner</span>
                </a>
            </li>
            <!-- <li ng-class="url == 'file-structure' ? 'active' : ''">
                <a href="<?php base_url(); ?>file-structure" class="waves-effect waves-block <?php if (strpos($_SERVER['PHP_SELF'], 'file-structure') !== false) { ?> active-menu <?php } ?>">
                    <span>File Structure</span>
                </a>
            </li>
            <li ng-class="url == 'dependencies' ? 'active' : ''">
                <a href="#/dependencies" class="waves-effect waves-block <?php if (strpos($_SERVER['PHP_SELF'], 'Dependencies') !== false) { ?> active-menu <?php } ?>">
                    <span>Dependencies</span>
                </a>
            </li>
            <li ng-class="url == 'plugins' ? 'active' : ''">
                <a href="#/plugins" class="waves-effect waves-block <?php if (strpos($_SERVER['PHP_SELF'], 'banner') !== false) { ?> active-menu <?php } ?>">
                    <span>Plugins</span>
                </a>
            </li>
            <li ng-class="url == 'helper-classes' ? 'active' : ''">
                <a href="#/helper-classes" class="waves-effect waves-block <?php if (strpos($_SERVER['PHP_SELF'], 'banner') !== false) { ?> active-menu <?php } ?>">
                    <span>Helper Classes</span>
                </a>
            </li> -->
          </ul>
          <a href="#" data-activates="slide-out" class="button-collapse mobile-menu-btn"><i class="material-icons">menu</i></a>
                

        <!-- mobile navigation menu over here -->


        <!-- #END# Left Sidebar -->
    </section>