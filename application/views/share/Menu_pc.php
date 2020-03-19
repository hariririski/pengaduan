
<?php ini_set('display_errors','off');?>
<header class="page-topbar" id="header">
  <div class="navbar navbar-fixed">
    <nav class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-dark gradient-45deg-indigo-purple no-shadow">
      <div class="nav-wrapper">
        <div class="header-search-wrapper hide-on-med-and-down"><i class="material-icons">search</i>
          <input class="header-search-input z-depth-2" type="text" name="Search" placeholder="Explore Materialize" data-search="template-list">
          <ul class="search-list collection display-none"></ul>
        </div>
        <ul class="navbar-list right">

          <li><a class="waves-effect waves-block waves-light profile-button" href="javascript:void(0);" data-target="profile-dropdown"><span class="avatar-status avatar-online"><img src="<?php echo site_url(); ?>assets/pc/images/avatar/avatar-7.png" alt="avatar"><i></i></span></a></li>

        </ul>
        <!-- translation-button-->

        <!-- notifications-dropdown-->

        <!-- profile-dropdown-->
        <ul class="dropdown-content" id="profile-dropdown">
          <li><a class="grey-text text-darken-1" href="user-profile-page.html"><i class="material-icons">person_outline</i> Profile</a></li>
          <li class="divider"></li>
          <li><a class="grey-text text-darken-1" href="<?php echo site_url(); ?>Login/logout"><i class="material-icons">keyboard_tab</i> Logout</a></li>
        </ul>
      </div>

    </nav>
  </div>
</header>
