 <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            
                            <a class="nav-link" href="{{url('vendor')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>

                            
                            <a class="nav-link" href="{{url('vendor/orders')}}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-clock-rotate-left"></i></div>
                                Order 
                            </a>
                            {{-- <a class="nav-link" href="{{url('vendor/settings')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Settings
                            </a> --}}
                            <a class="nav-link" href="{{url('vendor/profile')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                profile
                            </a>
                             
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        {{session('vendorName')}}
                    </div>
                </nav>
            </div>
            