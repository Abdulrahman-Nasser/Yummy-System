       <!-- sidebar -->
       <nav class="sidebar sidebar-offcanvas" id="sidebar">

           <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
               <a class="sidebar-brand brand-logo" href="index.html"><img
                       src="{{ asset('assets/admin/images/logo/logo.jpg') }}" class="w-25 h-100" alt="logo" /></a>
               <a class="sidebar-brand brand-logo-mini" href="index.html"><img
                       src="{{ asset('assets/admin/images/logo/logo.jpg') }}" alt="logo" /></a>
           </div>

           {{-- asside --}}
           <ul class="nav">

               {{-- asside profile --}}
               <li class="nav-item profile">
                   <div class="profile-desc">
                       <div class="profile-pic">
                           <div class="count-indicator">
                               <img class="img-xs rounded-circle "
                                   src="{{ asset('assets/admin/images/faces/face15.jpg') }}" alt="">
                               <span class="count bg-success"></span>
                           </div>
                           <div class="profile-name">
                               <h5 class="mb-0 font-weight-normal">{{ Auth::user()->name }}</h5>
                               <span>Gold Member</span>
                           </div>
                       </div>
                       <a href="#" id="profile-dropdown" data-toggle="dropdown"><i
                               class="mdi mdi-dots-vertical"></i></a>
                       <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list"
                           aria-labelledby="profile-dropdown">
                           <a href="#" class="dropdown-item preview-item">
                               <div class="preview-thumbnail">
                                   <div class="preview-icon bg-dark rounded-circle">
                                       <i class="mdi mdi-settings text-primary"></i>
                                   </div>
                               </div>
                               <div class="preview-item-content">
                                   <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                               </div>
                           </a>
                           <div class="dropdown-divider"></div>
                           <a href="#" class="dropdown-item preview-item">
                               <div class="preview-thumbnail">
                                   <div class="preview-icon bg-dark rounded-circle">
                                       <i class="mdi mdi-onepassword  text-info"></i>
                                   </div>
                               </div>
                               <div class="preview-item-content">
                                   <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                               </div>
                           </a>
                           <div class="dropdown-divider"></div>
                           <a href="#" class="dropdown-item preview-item">
                               <div class="preview-thumbnail">
                                   <div class="preview-icon bg-dark rounded-circle">
                                       <i class="mdi mdi-calendar-today text-success"></i>
                                   </div>
                               </div>
                               <div class="preview-item-content">
                                   <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                               </div>
                           </a>
                       </div>
                   </div>
               </li>
               {{-- end asside profile --}}

               {{-- start asside navigation --}}
               <li class="nav-item nav-category">
                   <span class="nav-link">Navigation</span>
               </li>

               <li class="nav-item menu-items">
                   <a class="nav-link" href="{{ route('admin.home') }}">
                       <span class="menu-icon">
                           <i class="mdi mdi-speedometer"></i>
                       </span>
                       <span class="menu-title">Dashboard</span>
                   </a>
               </li>
               <li class="nav-item user menu-items">
                   <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                       aria-controls="ui-basic">
                       <span class="menu-icon">
                           <i class="bi bi-person"></i>
                       </span>
                       <span class="menu-title">User</span>
                       <i class="menu-arrow"></i>
                   </a>
                   <div class="collapse" id="ui-basic">
                       <ul class="nav flex-column sub-menu">
                           <li class="nav-item"> <a class="nav-link" href="{{ route('admin.allUsers') }}">All Users</a>
                           </li>
                           <li class="nav-item"> <a class="nav-link" href="{{ route('admin.addUser') }}">Add User</a>
                           </li>
                       </ul>
                   </div>
               </li>


               <li class="nav-item category menu-items">
                   <a class="nav-link" data-toggle="collapse" href="#ui-category" aria-expanded="false"
                       aria-controls="ui-category">
                       <span class="menu-icon">
                           <i class="mdi mdi-playlist-play"></i>
                       </span>
                       <span class="menu-title">Category</span>
                       <i class="menu-arrow"></i>
                   </a>

                   <div class="collapse" id="ui-category">
                       <ul class="nav flex-column sub-category">
                           <li class="nav-item"> <a class="nav-link" href="{{ route('admin.allCategories') }}">All
                                   Categories</a>
                           </li>
                           <li class="nav-item"> <a class="nav-link" href="{{ route('admin.getAddCategory') }}">Add
                                   Category</a>
                           </li>
                       </ul>
                   </div>

               </li>
               <li class="nav-item products menu-items">
                   <a class="nav-link" data-toggle="collapse" href="#ui-products" aria-expanded="false"
                       aria-controls="ui-products">
                       <span class="menu-icon">
                           <i class="bi bi-cart"></i>
                       </span>
                       <span class="menu-title">Products</span>
                       <i class="menu-arrow"></i>
                   </a>

                   <div class="collapse" id="ui-products">
                       <ul class="nav flex-column sub-products">
                           <li class="nav-item"> <a class="nav-link" href="{{ route('admin.allProducts') }}">All
                                   Products</a>
                           </li>
                           <li class="nav-item"> <a class="nav-link" href="{{ route('admin.addProduct') }}">Add
                                   Products</a>
                           </li>
                       </ul>
                   </div>
               </li>
               <li class="nav-item menu-items">
                   <a class="nav-link" href="pages/charts/chartjs.html">
                       <span class="menu-icon">
                           <i class="mdi mdi-chart-bar"></i>
                       </span>
                       <span class="menu-title">Charts</span>
                   </a>
               </li>
               <li class="nav-item menu-items">
                   <a class="nav-link" href="pages/icons/mdi.html">
                       <span class="menu-icon">
                           <i class="mdi mdi-contacts"></i>
                       </span>
                       <span class="menu-title">Icons</span>
                   </a>
               </li>
               <li class="nav-item menu-items">
                   <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false"
                       aria-controls="auth">
                       <span class="menu-icon">
                           <i class="mdi mdi-security"></i>
                       </span>
                       <span class="menu-title">User Pages</span>
                       <i class="menu-arrow"></i>
                   </a>
                   <div class="collapse" id="auth">
                       <ul class="nav flex-column sub-menu">
                           <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page
                               </a></li>
                           <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a>
                           </li>
                           <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a>
                           </li>
                           <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                           <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register
                               </a>
                           </li>
                       </ul>
                   </div>
               </li>
               <li class="nav-item menu-items">
                   <a class="nav-link"
                       href="http://www.bootstrapdash.com/demo/corona-free/jquery/documentation/documentation.html">
                       <span class="menu-icon">
                           <i class="mdi mdi-file-document-box"></i>
                       </span>
                       <span class="menu-title">Documentation</span>
                   </a>
               </li>

               {{-- end asside navigation --}}
           </ul>
           {{-- end asside --}}

       </nav>
       {{-- end sidebar --}}