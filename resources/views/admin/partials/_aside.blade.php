<div class="left side-menu">
    <div class="slimscroll-menu" id="remove-scroll">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu" id="side-menu">
              @if(Auth::User()->id == 1)
                <li class="menu-title">Menu</li>
                <li>
                    <a href="{{ route('banners.index') }}">
                        <i class="fa fa-file-image-o"></i> <span> Banners </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('quemSomos.index') }}">
                        <i class="fa fa-users"></i> <span> Quem Somos </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('parceiros.index') }}">
                        <i class="fa fa-handshake-o"></i> <span> Parceiros </span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="fa fa-calendar"></i> <span> Notícias </span>
                    </a>
                    <ul class="nav-second-level mm-collapse mm-show">
                        <li>
                            <a href="{{ route('eventos.index') }}">
                                <i class="fa fa-calendar-o"></i> <span> Listar Notícias </span>
                            </a>

                        </li>
                        <li>
                            <a href="{{ route('categorias.index') }}">
                                <i class="fa fa-tags"></i> <span> Categorias </span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="{{ route('users.index') }}">
                        <i class="fa fa-user"></i>
                        <span>
                            Usuários
                        </span>
                    </a>
                </li>
                @endif
                <li>
                  <a href="{{ route('cliente.index') }}">
                    <i class="fa fa-sticky-note"></i> <span> Boletos e NF </span>

                  </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>
    </div>
    <!-- Sidebar -left -->
</div>
