   <!-- ======= Header ======= -->
   <header id="header" class="header fixed-top d-flex align-items-center">
       <div class="container d-flex align-items-center justify-content-between">

           <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">

               <h1>Yummy<span>.</span></h1>
           </a>

           <nav id="navbar" class="navbar">
               <ul>
                   <li><a href="#hero">Home</a></li>
                   <li><a href="#about">About</a></li>
                   <li><a href="#menu">Menu</a></li>
                   <li><a href="{{route('user.booktable')}}">Book A Table</a></li>
                   <li><a href="{{ route('user.chef') }}">Chefs</a></li>
                   <li><a href="#gallery">Gallery</a></li>


                   {{-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i
                            class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="#">Drop Down 1</a></li>
                        <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                    class="bi bi-chevron-down dropdown-indicator"></i></a>
                            <ul>
                                <li><a href="#">Deep Drop Down 1</a></li>
                                <li><a href="#">Deep Drop Down 2</a></li>
                                <li><a href="#">Deep Drop Down 3</a></li>
                                <li><a href="#">Deep Drop Down 4</a></li>
                                <li><a href="#">Deep Drop Down 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Drop Down 2</a></li>
                        <li><a href="#">Drop Down 3</a></li>
                        <li><a href="#">Drop Down 4</a></li>
                    </ul>
                </li> --}}

                   <li><a href="{{ route('user.contact') }}">Contact</a></li>
               </ul>
           </nav><!-- .navbar -->


           @guest
               @if (Route::has('login'))
                   <a class="btn-book-a-table" href="{{ route('login') }}">Sign in</a>
               @endif
           @else
               <a class="btn-book-a-table" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                   {{ __('Logout') }}
               </a>

               <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                   @csrf
               </form>

           @endguest

           <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
           <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

       </div>
   </header><!-- End Header -->
