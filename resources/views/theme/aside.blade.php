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

        <ul class="sidebar-menu">
            <li>
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Inicio</span>
                </a>
            </li>
            <li>
                <a href="{{ route('alergia.index') }}">
                    <i class="fa fa-frown-o"></i> <span>Alergia</span>
                </a>
            </li>
            <li>
                <a href="{{ route('tipoAlergia.index') }}">
                    <i class="fa fa-heart"></i> <span>Tipos de alergia</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>