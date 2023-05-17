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
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="container" align="center">
                                @if(session()->has('message'))

                                <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">
                                        x
                                    </button>
                                    {{session()->get('message')}}
                                </div>

                                @endif
                                <form class="main-form" action="{{url('send_msg')}}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mt-5 ">
                                        <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                                            <label for="email">Email : </label>
                                            <input value="{{$msg->email}}" id="email" type="text" name="email"
                                                class="form-control" placeholder="email to ...">
                                            <div class="mt-2">
                                                <label for="text">Patient message : </label>
                                                {{$msg->message}}
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                                            <textarea placeholder="write response" class="form-control" name="response"
                                                cols="30" rows="10"></textarea>
                                        </div>
                                    </div>

                                    <input type="submit" value="Send" class="btn btn-primary"
                                        style="background-color : #4e73df ; ">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('admin.script')

</body>

</html>