<!-- sidebar -->
<nav class="sidebar">
    <div class="menu_content">
      <ul class="menu_items">
        <div class="menu_title menu_papers"></div>
        <!-- duplicate or remove this li tag if you want to add or remove navlink with submenu -->
        <!-- start -->
        <li class="item">
          <div href="#" class="nav_link submenu_item" data-target="dashboard-paper">
            <span class="navlink_icon">
              <i class="bx bx-home-alt"></i>
            </span>
            <span class="navlink">Home</span>
            <i class="bx bx-chevron-right arrow-left"></i>
          </div>

          <ul class="menu_items submenu">   
            <a href="#" class="nav_link sublink">Nav Sub Link</a>
          </ul>
        </li>
        <!-- end -->

        <!-- duplicate this li tag if you want to add or remove  navlink with submenu -->
        <!-- start -->
        <li class="item">
          <div href="#" class="nav_link submenu_item" data-target="search-paper">
            <span class="navlink_icon">
                <i class="bx bx-search-alt-2"></i>
            </span>
            <span class="navlink">Search</span>
            <i class="bx bx-chevron-right arrow-left"></i>
          </div>

          <ul class="menu_items submenu">
            <a href="#" class="nav_link sublink">Nav Sub Link</a>
          </ul>
        </li>
        <!-- end -->
      </ul>

      <ul class="menu_items">
        <div class="menu_title menu_profile"></div>
        <!-- duplicate these li tag if you want to add or remove navlink only -->
        <!-- Start -->
        <li class="item">
          <a href="#" class="nav_link" data-target="profile-user">
            <span class="navlink_icon">
                <i class="bx bx-user"></i>
            </span>
            <span class="navlink">My Profile</span>
          </a>
        </li>
        <!-- End -->

        <li class="item">
          <a href="#" class="nav_link" data-target="profile-user">
            <span class="navlink_icon">
                <i class="bx bx-edit-alt"></i>  
            </span>
            <span class="navlink">Edit Profile</span>
          </a>
        </li>
      </ul>

      <ul class="menu_items view-privacy">
        <div class="menu_title menu_setting"></div>
        <li class="item">
          <a href="#" class="nav_link" data-target="privacy-user">
            <span class="navlink_icon">
                <i class="bx bx-lock"></i>
            </span>
            <span class="navlink">Privacy Center</span>
          </a>
        </li>

        <li class="item">
          <a href="#" class="nav_link" data-target="setting-user">
            <span class="navlink_icon">
              <i class="bx bx-cog"></i>
            </span>
            <span class="navlink">Setting</span>
          </a>
        </li>
        <li class="item">
          <a href="index.php?action=logout" class="nav_link">
            <span class="navlink_icon">
                <i class="bx bx-log-out"></i>     
            </span>
            <span class="navlink">Log Out</span>
          </a>
        </li>
      </ul>

      <!-- Sidebar Open / Close -->
      <div class="bottom_content">
        <div class="bottom expand_sidebar">
          <span> Pin </span>
            <i class='bx bx-pin' ></i>
        </div>
        <div class="bottom collapse_sidebar">
          <span> Collapse </span>
            <i class='bx bx-chevron-left' ></i>
        </div>
      </div>
    </div>
</nav>