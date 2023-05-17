<!DOCTYPE html>
<html lang="en">

<head>

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
                        <form class="main-form" action="{{url('upload_new')}}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row mt-5 ">
                                <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                                    <input type="text" name="title" class="form-control" placeholder="title">
                                </div>
                                <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                                    <input type="text" name="description" class="form-control" placeholder="description">
                                </div>
                                <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                                    <input type="file" name="file" class="form-control" >
                                </div>                 
                            </div>

                            <input type="submit" value="Add" class="btn btn-primary"
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