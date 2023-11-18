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
                <div class="d-sm-flex align-items-center justify-content-between">
                    <div class="text-wrapper">
                        <h1 class="h4 mb-0 text-gray-800">Musrif IDN</h1>
                        <p class="text-muted mb-0 mt-1">List Musyrif IDN</p>
                    </div>
                    <a href="/createMusyrif" class="btn btn-primary">Data Baru <i
                            class="fas fa-plus fa-sm text-white-50 ml-1"></i></a>

                </div>

                <!-- Content Row -->
                <div class="row">

                    <!-- Kamar Card -->
                    @foreach ($data as $item)
                    <div class="col-xl-4 col-md-6 card-wrapper">
                        <a style="text-decoration: none; color:black">
                            <div class="card shadow mt-4 p-0 mb-4" style="width: 18rem;">
                                <div class="card-body">
                                    <div class="detail1 d-flex align-items-center">
                                        <img class="mr-3" src="{{ asset('img/santri.svg') }}" alt="">
                                        <div class="text-detail">
                                            <h6 class="card-title mb-0">{{ $item->name }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>

                <!-- Content Row -->


                <!-- End of Main Content -->

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