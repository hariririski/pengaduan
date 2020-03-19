
<?php ini_set('display_errors','off');?>
<aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light sidenav-active-square">
  <div class="brand-sidebar">
    <h1 class="logo-wrapper">
      <a class="brand-logo darken-1" href="<?php echo site_url(); ?>Pc">
        <img class="hide-on-med-and-down" src="<?php echo site_url(); ?>assets/config/atrbpn.png" alt="materialize logo"/>
        <img class="show-on-medium-and-down hide-on-med-and-up" src="<?php echo site_url(); ?>assets/pc/images/logo/materialize-logo.png" alt="materialize logo"/>
        <span class="logo-text hide-on-med-and-down">Pengaduan</span>
      </a>
      <a class="navbar-toggler" href="#">
        <i class="material-icons">radio_button_checked</i>
      </a>
  </h1>
  </div>
  <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">


    <li class="navigation-header"><a class="navigation-header-text">Menu</a><i class="navigation-header-icon material-icons">more_horiz</i>
    </li>
    <li class="bold"><a class="waves-effect waves-cyan " href="<?php echo site_url(); ?>Pc"><i class="material-icons">mail_outline</i><span class="menu-title" data-i18n="Mail">Home</span></a>
    </li>
    <li class="bold"><a class="waves-effect waves-cyan " href="app-chat.html"><i class="material-icons">chat_bubble_outline</i><span class="menu-title" data-i18n="Chat">Lapor</span></a>
    </li>
    <li class="bold"><a class="waves-effect waves-cyan " href="<?php echo site_url(); ?>Lapor/data"><i class="material-icons">check</i><span class="menu-title" data-i18n="ToDo">Data Pengaduan</span></a>
    </li>
    <li class="bold"><a class="waves-effect waves-cyan " href="app-todo.html"><i class="material-icons">check</i><span class="menu-title" data-i18n="ToDo">Data Pelapor</span></a>
    </li>
    </li>
    <li class="bold"><a class="waves-effect waves-cyan " href="app-todo.html"><i class="material-icons">check</i><span class="menu-title" data-i18n="ToDo">Informasi Pertanahan</span></a>
    </li>


    <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">content_paste</i><span class="menu-title" data-i18n="Pages">Setting</span></a>
      <div class="collapsible-body">
        <ul class="collapsible collapsible-sub" data-collapsible="accordion">
          <li><a href="page-contact.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Contact">Admin</span></a>
          </li>
          <li><a href="page-blog-list.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Blog">Tambah Admin</span></a>
          </li>
          <li><a href="page-search.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Search">Bidang</span></a>
          </li>
          <li><a href="page-knowledge.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Knowledge">Tambah Bidang</span></a>
          </li>
          <li><a href="page-timeline.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Timeline">Config</span></a>
          </li>
          <li><a href="page-faq.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="FAQs">Add FAQ</span></a>
          </li>
        </ul>
      </div>
    </li>


    <li class="bold"><a class="waves-effect waves-cyan " href="<?php echo site_url(); ?>Login"><i class="material-icons">check</i><span class="menu-title" data-i18n="ToDo">Login</span></a>
    </li>
    </aside>
