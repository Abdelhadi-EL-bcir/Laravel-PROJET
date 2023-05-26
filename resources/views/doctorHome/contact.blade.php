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

   @include('doctorHome.header')
    
   <div class="page-section">
    <div class="container">
      <center>
        <h1>
          Contact ADMIN
        </h1>
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

   @include('user.footer')

   <script src="../assets/js/jquery-3.5.1.min.js"></script>

   <script src="../assets/js/bootstrap.bundle.min.js"></script>

   <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

   <script src="../assets/vendor/wow/wow.min.js"></script>

   <script src="../assets/js/theme.js"></script>

</body>

</html>