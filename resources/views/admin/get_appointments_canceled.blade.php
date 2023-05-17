<!DOCTYPE html>
<html lang="en">

<head>

    @include('admin.css')
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <style>
        tr,
        td {
            margin: 5px;
            padding: -10px;
            font-size: 10px;
        }
    </style>
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
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">patient ID</th>
                                <th scope="col">name</th>
                                <th scope="col">email</th>
                                <th scope="col">phone</th>
                                <th scope="col">Doctor name</th>
                                <th scope="col">date</th>
                                <th scope="col">message</th>
                                <th scope="col">status</th>
                                <th scope="col">actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($appointments as $appointment)
                            <tr>
                                <td>{{$appointment->user_id}}</td>
                                <td>{{$appointment->name}}</td>
                                <td>{{$appointment->email}}</td>
                                <td>{{$appointment->phone}}</td>
                                <th scope="row">
                                    {{$appointment->doctor}}
                                </th>
                                <td>{{$appointment->date}}</td>
                                <td>{{$appointment->message}}</td>
                                <td>{{$appointment->status}}</td>
                                <td class="text-center">
                                    <a class="btn btn-success m-1 p-2"
                                        href="{{url('accepet_appointment' , $appointment->id )}}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-check-square" viewBox="0 0 16 16">
                                            <path
                                                d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                            <path
                                                d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.235.235 0 0 1 .02-.022z" />
                                        </svg>
                                    </a>
                                    <a class="btn btn-danger m-1 p-2"
                                        href="{{url('cancel_appointment' , $appointment->id )}}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-x-square" viewBox="0 0 16 16">
                                            <path
                                                d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                            <path
                                                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
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

    @include('admin.script')

</body>

</html>