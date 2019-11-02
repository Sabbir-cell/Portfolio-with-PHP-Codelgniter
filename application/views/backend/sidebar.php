<div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="<?php echo site_url('portfolio/index') ?>" class="simple-text logo-normal">
          Control Panel
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="<?php if($page_name == 'dashboard') echo 'active' ?>">
            <a href="<?php echo site_url('admin'); ?>">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="<?php if($page_name == 'about' || $page_name == 'update_about' || $page_name == 'create_about') echo 'active'; ?>">
            <a href="<?php echo site_url('admin/about'); ?>">
              <i class="fas fa-address-card"></i>
              <p>About</p>
            </a>
          </li>
          <li class="<?php if($page_name == 'service' || $page_name == 'update_service' || $page_name == 'create_service') echo 'active'; ?>">
            <a href="<?php echo site_url('admin/service'); ?>">
              <i class="fab fa-servicestack"></i>
              <p>Service</p>
            </a>
          </li>
          <li class="<?php if($page_name == 'projects' || $page_name == 'update_projects' || $page_name == 'create_projects') echo 'active' ?>">
            <a href="<?php echo site_url('admin/projects'); ?>">
              <i class="fas fa-project-diagram"></i>
              <p>Projects</p>
            </a>
          </li>
          <li class="<?php if($page_name == 'projects_deatils' || $page_name == 'update_projects_deatils' || $page_name == 'create_projects_deatils') echo 'active' ?>">
            <a href="<?php echo site_url('admin/projects_deatils') ?>">
              <i class="fas fa-asterisk"></i>
              <p>Project Deatils</p>
            </a>
          </li>
          <li class="<?php if($page_name == 'blog' || $page_name == 'update_blog' || $page_name == 'create_blog') echo 'active' ?>">
            <a href="<?php echo site_url('admin/blog');  ?>">
              <i class="fas fa-blog"></i>
              <p>Blog</p>
            </a>
          </li>
          <li class="<?php if($page_name == 'contact') echo 'active' ?>">
            <a href="<?php echo site_url('admin/contact'); ?>">
              <i class="fas fa-envelope"></i>
              Contact <?php $status = $this->db->get_where('contact', array('status' => 1))->result_array();?>
                
                <?php if (count($status) > 0 ) {?>

                  <div style="float: right; width: 20px; text-align: center; height: 23px; border-radius: 10px; background-color: green;">
                 <?php echo count($status); ?>
                 </div>
              <?php  } ?>
              
            </a>
          </li>
          <li class="<?php if($page_name == 'account') echo 'active' ?>">
            <a href="<?php echo site_url('admin/account'); ?>">
              <i class="fas fa-user"></i>
              <p>Account</p>
            </a>
          </li>
        </ul>
      </div>
    </div>