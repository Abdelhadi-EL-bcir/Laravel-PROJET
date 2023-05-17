<x-guest-layout>
    <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <meta http-equiv="X-UA-Compatible" content="ie=edge">

   <meta name="copyright" content="MACode ID, https://macodeid.com/">
   <link rel="icon" type="image/x-icon" href="https://img.icons8.com/dusk/64/null/home--v2.png">

   <title>One Health - Medical Center HTML5 Template</title>
   <link rel="stylesheet" href="../assets/css/theme.css">
   <link rel="stylesheet" href="../assets/css/maicons.css">
   <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

   <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

   <link rel="stylesheet" href="../assets/css/bootstrap.css">
</head>
    <header class="container">
      <div class="topbar">
         <div class="container-fluid">
            <div class="row">
               <div class="col-sm-8 text-sm">
                  <div class="site-info">
                     <a href="#"><span class="mai-call text-primary"></span> +2126 0967 3388</a>
                     <span class="divider">|</span>
                     <a href="#"><span class="mai-mail text-primary"></span> IRISI.HOSPITALE@Gmail.com</a>
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
            <a class="navbar-brand" href="{{url('/')}}"><span class="text-primary">
                  <img width="100px" height="50px" src="../assets/img/logo.png" alt="amis-logo" />
                  IRISI</span>-Health</a>

            <!-- <form action="#">
               <div class="input-group input-navbar">
                  <div class="input-group-prepend">
                     <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
                  </div>
                  <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username"
                     aria-describedby="icon-addon1">
               </div>
            </form> -->

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport"
               aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupport">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                     <a class="nav-link" href="{{url('/')}}">Home</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="{{url('/about')}}">About Us</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="{{url('/contact')}}">Contact</a>
                  </li>
                  @if(Route::has('login'))

                  @auth

                  <li class="nav-item">
                     <a class="nav-link" href="{{url('my_appointment')}}">My Appointments</a>
                  </li>

                  <x-app-layout>
                  </x-app-layout>

                  @else
                  <li class="nav-item">
                     <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Login</a>
                  </li>
                  <li class="nav-item">
                     <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">Register</a>
                  </li>
                  @endauth

                  @endif
               </ul>
            </div> <!-- .navbar-collapse -->
         </div> <!-- .container -->
      </nav>
   </header>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                
                {{ session('status') }}
            </div>
        @endif
        <center>
            <svg width="100px" height="50px" style="m-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-open-fill" viewBox="0 0 16 16">
                   <path d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2h.5a.5.5 0 0 1 .5.5V15h-1V2zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
            </svg>
        </center>

        <form class="mb-3 mt-3" method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
    <pre>



    </pre>
    <footer class="page-footer">
      <div class="container">
         <div class="row px-md-3">
            <div class="col-sm-6 col-lg-3 py-3">
               <h5>Company</h5>
               <ul class="footer-menu">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Career</a></li>
                  <li><a href="#">Editorial Team</a></li>
                  <li><a href="#">Protection</a></li>
               </ul>
            </div>
            <div class="col-sm-6 col-lg-3 py-3">
               <h5>More</h5>
               <ul class="footer-menu">
                  <li><a href="#">Terms & Condition</a></li>
                  <li><a href="#">Privacy</a></li>
                  <li><a href="#">Advertise</a></li>
                  <li><a href="#">Join as Doctors</a></li>
               </ul>
            </div>
            <div class="col-sm-6 col-lg-3 py-3">
               <h5>Our partner</h5>
               <ul class="footer-menu">
                  <li><a href="#">One-Fitness</a></li>
                  <li><a href="#">One-Drugs</a></li>
                  <li><a href="#">One-Live</a></li>
               </ul>
            </div>
            <div class="col-sm-6 col-lg-3 py-3">
               <h5>Contact</h5>
               <p class="footer-link mt-2">351 Willow Street Franklin, MA 02038</p>
               <a href="#" class="footer-link">701-573-7582</a>
               <a href="#" class="footer-link">Abdelhadi.Elbcir@Gmail.com</a>

               <h5 class="mt-3">Social Media</h5>
               <div class="footer-sosmed mt-3">
                  <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
                  <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
                  <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
                  <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
               </div>
            </div>
         </div>

         <hr>

         <p id="copyright">Copyright &copy; 2023 <a href="#" target="_blank">DJAYJI</a>. All
            right reserved</p>
      </div>
   </footer>
</x-guest-layout>
