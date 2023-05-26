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

                            <input type="submit" value="Add" class="btn btn-primary m-1"
                                style="background-color : #4e73df ; ">
                        </form>
                    </div>
                    <hr/>
                    <div class="container mt-3">
                        <div class="row">
                            <div class="col-md-12">
                              <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">title</th>
                                <th scope="col">description</th>
                                <th scope="col">image</th>
                                <th scope="col">actions</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach($data as $value)
                            <tr>
                                <td>{{$value->title}}</td>
                                <td>{{$value->description}}</td>
                                <td><img width="100px" height="30px" src="newimage/{{$value->image}}" alt="new"/></td>
                                <td>
                                    <a class="btn btn-danger m-1 p-2" href="{{url('delete_new', $value->id)}}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                                          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                            </table>
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