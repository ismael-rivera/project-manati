<div class="container wrapper" id="top-nav-wrapper">
    <div class="grid" id="top-nav">
     <div class="navbar">
          <div class="navbar-inner">
            <div class="container">
              <ul class="nav">
                <li <?php is_active('/'); ?>><a href="<?php echo site_url(); ?>">Home/Main</a></li>
                <li <?php is_active('/projects'); ?>><a href="<?php echo site_url('project_listing'); ?>">Search Projects</a></li>
                <li <?php is_active('/howitworks'); ?>><a href="<?php echo site_url('howitworks'); ?>">How To</a></li>
                <li <?php is_active('/projectcreate'); ?>><a href="<?php echo site_url('projectcreate'); ?>">Start a Project</a></li>
                <li <?php is_active('/help'); ?>><a href="<?php echo site_url('help'); ?>">Help</a></li>
                <li <?php is_active('/signup'); ?>><a href="<?php echo site_url('signup'); ?>">Signup</a></li>
              </ul>
            </div>
          </div>
     </div><!-- /.navbar -->
</div></div>
