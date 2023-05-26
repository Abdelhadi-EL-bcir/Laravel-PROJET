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
   <base href="/public">
</head>

<body>

   <!-- Back to top button -->
   <div class="back-to-top"></div>

   @include('user.header')

   <div class="page-section pt-5">
    <div class="container">
     

      <div class="row">
        <div class="col-lg-8">
          <article class="blog-details">
            <div>
            <h2 class="post-title h1">Fullname : {{$data->name}}</h2>
            <div class="post-content">
            <p>Birthday : {{$data->date}}</p><br>
            <p>Specialty : {{$data->specialty}}</p><br>
            <p>Phone number : {{$data->phone}}</p><br>
            <p>Room number : {{$data->room}}</p><br>
            <p>
                 is a highly skilled and trained medical professional who diagnoses, treats, and cares for individuals suffering from various illnesses and injuries. Doctors play a crucial role in maintaining and promoting human health by providing medical expertise and care to their patients.
            </p><br>
            </div>
          </article> 
        </div>

        <div class="col-lg-4">
          <div class="sidebar">
            <div class="sidebar-block">
              <form action="#" class="search-form">
                <div class="form-group">
                  <img class="img-fluid" src="doctorimage/{{$data->image}}" alt="test">
                </div>
              </form>
            </div>
          </div>
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