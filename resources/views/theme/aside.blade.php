<aside class="left-side sidebar-offcanvas">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset("assets/theme/img/avatar3.png")}}" class="img-circle" alt="Imagen de usuario" />
            </div>
            <div class="pull-left info">
                <p>Hola, pana Juanes</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="BuscAlo boludoo"/>
                <span class="input-group-btn">
                    <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li>
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Inicio</span>
                </a>
            </li>
            <li>
                <a href="{{ route('alergia.index') }}">
                    <i class="fa fa-th"></i> <span>Alergia</span> <small class="badge pull-right bg-green">new</small>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-bar-chart-o"></i>
                    <span>Charts</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-angle-double-right"></i> Morris</a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right"></i> Flot</a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right"></i> Inline charts</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>UI Elements</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-angle-double-right"></i> General</a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right"></i> Icons</a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right"></i> Buttons</a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right"></i> Sliders</a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right"></i> Timeline</a></li>
                </ul>
            </li>
            <li class="treeview active">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Forms</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="#"><i class="fa fa-angle-double-right"></i> General Elements</a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right"></i> Advanced Elements</a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right"></i> Editors</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-table"></i> <span>Tables</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-angle-double-right"></i> Simple tables</a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right"></i> Data tables</a></li>
                </ul>
            </li>
            <li>
                <a href="../calendar.html">
                    <i class="fa fa-calendar"></i> <span>Calendar</span>
                    <small class="badge pull-right bg-red">3</small>
                </a>
            </li>
            <li>
                <a href="../mailbox.html">
                    <i class="fa fa-envelope"></i> <span>Mailbox</span>
                    <small class="badge pull-right bg-yellow">12</small>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-folder"></i> <span>Examples</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-angle-double-right"></i> Invoice</a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right"></i> Login</a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right"></i> Register</a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right"></i> Lockscreen</a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right"></i> 404 Error</a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right"></i> 500 Error</a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right"></i> Blank Page</a></li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>