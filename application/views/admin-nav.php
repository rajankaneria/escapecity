<!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                  
                    <li ng-class="url == '' ? 'active' : ''">
                        <a href="<?php base_url() ?>admin_tour" class="waves-effect waves-block">
                           
                            <span>add tour</span>
                        </a>
                    </li>
                    <li ng-class="url == 'download' ? 'active' : ''">
                        <a href="<?php base_url() ?>banner" class="waves-effect waves-block">
                         
                            <span>banner</span>
                        </a>
                    </li>
                    <li ng-class="url == 'file-structure' ? 'active' : ''">
                        <a href="#/file-structure" class="waves-effect waves-block">
                          
                            <span>File Structure</span>
                        </a>
                    </li>
                    <li ng-class="url == 'dependencies' ? 'active' : ''">
                        <a href="#/dependencies" class="waves-effect waves-block">
                          
                            <span>Dependencies</span>
                        </a>
                    </li>
                    <li ng-class="url == 'plugins' ? 'active' : ''">
                        <a href="#/plugins" class="waves-effect waves-block">
                           
                            <span>Plugins</span>
                        </a>
                    </li>
                    <li ng-class="url == 'helper-classes' ? 'active' : ''">
                        <a href="#/helper-classes" class="waves-effect waves-block">
                         
                            <span>Helper Classes</span>
                        </a>
                    </li>
                   
                </ul>
            </div>
            <!-- #Menu -->   
        </aside>
        <!-- #END# Left Sidebar -->
    </section>