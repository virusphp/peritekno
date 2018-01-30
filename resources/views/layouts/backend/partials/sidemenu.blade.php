      <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="#" class="site_title"><span>PeriTecno</span></a>
            </div>

            <div class="clearfix"></div>
            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{ asset ('f-n/images/admin.png')}}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->
            <br />
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="{{ url('/home') }}"><i class="fa fa-home"></i> Home </a></li>
                  <li><a href="{{ route('categories.index') }}"><i class="fa fa-list"></i> Category </a></li>
                  <li><a href="{{ url('/blog/DataPost') }}"><i class="fa fa-sticky-note"></i> Artikel </a></li>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
					Logout
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>
