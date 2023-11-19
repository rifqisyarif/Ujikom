@extends('components.template')

@section('content')

<div id="wrapper">
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <div class="text-wrapper">
                        <h1 class="h4 mb-0 text-gray-800">Cuti</h1>
                        <p class="text-muted mb-0 mt-1">List Cuti IDN</p>
                    </div>
                    <a href="/createCuti" class="btn btn-primary">New Cuti <i
                            class="fas fa-plus fa-sm text-white-50 ml-1"></i></a>

                </div>

                <!-- Content Row -->
                <nav aria-label="...">
                    <ul class="pagination">
                        <li class="page-item active"><a class="page-link px-3" href="#">All</a></li>
                        <li class="page-item" aria-current="page">
                            <a class="page-link px-3" href="#">Pending</a>
                        </li>
                        <li class="page-item"><a class="page-link px-3" href="#">Approve</a></li>
                        <li class="page-item">
                            <a class="page-link px-3" href="#">Decline</a>
                        </li>
                    </ul>
                </nav>
                <div class="row">

                    <!-- Kamar Card -->
                    <div class="col-xl-4 col-md-6 mb-4 card-wrapper">
                        <a style="text-decoration: none; color:black">
                            <div class="card border-secondary shadow h-100 py-2">
                                <div class="card-body p-3">
                                    <div class="d-flex no-gutters align-items-center justify-content-between">
                                        <div class="">
                                            <div class="">
                                                <p>Setengah Hari</p>
                                                <p class="font-weight-bold text-black mb-1">
                                                    Kamis 18 Des, 2023</p>
                                                <p class="fs-6">Ust. Abdullah Azka</p>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="button" class="btn btn-success">Approve</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>


            </div>
            <!-- End of Content Wrapper -->

        </div>
    </div>

    <script>
        if ( $(".sidebar.toggled").css("overflow") === "hidden") {
        $("#content").parent().css("margin-left") === "0px"
    }
    else {
        $("#content").parent().css("margin-left") === "225px"
    }
    </script>
    @endsection