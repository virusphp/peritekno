<div class="col-md-3 left_col">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      <a href="{{ route('home') }}" class="site_title"><i class="fa fa-user"></i> <span>Peritechno</span></a>
    </div>

    <div class="clearfix"></div>

    <!-- menu profile quick info -->
    <div class="profile clearfix">
      <div class="profile_pic">
        <img src="{{ asset('b-n/images/img.jpg') }}" alt="..." class="img-circle profile_img">
      </div>
      <div class="profile_info">
        <span>Welcome,</span>
        <h2>{{ Auth::user()->name }}</h2>
      </div>
    </div>
    <!-- /menu profile quick info -->

    <br />

    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
          <li><a href="{{ route('home') }}"><i class="fa fa-home"></i> Home </a></li>
          <li><a href="{{ route('categories.index') }}"><i class="fa fa-list"></i> Category </a></li>
          <li><a><i class="fa fa-building"></i> Blogs<span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="#"><i class="fa fa-file-word-o"></i> Word</a></li>
              <li><a href="#"><i class="fa fa-file-excel-o"></i> Excel</a></li>
            </ul>
          </li>

          <li><a><i class="fa fa-credit-card-alt"></i> Finance <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="#"><i class="fa fa-file-word-o"></i> Word</a></li>
              <li><a href="#"><i class="fa fa-file-excel-o"></i> Excel</a></li>
            </ul>
          </li>

          <li><a><i class="fa fa-barcode"></i> Production <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="#"><i class="fa fa-file-word-o"></i> Word</a></li>
              <li><a href="#"><i class="fa fa-file-excel-o"></i> Excel</a></li>
            </ul>
          </li>

          <!-- Maintenance -->
          <li><a><i class="fa fa-cogs"></i> Maintenance <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="#"><i class="fa fa-file-word-o"></i> Data Word</a></li>
              <li><a href="#"><i class="fa fa-file-excel-o"></i> Data Excel</a></li>
            </ul>
          </li>
          <!-- End Maintenance -->
          <li><a><i class="fa fa-group"></i> Management User <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="#"><i class="fa fa-user"></i> User</a></li>
              <li><a href="#"><i class="fa fa-lock"></i> Role</a></li>
              <li><a href="#"><i class="fa fa-key"></i> Permission</a></li>
            </ul>
		  </li>
        </ul>
      </div>

    </div>
    <!-- /sidebar menu -->

    <!-- /menu footer buttons -->
    <div class="sidebar-footer hidden-small">
      <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
      </a>
    </div>
    <!-- /menu footer buttons -->
  </div>
</div>
