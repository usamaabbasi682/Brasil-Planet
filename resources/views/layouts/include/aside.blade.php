<aside class="custom-aside-container sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3" id="sidenav-main">
    <div class="sidenav-header">
       <img src="{{ asset('assets/images/close-icon.png') }}" alt="" class="position-absolute d-xl-none end-0 top-0 m-3" id="closeSidebar" />
       <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
       <a class="navbar-brand m-0 d-flex justify-content-center" href="index.html">
          <img src="{{ asset('assets/images/logo-centered.png') }}" class="navbar-brand-img h-100 custom-logo" alt="main_logo" />
       </a>
    </div>
    <div class="collapse navbar-collapse w-auto h-auto" id="sidenav-collapse-main">
        @hasrole($adminRole)
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link {{ request()->is('home') ? 'active' : ''}}" aria-controls="dashboardsExamples" role="button">
                        <div class="custom-icon-container">
                        <img src="{{ request()->is('home') ? asset('assets/images/dashboard-icon.png') : asset('assets/images/dashboard-colored-icon.png')}}" alt="" />
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="javascript:void(0)" class="nav-link" aria-controls="dashboardsExamples" role="button">
                        <div class="custom-icon-container">
                            <img src="{{ asset('assets/images/bookings-colored-icon.png') }}" alt="" />
                        </div>
                        <span class="nav-link-text ms-1">Bookings</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('template') }}" class="nav-link {{ request()->is('admin/template') ? 'active' : ''}}" aria-controls="dashboardsExamples" role="button">
                        <div class="custom-icon-container">
                            <img src="{{ request()->is('admin/template') ? asset('assets/images/templates-white-icon.png') : asset('assets/images/templates-colored-icon.png') }}" alt="" />
                        </div>
                        <span class="nav-link-text ms-1">Templates</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('hotels.index') }}" class="nav-link {{ request()->routeIs('hotels*') ? 'active' : ''}}" aria-controls="dashboardsExamples" role="button">
                        <div class="custom-icon-container">
                            <img src="{{ request()->routeIs('hotels*') ? asset('assets/images/hotels-white-icon.png') : asset('assets/images/hotels-colored-icon.png')}}" alt="" />
                        </div>
                        <span class="nav-link-text ms-1">Hotels</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="javascript:void(0)" class="nav-link" aria-controls="dashboardsExamples" role="button">
                        <div class="custom-icon-container">
                        <img src="{{ asset('assets/images/supplier-colored-icon.png') }}" alt="" />
                        </div>
                        <span class="nav-link-text ms-1">Suppliers</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('payments') }}" class="nav-link {{ request()->routeIs('payments') ? 'active' : ''}}" aria-controls="dashboardsExamples" role="button">
                        <div class="custom-icon-container">
                        <img src="{{ request()->routeIs('payments') ? asset('assets/images/payments-white-icon.png') : asset('assets/images/payments-colored-icon.png') }}" alt="" />
                        </div>
                        <span class="nav-link-text ms-1">Payments</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('statistics') }}" class="nav-link {{ request()->routeIs('statistics') ? 'active' : ''}}" aria-controls="dashboardsExamples" role="button">
                        <div class="custom-icon-container">
                            <img src="{{ request()->routeIs('statistics') ? asset('assets/images/statistics-white-icon.png') : asset('assets/images/statistics-colored-icon.png') }}" alt="" />
                        </div>
                        <span class="nav-link-text ms-1">Statistics</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('settings') }}" class="nav-link {{  request()->routeIs('settings*') ? 'active': '' }}" aria-controls="dashboardsExamples" role="button">
                       <div class="custom-icon-container">
                          <img src="{{ request()->routeIs('settings*') ? asset('assets/images/settings-white-icon.png') :asset('assets/images/settings-colored-icon.png') }}" alt="" />
                       </div>
                       <span class="nav-link-text ms-1">Settings</span>
                    </a>
                </li>
            </ul>
        @endhasrole
        @hasrole($supplierRole)
            <ul class="navbar-nav">
                <li class="nav-item">
                   <a href="{{ route('home') }}" class="nav-link {{ request()->is('home') || request()->routeIs('service.view')  ? 'active' : ''}}" aria-controls="dashboardsExamples" role="button">
                      <div class="custom-icon-container">
                         <img src="{{ request()->is('home') || request()->routeIs('service.view') ? asset('assets/images/service-white-icon.png') : asset('assets/images/service-colored-icon.png') }}" alt="" />
                      </div>
                      <span class="nav-link-text ms-1">Service</span>
                   </a>
                </li>
                <li class="nav-item">
                   <a href="{{ route('supplier.payments') }}" class="nav-link {{ request()->routeIs('supplier.payments') || request()->routeIs('supplier.payments.view') ? 'active' : ''}}" aria-controls="dashboardsExamples" role="button">
                      <div class="custom-icon-container">
                         <img src="{{ request()->routeIs('supplier.payments') || request()->routeIs('supplier.payments.view') ? asset('assets/images/payments-white-icon.png') : asset('assets/images/payments-colored-icon.png') }}" alt="" />
                      </div>
                      <span class="nav-link-text ms-1">Payments</span>
                   </a>
                </li>
                <li class="nav-item">
                   <a href="{{ route('settings') }}" class="nav-link {{  request()->routeIs('settings*') ? 'active': '' }}" aria-controls="dashboardsExamples" role="button">
                      <div class="custom-icon-container">
                         <img src="{{ request()->routeIs('settings*') ? asset('assets/images/settings-white-icon.png') :asset('assets/images/settings-colored-icon.png') }}" alt="" />
                      </div>
                      <span class="nav-link-text ms-1">Settings</span>
                   </a>
                </li>
             </ul>
        @endhasrole
    </div>
 </aside>
 
    