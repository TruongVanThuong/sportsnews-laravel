<div class="left-side-menu">

  <div class="slimscroll-menu">

    <!-- LOGO -->
    <a href="dashboard.php" class="logo text-center mb-3">
      <span class="logo-lg" style="font-size: 23px; padding: 7px">
        <img src="{{asset('img/AdminLogo.png')}}" alt="" height="40" style="box-shadow: 0 0 7px #777; border-radius: 50%">
        <span class="admin_text" style="margin-top: 5px;">ADMIN</span>
      </span>
      <span class="logo-sm">
        <img src="{{asset('img\logo-sm.png')}}" alt="" height="24">
      </span>
    </a>

    <!--- Sidemenu -->
    <div id="sidebar-menu">

      <ul class="metismenu" id="side-menu">

        <li class="menu-title">Navigation</li>

        <li>
          <a href="{{asset('admin/tintuc')}}">
            <i class="fe-airplay"></i>
            <span class="badge badge-success float-right">01</span>
            <span> Tin Tức  </span>
          </a>
        </li>

        <li>
          <a href="{{asset('admin/loaitin')}}">
            <i class="fe-briefcase"></i>
            <span> Loại Tin </span>
          </a>
        </li>

        <li>
          <a href="{{asset('admin/theloai')}}">
            <i class="fe-type"></i>
            <span> Thể Loại </span>
          </a>
        </li>

        <li>
          <a href="{{asset('admin/binhluan')}}">
            <i class="fe-pie-chart"></i>
            <span> Bình Luận </span>
          </a>
        </li>

        <li>
          <a href="{{asset('admin/user')}}">
            <i class="fe-pie-chart"></i>
            <span> Thành Viên </span>
          </a>
        </li>

        <!-- <li>
                                <a href="javascript: void(0);">
                                    <i class="fe-hard-drive"></i>
                                    <span> Components </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="components-rangeslider.html">Range Slider</a>
                                    </li>
                                    <li>
                                        <a href="components-alerts.html">Alerts</a>
                                    </li>
                                    <li>
                                        <a href="components-ribbons.html">Ribbons</a>
                                    </li>
                                    <li>
                                        <a href="components-sweet-alerts.html">Sweet Alerts</a>
                                    </li>
                                </ul>
                            </li> -->

        <!-- <li>
                                <a href="javascript: void(0);">
                                    <i class="fe-edit"></i>
                                    <span class="badge badge-primary float-right">04</span>
                                    <span> Forms </span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="form-elements.html">General Elements</a>
                                    </li>
                                    <li>
                                        <a href="form-advanced.html">Advanced Form</a>
                                    </li>
                                    <li>
                                        <a href="form-editors.html">Editors</a>
                                    </li>
                                    <li>
                                        <a href="form-uploads.html">File Uploads</a>
                                    </li>
                                </ul>
                            </li> -->

        <!-- <li>
                                <a href="javascript: void(0);">
                                    <i class="fe-grid"></i>
                                    <span> Tables </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="tables-basic.html">Basic Tables</a>
                                    </li>
                                    <li>
                                        <a href="tables-advanced.html">Advanced Tables</a>
                                    </li>
                                </ul>
                            </li> -->

        <!-- <li class="menu-title">More</li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="fe-layout"></i>
                                    <span> Layouts </span>
                                    <span class="badge badge-danger float-right">New</span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="layouts-light-sidebar.html">Light Sidebar</a>
                                    </li>
                                    <li>
                                        <a href="layouts-sm-sidebar.html">Small Sidebar</a>
                                    </li>
                                    <li>
                                        <a href="layouts-dark-sidebar.html">Dark Sidebar</a>
                                    </li>
                                    <li>
                                        <a href="layouts-light-topbar.html">Light Topbar</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="maps.html">
                                    <i class="fe-map-pin"></i>
                                    <span> Maps </span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="fe-anchor"></i>
                                    <span> Icons </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="icons-feather.html">Feather Icons</a>
                                    </li>
                                    <li>
                                        <a href="icons-mdi.html">Material Design Icons</a>
                                    </li>
                                    <li>
                                        <a href="icons-dripicons.html">Dripicons</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="fe-book-open"></i>
                                    <span> Pages </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="pages-starter.html">Starter</a>
                                    </li>
                                    <li>
                                        <a href="pages-calendar.html">Calendar</a>
                                    </li>
                                    <li>
                                        <a href="pages-timeline.html">Timeline</a>
                                    </li>
                                    <li>
                                        <a href="pages-invoice.html">Invoice</a>
                                    </li>
                                    <li>
                                        <a href="pages-contacts.html">Contacts</a>
                                    </li>
                                    <li>
                                        <a href="pages-login.html">Login</a>
                                    </li>
                                    <li>
                                        <a href="pages-register.html">Register</a>
                                    </li>
                                    <li>
                                        <a href="pages-recoverpw.html">Recover Password</a>
                                    </li>
                                    <li>
                                        <a href="pages-lock-screen.html">Lock Screen</a>
                                    </li>
                                    <li>
                                        <a href="pages-404.html">Error 404</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="fe-folder-plus"></i>
                                    <span> Multi Level </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level nav" aria-expanded="false">
                                    <li>
                                        <a href="javascript: void(0);">Level 1.1</a>
                                    </li>
                                    <li>
                                        <a href="javascript: void(0);" aria-expanded="false">Level 1.2
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <ul class="nav-third-level nav" aria-expanded="false">
                                            <li>
                                                <a href="javascript: void(0);">Level 2.1</a>
                                            </li>
                                            <li>
                                                <a href="javascript: void(0);">Level 2.2</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li> -->

      </ul>

    </div>
    <!-- End Sidebar -->

    <div class="clearfix"></div>

  </div>
  <!-- Sidebar -left -->

</div>