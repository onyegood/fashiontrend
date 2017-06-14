<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse slimscrollsidebar">
        <div class="user-profile">
            <div class="dropdown user-pro-body">
                <div>
                    <img src="{{ asset('adminassets/plugins/images/users/varun.jpg') }}"
                         alt="user-img" class="img-circle">
                </div>
                <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown"
                   role="button" aria-haspopup="true" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>
                <ul class="dropdown-menu animated flipInY">
                    <li>
                        <a href="{{ route('profile') }}">
                            <i class="ti-user"></i> My Profile
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('inbox') }}">
                            <i class="ti-email"></i> Inbox
                        </a>
                    </li>
                    <li role="separator" class="divider"></li>
                    <li>
                        <a href="{{ route('settings') }}">
                            <i class="ti-settings"></i>
                            Account Setting
                        </a>
                    </li>
                    <li role="separator" class="divider"></li>
                    <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            <i class="fa fa-power-off">
                            </i> Logout</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>

                </ul>
            </div>
        </div>
        <ul class="nav" id="side-menu">
            <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                <!-- input-group -->
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
            <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
            </span> </div>
                <!-- /input-group -->
            </li>

            <li><div class="hide-menu t-earning"><div id="sparkline2dash" class="m-b-10"></div><small class="db">TOTAL EARNINGS - JUNE 2017</small><h3 class="m-t-0 m-b-0">$2,478.00</h3></div>
            </li>
            <li class="nav-small-cap m-t-10">--- Main Menu</li>
            <li> <a href="index.html" class="waves-effect active"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i> <span class="hide-menu"> E-commerce <span class="fa arrow"></span> <span class="label label-rouded label-custom pull-right">7</span></span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="{{ route('addnewproduct') }}">Add New Product</a> </li>
                    <li> <a href="{{ route('categoryandbrand') }}">Add Category</a> </li>
                    <li> <a href="{{ route('allproducts') }}">Products</a> </li>
                    <li> <a href="{{ route('orderlist') }}">Product Orders</a> </li>
                </ul>
            </li>
            <li> <a href="javascript:void(0);" class="waves-effect"><i class="linea-icon linea-basic fa-fw text-danger" data-icon="7"></i> <span class="hide-menu text-danger"> Multipurpose <span class="fa arrow"></span> <span class="label label-rouded label-danger pull-right">HOT</span></span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="http://eliteadmin.themedesigner.in/demos/eliteadmin-hospital/index.html">Hospital Admin</a> </li>
                    <li> <a href="http://eliteadmin.themedesigner.in/demos/eliteadmin-crm/index.html">CRM Admin</a> </li>
                    <li> <a href="http://eliteadmin.themedesigner.in/demos/eliteadmin-university/index.html">University Admin</a> </li>
                    <li> <a href="http://eliteadmin.themedesigner.in/demos/eliteadmin-music/index.html">Music Admin</a> </li>
                    <li> <a href="http://eliteadmin.themedesigner.in/demos/eliteadmin-real-estate/index.html">Real Estate Admin</a> </li>
                    <li role="separator" class="divider"></li>
                    <li> <a href="http://eliteadmin.themedesigner.in/demos/eliteadmin-inverse/index.html">Inverse</a></li>
                    <li> <a href="http://eliteadmin.themedesigner.in/demos/eliteadmin-colors/index.html">Colors</a></li>
                    <li> <a href="http://eliteadmin.themedesigner.in/demos/eliteadmin/index.html">Eliteadmin</a></li>
                    <li> <a href="http://eliteadmin.themedesigner.in/demos/eliteadmin-wpmenu/index.html">Wpmenu</a></li>

                    <li> <a href="http://eliteadmin.themedesigner.in/demos/eliteadmin-modern/index.html">Modern</a></li>
                    <li> <a href="http://eliteadmin.themedesigner.in/demos/eliteadmin-inverse-php/index.php">Basic PHP</a></li>
                    <li> <a href="http://eliteadmin.themedesigner.in/demos/eliteadmin-material/index3.html">Material Design</a></li>
                    <li> <a href="http://eliteadmin.themedesigner.in/demos/eliteadmin-dark/index.html">Dark</a></li>
                    <li> <a href="http://eliteadmin.themedesigner.in/demos/eliteadmin-mini-sidebar/index3.html">Mini Sidebar</a></li>
                    <li> <a href="http://eliteadmin.themedesigner.in/demos/eliteadmin-horizontal-navbar/index3.html">Horizontal Boxed Nav</a></li>
                    <li> <a href="http://eliteadmin.themedesigner.in/demos/eliteadmin-horizontal-nav-fullwidth/index.html">Horizontal Full Nav</a></li>
                    <li> <a href="http://eliteadmin.themedesigner.in/demos/eliteadmin-iconbar/index4.html">Iconbar</a></li>
                    <li> <a href="http://eliteadmin.themedesigner.in/demos/eliteadmin-rtl/index.html">Eliteadmin RTL</a></li>
                    <li> <a href="http://eliteadmin.themedesigner.in/demos/eliteadmin-inverse-rtl/index.html">Inverse RTL</a></li>
                </ul>
            </li>
            <li><a href="inbox.html" class="waves-effect"><i data-icon=")" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Apps <span class="fa arrow"></span></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="chat.html">Chat-message</a></li>
                    <li><a href="javascript:void(0)" class="waves-effect">Inbox<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li> <a href="inbox.html">Mail box</a></li>
                            <li> <a href="inbox-detail.html">Inbox detail</a></li>
                            <li> <a href="compose.html">Compose mail</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0)" class="waves-effect">Contacts<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li> <a href="contact.html">Contact1</a></li>
                            <li> <a href="contact2.html">Contact2</a></li>
                            <li> <a href="contact-detail.html">Contact Detail</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="nav-small-cap">--- Proffessional</li>

        </ul>
    </div>
</div>