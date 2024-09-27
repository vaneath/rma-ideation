<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">
            <ul class="navbar-nav mt-5" id="navbar-nav">
                <li class="nav-item">
                    <a href="/wallets" class="nav-link">
                        <i class="ri-dashboard-2-line"></i>
                        <span>Wallets</span>
                    </a>
                </li>

                <?php if (\Illuminate\Support\Facades\Blade::check('admin')): ?>
                    <li class="nav-item">
                        <a href="/records" class="nav-link">
                            <i class="ri-money-dollar-circle-line"></i>
                            <span>Customer Records</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/sections" class="nav-link">
                            <i class="ri-apps-2-line"></i>
                            <span>Sections</span>
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
<?php /**PATH /home/vaneath/projects/rma-ideation/resources/views/layouts/rma-sidebar.blade.php ENDPATH**/ ?>