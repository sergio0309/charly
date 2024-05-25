<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index" class="logo logo-dark">
            <span class="logo-sm">
                <img src="http://localhost/creative2/public/assets/images/logo-sm.png" alt=""
                    height="22">
            </span>
            <span class="logo-lg">
                {{-- <img src="{{ asset('logo.png') }}" alt="" height="100"> --}}
                RESTAURANT CHARLY
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index" class="logo logo-light">
            <span class="logo-sm">
                <img src="http://localhost/creative2/public/assets/images/logo-sm.png" alt=""
                    height="22">
            </span>
            <span class="logo-lg">
                <img src="http://localhost/creative2/public/assets/images/logo-light.png" alt=""
                    height="17">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span>Menu</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="" role="button"
                        aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="ri-dashboard-2-line"></i> <span>Dashboards</span>
                    </a>
                </li> <!-- end Dashboard Menu -->

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarApps" data-bs-toggle="collapse"
                        role="button" aria-expanded="false" aria-controls="sidebarApps">
                        <i class="ri-apps-2-line"></i> <span>Almacen</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarApps">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="" class="nav-link">Categorias</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">Productos</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">Moneda</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">Unidad de medida</a>
                            </li>

                        </li> <!-- end Dashboard Menu -->


                    </div>
                </li>
                <li class="menu-title"><i class="ri-more-fill"></i> <span>Gestion</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarPages" data-bs-toggle="collapse"
                        role="button" aria-expanded="false" aria-controls="sidebarPages">
                        <i class="bx bxs-city"></i> <span>Gestion</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarPages">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="" class="nav-link">Usuarios</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">Proveedores</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">Clientes</a>
                            </li>


                        </ul>
                    </div>
                </li>

                <li class="menu-title"><i class="ri-more-fill"></i> <span>Compra & Venta</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarPages" data-bs-toggle="collapse"
                        role="button" aria-expanded="false" aria-controls="sidebarPages">
                        <i class="bx bxs-city"></i> <span>Compra</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarPages">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="" class="nav-link">Nueva Compra</a>
                            </li>

                            {{-- <li class="nav-item">
                        <a href="#sidebarProfile" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProfile">Profile                                </a>
                        <div class="collapse menu-dropdown" id="sidebarProfile">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="pages-profile" class="nav-link">Simple Page</a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages-profile-settings" class="nav-link">Settings</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a href="pages-timeline" class="nav-link">Timeline</a>
                    </li>
                    <li class="nav-item">
                        <a href="pages-faqs" class="nav-link">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a href="pages-pricing" class="nav-link">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a href="pages-gallery" class="nav-link">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a href="pages-maintenance" class="nav-link">Maintenance</a>
                    </li>
                    <li class="nav-item">
                        <a href="pages-coming-soon" class="nav-link">Coming Soon</a>
                    </li>
                    <li class="nav-item">
                        <a href="pages-sitemap" class="nav-link">Sitemap</a>
                    </li>
                    <li class="nav-item">
                        <a href="pages-search-results" class="nav-link">Search Results</a>
                    </li> --}}
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarPages" data-bs-toggle="collapse"
                        role="button" aria-expanded="false" aria-controls="sidebarPages">
                        <i class=" bx bxs-city"></i> <span>Venta</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarPages">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="" class="nav-link">Nueva Venta</a>
                            </li>

                            {{-- <li class="nav-item">
                        <a href="#sidebarProfile" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProfile">Profile                                </a>
                        <div class="collapse menu-dropdown" id="sidebarProfile">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="pages-profile" class="nav-link">Simple Page</a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages-profile-settings" class="nav-link">Settings</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a href="pages-timeline" class="nav-link">Timeline</a>
                    </li>
                    <li class="nav-item">
                        <a href="pages-faqs" class="nav-link">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a href="pages-pricing" class="nav-link">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a href="pages-gallery" class="nav-link">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a href="pages-maintenance" class="nav-link">Maintenance</a>
                    </li>
                    <li class="nav-item">
                        <a href="pages-coming-soon" class="nav-link">Coming Soon</a>
                    </li>
                    <li class="nav-item">
                        <a href="pages-sitemap" class="nav-link">Sitemap</a>
                    </li>
                    <li class="nav-item">
                        <a href="pages-search-results" class="nav-link">Search Results</a>
                    </li> --}}
                        </ul>
                    </div>
                </li>
                <li class="menu-title"><i class="ri-more-fill"></i> <span>Contabilidad</span></li>



                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarPages" data-bs-toggle="collapse"
                        role="button" aria-expanded="false" aria-controls="sidebarPages">
                        <i class=" bx bxs-city"></i> <span>Caja</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarPages">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="" class="nav-link">Caja</a>
                            </li>


                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarPages" data-bs-toggle="collapse"
                        role="button" aria-expanded="false" aria-controls="sidebarPages">
                        <i class=" bx bxs-city"></i> <span>Ingresos</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarPages">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="" class="nav-link">Nueva Venta</a>
                            </li>


                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarPages" data-bs-toggle="collapse"
                        role="button" aria-expanded="false" aria-controls="sidebarPages">
                        <i class=" bx bxs-city"></i> <span>Egresos</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarPages">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="" class="nav-link">Nueva Venta</a>
                            </li>


                        </ul>
                    </div>
                </li>


            </ul>
        </div>
        <!-- Sidebar -->
    </div>
    <div class="sidebar-background"></div>
</div>
