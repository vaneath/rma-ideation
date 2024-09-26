<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index" class="logo">
            <span class="logo-lg">
                <img src="{{ URL::asset('build/images/rma.png') }}" alt="" height="40">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">
            <ul class="navbar-nav" id="navbar-nav">
                {{-- <li class="menu-title"><span>@lang('translation.menu')</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarDashboards" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="ri-dashboard-2-line"></i> <span>@lang('translation.dashboards')</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarDashboards">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="wallets" class="nav-link">Wallets</a>
                            </li>
                        </ul>
                    </div>
                </li> <!-- end Dashboard Menu --> --}}

                <li class="nav-item">
                    <a href="wallets" class="nav-link">
                        <i class="ri-dashboard-2-line"></i>
                        <span>Wallets</span>
                    </a>
                </li>

                @admin
                    <li class="nav-item">
                        <a href="records" class="nav-link">
                            <i class="ri-money-dollar-circle-line"></i>
                            <span>Customer Records</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="sections" class="nav-link">
                            <i class="ri-apps-2-line"></i>
                            <span>Sections</span>
                        </a>
                    </li>
                @endadmin
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
