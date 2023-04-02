@extends('components.template')

@section('content')

<div id="wrapper">
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Begin Page Content -->
            <div class="container-fluid">
                <a href="{{ url('dashboard') }}" class="btn btn-primary mb-2 mb-3"><i
                        class="fas fa-arrow-left fa-sm text-white-50 ml-1"></i> Back</a>

                <div class="row">

                    <!-- Kamar Card -->
                    <div class="col-xl-4 col-md-6 mb-4 card-wrapper">
                        <a style="text-decoration: none; color:black" href="{{ route('detailAsrama')}}">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body p-3">
                                    <div class="d-flex no-gutters align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="mr-4">
                                                <img src="{{ asset('img/kasur.svg') }}" alt="">
                                            </div>
                                            <div class="">
                                                <p class="font-weight-bold text-black mb-1">
                                                    Kamar 2.1</p>
                                                <p style="font-size: .8rem" class="">Ust. Abdullah Azka</p>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <p>
                                                Total Santri</p>
                                            <p class="fs-6"><b>18</b></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
                {{-- Form --}}
                <div id="form-wrapper" class="row">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex align-items-center col-xl-5 col-md-7 pl-0">
                            <label style="width: 100px" class="mb-0"><b>Hari Piket:</b></label>
                            <select class="form-control ">
                                <option selected>Senin</option>
                                <option>Selasa</option>
                                <option>Rabu</option>
                                <option>Kamis</option>
                                <option>Jumat</option>
                                <option>Sabtu</option>
                            </select>
                        </div>
                        <a href="/createSantri" class="btn btn-primary">Santri Baru <i
                                class="fas fa-plus fa-sm text-white-50 ml-1"></i></a>
                    </div>
                </div>

                <!-- Topbar Search -->
                <div class="row">
                    <form class="d-none d-sm-inline-block form-inline navbar-search w-50 mt-3">
                        <div class="input-group">
                            <input type="text" class="form-control border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                {{-- List Santri --}}
                <div class="row mb-4 card-wrapper col-xl-4">
                    <div class="card mt-4  p-0" style="width: 18rem;">
                        <div class="card-body">
                            <div class="detail1 d-flex align-items-center">
                                <img class="mr-3" src="{{ asset('img/santri.svg') }}" alt="">
                                <div class="text-detail">
                                    <h6 class="card-title mb-0">M Rifqi Syarifuddin</h6>
                                    <p class="card-text">Kamar 2.1</p>
                                </div>
                            </div>
                            <hr style="border-top: 2px solid rgba(0, 0, 0, .5);" class="sidebar-divider">
                            <div class="detail2 d-flex justify-content-between">
                                <div>
                                    <h6 style="font-size: .9rem" class="card-title mb-0 d-flex ">Hari piket: <p
                                            class="ml-2">Senin</p>
                                    </h6>
                                    <h6 style="font-size: .9rem" class="card-title mb-0 d-flex ">Kelas: <p class="ml-2">
                                            12 RPL Karir</p>
                                    </h6>
                                </div>
                                <div class="div">
                                    <a style="font-size: .8rem" href="#" class="btn btn-primary btn-sm">Sudah Datang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Your Website 2021</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

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