
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
                   @include('admin.body')        
            </div>
        </div>
    </div>

    @include('admin.script')

</body>

</html>