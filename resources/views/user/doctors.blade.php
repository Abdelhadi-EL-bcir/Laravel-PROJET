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

   @include('user.header')


   <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <h1 class="font-weight-normal">Our Doctors</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  <div class="page-section bg-light">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">

          <div class="row">
          @foreach(\App\Models\Doctor::all()  as $doctor)
            <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
              <div class="card-doctor">
                <div class="header">
                  <img src="doctorimage/{{$doctor->image}}" alt="">
                </div>
                <div class="body">
                  <p class="text-xl mb-0">{{$doctor->name}}</p>
                  <span class="text-sm text-grey">{{$doctor->specialty}}</span>
                  <p>
                    <a href="{{url('get_doctor_page' , $doctor->id)}}" > Read more... </a>
                  </p>
                </div>
              </div>
            </div>
            @endforeach

          </div>
        </div>
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->

   @include('user.footer')

   <script src="../assets/js/jquery-3.5.1.min.js"></script>

   <script src="../assets/js/bootstrap.bundle.min.js"></script>

   <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

   <script src="../assets/vendor/wow/wow.min.js"></script>

   <script src="../assets/js/theme.js"></script>

</body>

</html>