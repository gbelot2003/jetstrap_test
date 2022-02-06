            <aside class="main-sidebar sidebar-dark-warning elevation-2">
                <!-- Brand Logo -->
                <a href="{{ route('dashboard') }}" class="brand-link">
                    <x-jet-application-mark width="36" class="brand-image img-circle elevation-1" style="opacity: .8" />
                    <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user (optional) 
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                            <div class="image">
                                <img src="{{ Auth::user()->profile_photo_url }}" class="img-circle elevation-1" alt="{{ Auth::user()->name }}">
                            </div>
                        @endif
                        <div class="info">
                            <a href="{{ route('profile.show') }}" class="d-block">{{ Auth::user()->name }}</a>
                        </div>
                    </div>-->

                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column nav-legacy" data-widget="treeview" role="menu"
                            data-accordion="false">
                            <!-- Add icons to the links using the .nav-icon class
                                 with font-awesome or any other icon font library -->

                            <li class="nav-item">
                                <a href="{{ route('account.index') }}" class="nav-link">
                                    <i class="nav-icon fas fa-microchip"></i>
                                    <p>Cuentas</p>
                                </a>
                            </li>


                            <li class="nav-item">
                                <a href="#/" class="nav-link">
                                    <i class="nav-icon fas fa-user"></i>
                                    <p>
                                        Conf. de Usuarios
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ route('users.index') }}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Listado de Usuarios</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>
