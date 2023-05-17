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

        <center>
            <svg width="100px" height="50px" style="m-2"  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-rolodex" viewBox="0 0 16 16">
              <path d="M8 9.05a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
              <path d="M1 1a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h.5a.5.5 0 0 0 .5-.5.5.5 0 0 1 1 0 .5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5.5.5 0 0 1 1 0 .5.5 0 0 0 .5.5h.5a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H6.707L6 1.293A1 1 0 0 0 5.293 1H1Zm0 1h4.293L6 2.707A1 1 0 0 0 6.707 3H15v10h-.085a1.5 1.5 0 0 0-2.4-.63C11.885 11.223 10.554 10 8 10c-2.555 0-3.886 1.224-4.514 2.37a1.5 1.5 0 0 0-2.4.63H1V2Z"/>
            </svg>
        </center>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div>
                <x-jet-label for="phone" value="{{ __('Phone') }}" />
                <x-jet-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autofocus autocomplete="phone" />
            </div>

            <div>
                <x-jet-label for="address" value="{{ __('Address') }}" />
                <x-jet-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autofocus autocomplete="address" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
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
