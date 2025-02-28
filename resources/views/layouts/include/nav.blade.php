<nav class="navbar navbar-main navbar-expand-lg position-sticky shadow-none z-index-sticky" id="navbarBlur" data-scroll="true">
    <div class="container-fluid py-1 px-3">
      @hasrole($adminRole)
      <nav aria-label="breadcrumb">
         <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 d-flex">
            <li class="breadcrumb-item">
               <img src="{{ asset('assets/images/dashboard-grey-icon.png') }}" alt="Dashboard Icon" class="mx-1" />
            </li>
            <li class="breadcrumb-item text-dark mt-1">Dashboard</li>
         </ol>
         <h6 class="mt-0">Dashboard</h6>
      </nav>
      @endhasrole
      @hasrole($supplierRole)
      <nav aria-label="breadcrumb">
         <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 d-flex">
            <li class="breadcrumb-item">
               <img src="{{ asset('assets/images/dashboard-grey-icon.png') }}" alt="Dashboard Icon" class="mx-1" />
            </li>
            <li class="breadcrumb-item text-dark mt-1">Service</li>
         </ol>
         <h6 class="mt-0">Service</h6>
      </nav>
      @endhasrole
       <button class="sidenav-togglers sidenav-toggler-inner d-xl-block btn p-0 me-2 ms-4" type="button" id="custom-sidenav-toggler" aria-label="Toggle navigation">
          <div>
             <span class="sidenav-toggler-line"></span>
             <span class="sidenav-toggler-line"></span>
             <span class="sidenav-toggler-line"></span>
          </div>
       </button>
 
       <div class="collapse navbar-collapse mt-sm-0 mt-2" id="navbar">
          <ul class="navbar-nav ms-auto justify-content-end d-flex align-items-center">
             <li class="nav-item dropdown pe-2">
                <a class="nav-link text-body" id="notificationsDropdown" data-bs-toggle="dropdown" href="#" aria-expanded="false">
                   <img src="{{ asset('assets/images/notification.png') }}" alt="Notifications" />
                   <span class="position-absolute translate-middle badge rounded-pill bg-danger border border-white">
                      2
                      <span class="visually-hidden">unread notifications</span>
                   </span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end px-2 py-3" aria-labelledby="notificationsDropdown" style="box-shadow: -20px 20px 60px #00000029;">
                   <li>
                      <div class="p-2">
                         <h6>Notifications</h6>
                         <p class="mb-0">You have 4 unread notifications</p>
                      </div>
                      <hr class="horizontal dark" />
                   </li>
                   <li>
                      <a class="dropdown-item d-flex py-2" href="#">
                         <img src="{{ asset('assets/img/team-4.jpg') }}" class="avatar avatar-sm me-3 rounded-circle" alt="User Image" />
                         <div>
                            <h6 class="text-sm font-weight-normal mb-1">
                               You received $100 from Henry
                            </h6>
                            <p class="text-xs text-secondary mb-0"><i class="fa fa-clock me-1"></i> 07 Sep 2020</p>
                         </div>
                      </a>
                   </li>
                   <li>
                      <a class="dropdown-item d-flex py-2" href="#">
                         <img src="{{ asset('assets/img/team-4.jpg') }}" class="avatar avatar-sm me-3 rounded-circle" alt="User Image" />
                         <div>
                            <h6 class="text-sm font-weight-normal mb-1">
                               You received $100 from Henry
                            </h6>
                            <p class="text-xs text-secondary mb-0"><i class="fa fa-clock me-1"></i> 07 Sep 2020</p>
                         </div>
                      </a>
                   </li>
                   <li>
                      <a class="dropdown-item d-flex py-2" href="#">
                         <img src="{{ asset('assets/img/team-4.jpg') }}" class="avatar avatar-sm me-3 rounded-circle" alt="User Image" />
                         <div>
                            <h6 class="text-sm font-weight-normal mb-1">
                               You received $100 from Henry
                            </h6>
                            <p class="text-xs text-secondary mb-0"><i class="fa fa-clock me-1"></i> 07 Sep 2020</p>
                         </div>
                      </a>
                   </li>
                   <li>
                      <a class="dropdown-item d-flex py-2" href="#">
                         <img src="{{ asset('assets/img/team-4.jpg') }}" class="avatar avatar-sm me-3 rounded-circle" alt="User Image" />
                         <div>
                            <h6 class="text-sm font-weight-normal mb-1">
                               You received $100 from Henry
                            </h6>
                            <p class="text-xs text-secondary mb-0"><i class="fa fa-clock me-1"></i> 07 Sep 2020</p>
                         </div>
                      </a>
                   </li>
                   <li>
                      <a class="dropdown-item d-flex py-2" href="#">
                         <img src="{{ asset('assets/img/team-4.jpg') }}" class="avatar avatar-sm me-3 rounded-circle" alt="User Image" />
                         <div>
                            <h6 class="text-sm font-weight-normal mb-1">
                               You received $100 from Henry
                            </h6>
                            <p class="text-xs text-secondary mb-0"><i class="fa fa-clock me-1"></i> 07 Sep 2020</p>
                         </div>
                      </a>
                   </li>
                   <li>
                      <p class="text-info text-sm text-center text-decoration-underline mb-0">
                         View More
                      </p>
                   </li>
                </ul>
             </li>
 
             <li class="nav-item dropdown d-flex align-items-center">
                <a class="nav-link d-flex align-items-center p-0" id="profileDropdown" data-bs-toggle="dropdown" href="#" aria-expanded="false">
                   <img src="{{ asset('assets/images/team-2.jpg') }}" class="avatar avatar-md rounded-circle" style="width: 40px; height: 40px;" alt="Profile" />
                </a>
                <ul class="dropdown-menu dropdown-menu-end px-2 py-3" aria-labelledby="profileDropdown">
                   <li>
                      <a class="dropdown-item d-flex py-2" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"> 
                        <i class="fa fa-sign-out-alt me-2"></i> Logout 
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                      </form>
                   </li>
                </ul>
             </li>
          </ul>
       </div>
    </div>
 </nav>
 