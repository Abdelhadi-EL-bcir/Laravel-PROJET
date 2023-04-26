<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public" />
    @include('admin.css')
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('admin.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                @include('admin.navbar')
                <!-- End of Topbar -->
                <div class="container-fluid">
                    <div class="container" align="center">
                        @if(session()->has('message'))

                        <div class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert">
                                x
                            </button>
                            {{session()->get('message')}}
                        </div>

                        @endif
                        <form class="main-form" action="{{url('edit_doctor' , $doctor->id)}}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row mt-5 ">
                                <div class="col-md-12 col-sm-12 py-2 wow fadeInLeft">
                                    <img width="100px" height="300px" class="img-fluid" alt="img"
                                        src="doctorimage/{{$doctor->image}}" />
                                </div>
                                <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                                    <input value="{{$doctor->name}}" type="text" name="name" class="form-control"
                                        placeholder="Full name">
                                </div>
                                <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                                    <input value="{{$doctor->phone}}" type="text" name="phone" class="form-control"
                                        placeholder="phone">
                                </div>
                                <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                                    <input value="{{$doctor->date}}" type="text" name="date" class="form-control">
                                </div>
                                <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                                    <select name="specialty" id="specialty" class="custom-select">
                                        <option value="{{$doctor->specialty}}">{{$doctor->specialty}}</option>
                                        <option value="general">General Health</option>
                                        <option value="cardiology">Cardiology</option>
                                        <option value="dental">Dental</option>
                                        <option value="neurology">Neurology</option>
                                        <option value="orthopaedics">Orthopaedics</option>
                                    </select>
                                </div>
                                <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                                    <input value="{{$doctor->room}}" type="number" name="room" class="form-control"
                                        placeholder="room">
                                </div>
                                <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                                    <input type="file" name="file" class="form-control" placeholder="room">
                                </div>
                            </div>

                            <input type="submit" value="Edit" class="btn btn-primary"
                                style="background-color : #4e73df ; ">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('admin.script')

</body>

</html>