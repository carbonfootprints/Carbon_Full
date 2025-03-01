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
                    <label>Calculate</label>
                    <i class="ti ti-apps"></i>
                </li>
                <li class="pc-item">
                    <a href="{{ route('admin.visit') }}" class="pc-link">
                        <span class="pc-micon"><i class="ti ti-wind"></i></span>
                        <span class="pc-mtext">Start Visit</span>
                    </a>
                </li>
                <li class="pc-item {{ $visit ? '' : 'disabled' }}">
                    <a href="{{ $visit ? route('organisation.create', ['visit_id' => $visit->id]) : '#' }}" class="pc-link">
                        <span class="pc-micon"><i class="ti ti-wind"></i></span>
                        <span class="pc-mtext">Organisation</span>
                    </a>
                </li>                

                
                <li class="pc-item {{ $visit && $visit->directformone ? '' : 'disabled' }}">
                    <a href="{{ $visit && $visit->directformone ? route('admin.directFormOne', ['visit_id' => $visit->id]) : '#' }}" class="pc-link">
                        <span class="pc-micon"><i class="ti ti-wind"></i></span>
                        <span class="pc-mtext">Direct 1</span>
                    </a>
                </li>
                
                <li class="pc-item {{ $visit && $visit->directformtwo ? '' : 'disabled' }}">
                    <a href="{{ $visit && $visit->directformtwo ? route('admin.directFormTwo', ['visit_id' => $visit->id]) : '#' }}" class="pc-link">
                        <span class="pc-micon"><i class="ti ti-wind"></i></span>
                        <span class="pc-mtext">Direct 2</span>
                    </a>
                </li>
                
                <li class="pc-item {{ $visit && $visit->directformthree ? '' : 'disabled' }}">
                    <a href="{{ $visit && $visit->directformthree ? route('admin.directFormThree', ['visit_id' => $visit->id]) : '#' }}" class="pc-link">
                        <span class="pc-micon"><i class="ti ti-wind"></i></span>
                        <span class="pc-mtext">Direct 3</span>
                    </a>
                </li>
                
                <li class="pc-item {{ $visit && $visit->indirectfirstformone ? '' : 'disabled' }}">
                    <a href="{{ $visit && $visit->indirectfirstformone ? route('admin.indirectFirstFormOne', ['visit_id' => $visit->id]) : '#' }}" class="pc-link">
                        <span class="pc-micon"><i class="ti ti-wind"></i></span>
                        <span class="pc-mtext">Indirect 1.1</span>
                    </a>
                </li>
                
                <li class="pc-item {{ $visit && $visit->indirectfirstformtwo ? '' : 'disabled' }}">
                    <a href="{{ $visit && $visit->indirectfirstformtwo ? route('admin.indirectFirstFormTwo', ['visit_id' => $visit->id]) : '#' }}" class="pc-link">
                        <span class="pc-micon"><i class="ti ti-wind"></i></span>
                        <span class="pc-mtext">Indirect 1.2</span>
                    </a>
                </li>
                
                <li class="pc-item {{ $visit && $visit->indirectsecondformone ? '' : 'disabled' }}">
                    <a href="{{ $visit && $visit->indirectsecondformone ? route('admin.indirectSecondFormOne', ['visit_id' => $visit->id]) : '#' }}" class="pc-link">
                        <span class="pc-micon"><i class="ti ti-wind"></i></span>
                        <span class="pc-mtext">Indirect 2.1</span>
                    </a>
                </li>
                
                <li class="pc-item {{ $visit && $visit->indirectsecondformtwo ? '' : 'disabled' }}">
                    <a href="{{ $visit && $visit->indirectsecondformtwo ? route('admin.indirectSecondFormTwo', ['visit_id' => $visit->id]) : '#' }}" class="pc-link">
                        <span class="pc-micon"><i class="ti ti-wind"></i></span>
                        <span class="pc-mtext">Indirect 2.2</span>
                    </a>
                </li>
                
                <li class="pc-item {{ $visit && $visit->indirectsecondformthree ? '' : 'disabled' }}">
                    <a href="{{ $visit && $visit->indirectsecondformthree ? route('admin.indirectSecondFormThree', ['visit_id' => $visit->id]) : '#' }}" class="pc-link">
                        <span class="pc-micon"><i class="ti ti-wind"></i></span>
                        <span class="pc-mtext">Indirect 2.3</span>
                    </a>
                </li>
                
                
                <li class="pc-item disabled">
                    <a href="#" class="pc-link">
                        <span class="pc-micon"><i class="ti ti-wind"></i></span>
                        <span class="pc-mtext">Indirect 3.1</span>
                    </a>
                </li>
                
                <li class="pc-item disabled">
                    <a href="#" class="pc-link">
                        <span class="pc-micon"><i class="ti ti-wind"></i></span>
                        <span class="pc-mtext">Indirect 3.2</span>
                    </a>
                </li>
                
                <li class="pc-item">
                    <a href="#" class="pc-link">
                        <span class="pc-micon"><i class="ti ti-inbox"></i></span>
                        <span class="pc-mtext">Production System</span>
                    </a>
                </li>
                
                <li class="pc-item">
                    <a href="#" class="pc-link">
                        <span class="pc-micon"><i class="ti ti-color-swatch"></i></span>
                        <span class="pc-mtext">Boundary</span>
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
