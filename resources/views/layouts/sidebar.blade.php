<!-- [ Sidebar Menu ] start -->
<nav class="pc-sidebar">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="../dashboard/index.html" class="b-brand text-primary">
                <!-- ========   Change your logo from here   ============ -->
                <img src="../assets/images/logo-dark.svg" alt="" class="logo logo-lg" />
            </a>
        </div>
        <div class="navbar-content">
            <ul class="pc-navbar">
                <li class="pc-item pc-caption">
                    <label>Dashboard</label>
                    <i class="ti ti-dashboard"></i>
                </li>
                <li class="pc-item">
                    <a href="{{ route('default') }}" class="pc-link"><span class="pc-micon"><i
                                class="ti ti-dashboard"></i></span><span class="pc-mtext">Default</span></a>
                </li>

                <li class="pc-item pc-caption">
                    <label>Elements</label>
                    <i class="ti ti-apps"></i>
                </li>
                <li class="pc-item">
                    <a href="{{ route('admin.production') }}" class="pc-link">

                        <span class="pc-micon"><i class="ti ti-inbox"></i></span>
                        <span class="pc-mtext">Production System</span>
                    </a>
                </li>
                <li class="pc-item">
                    <a href="{{ route('admin.boundary') }}" class="pc-link">
                        <span class="pc-micon"><i class="ti ti-color-swatch"></i></span>
                        <span class="pc-mtext">Boundary</span>
                    </a>
                </li>
                <li class="pc-item">
                    <a href="{{ route('admin.visit') }}" class="pc-link">
                        <span class="pc-micon"><i class="ti ti-file-plus"></i></span>
                        <span class="pc-mtext">Create Visit</span>
                    </a>
                </li>
                <li class="pc-item">
                    <a href="{{ route('admin.organisation') }}" class="pc-link">
                        <span class="pc-micon"><i class="ti ti-wind"></i></span>
                        <span class="pc-mtext">Lets Calculate</span>
                    </a>
                </li>
                


            </ul>

            <div class="w-100 text-center">
                <div class="badge theme-version badge rounded-pill bg-light text-dark f-12"></div>
            </div>
        </div>
    </div>
</nav>
<!-- [ Sidebar Menu ] end -->
