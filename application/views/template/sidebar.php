<div class="col-md-3 left_col">
        <div class="left_col scroll-view">

          <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Chargespot!</span></a>
          </div>
          <div class="clearfix"></div>

          <!-- menu prile quick info -->
          <div class="profile">
            <div class="profile_pic">
              <img src="assets/images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2>
                <?php 
                    $user = $this->ion_auth->user()->row();
                    echo $user->first_name." ".$user->last_name;
                ?>
               </h2>
            </div>
          </div>
          <!-- /menu prile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
                <li><a href="main"><i class="fa fa-home"></i>Home</a></li>

                <li><a><i class="fa fa-home"></i> Shop <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="Shops">Manage Shop</a>
                    </li>
                  </ul>
                </li>

                <li><a><i class="fa fa-home"></i> Device <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="devices">Manage Device</a>
                    </li>
                  </ul>
                </li> 
                <li><a><i class="fa fa-home"></i> Devices and Shops<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="Device_Shop">Manage Shops and Devices</a>
                    </li>
                  </ul>
                </li>                

                
                <?php if(!$this->ion_auth->is_shopkeeper()){ ?>
                <li><a><i class="fa fa-user"></i> User <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="auth/create_user">Add User</a>
                    </li>
                    <li><a href="auth">Manage Users</a>
                    </li>
                  </ul>
                </li>
                <?php } ?>

                <!-- <li><a><i class="fa fa-home"></i> City<span class="fa fa-chevron-down"></span></a> -->
                <!--   <ul class="nav child_menu" style="display: none">
                    <li><a href="City">Manage City</a>
                    </li>
                  </ul>
                </li> --> 
                 <li><a><i class="fa fa-home"></i>Shops and Users<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="Shop_user">Manage Shops and Users</a>
                    </li>
                  </ul>
                </li> 
              </ul>
            </div>
            

          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>