<header class="container">
      <div class="topbar">
         <div class="container-fluid">
            <div class="row">
               <div class="col-sm-8 text-sm">
                  <div class="site-info">
                     <span class="divider">|</span>
                     <a href="#"><span class="mai-mail text-primary"></span> IRISI.HOSPITALE@Gmail.com</a>
                     <span class="divider">|</span>
                  </div>
               </div>
               <div class="col-sm-4 text-right text-sm">
                  <div class="social-mini-button">
                     <a href="#"><span class="mai-logo-facebook-f"></span></a>
                     <a href="#"><span class="mai-logo-twitter"></span></a>
                     <a href="#"><span class="mai-logo-dribbble"></span></a>
                     <a href="#"><span class="mai-logo-instagram"></span></a>
                  </div>
               </div>
            </div> <!-- .row -->
         </div> <!-- .container -->
      </div> <!-- .topbar -->

      <nav class="navbar navbar-expand-lg navbar-light ">
         <div class="container">
            <a class="navbar-brand" href="{{url('/')}}">
                <h1>
                  Doctor : {{auth()->user()->name}}   Work Space
                </h1>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport"
               aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupport">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                     <a class="nav-link" href="{{url('/')}}">Home</a>
                  </li>
                  <li class="nav-item active">
                     <a class="nav-link" href="{{url('/dcontact')}}">Contact</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="{{url('/get_my_patients' , auth()->user()->name )}}">My Patients</a>
                  </li>  
                  @if(Route::has('login'))

                  @auth
                  <x-app-layout>
                  </x-app-layout>

                  @else
                  <li class="nav-item">
                     <a class="btn btn-primary m-1 ml-lg-3" href="{{route('login')}}">Login</a>
                  </li>
                  <li class="nav-item">
                     <a class="btn btn-primary m-1 ml-lg-3" href="{{route('register')}}">Register</a>
                  </li>
                  @endauth

                  @endif
               </ul>
            </div> <!-- .navbar-collapse -->
         </div> <!-- .container -->
      </nav>
   </header>