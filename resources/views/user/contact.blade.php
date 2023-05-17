<!DOCTYPE html>
<html lang="en">

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

<body>

   <!-- Back to top button -->
   <div class="back-to-top"></div>

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

  

  <div class="page-section">
    <div class="container">
      <center>
        <img src="../assets/img/contact.png" width="100px" height="100px" alt="contact-logo"/>
      </center>
      @if(session()->has('message'))

                        <div class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert">
                                x
                            </button>
                            {{session()->get('message')}}
                        </div>

                        @endif
      <form action="{{url('send_message')}}" class="contact-form mt-5" method="POST" >
        @csrf
        <div class="row mb-3">
          <div class="col-sm-6 py-2 wow fadeInLeft">
            <label for="fullName">Name</label>
            <input name="name" type="text" id="fullName" class="form-control" placeholder="Full name..">
          </div>
          <div class="col-sm-6 py-2 wow fadeInRight">
            <label for="emailAddress">Email</label>
            <input name="email" type="text" id="emailAddress" class="form-control" placeholder="Email address..">
          </div>
          <div class="col-12 py-2 wow fadeInUp">
            <label for="subject">Subject</label>
            <input name="subject" type="text" id="subject" class="form-control" placeholder="Enter subject..">
          </div>
          <div class="col-12 py-2 wow fadeInUp">
            <label for="message">Message</label>
            <textarea name="msg" id="message" class="form-control" rows="8" placeholder="Enter Message.."></textarea>
          </div>
        </div>
        <button type="submit" class="btn" style="background-color : #4e73df ; color : #fff " >Send Message</button>
      </form>
    </div>
  </div>

  

   <!-- .banner-home -->

   @include('user.footer')

   <script src="../assets/js/jquery-3.5.1.min.js"></script>

   <script src="../assets/js/bootstrap.bundle.min.js"></script>

   <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

   <script src="../assets/vendor/wow/wow.min.js"></script>

   <script src="../assets/js/theme.js"></script>

</body>

</html>