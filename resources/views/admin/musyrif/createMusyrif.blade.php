@extends('components.template')

@section('content')
<div id="wrapper">
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Begin Page Content -->
            <div class="container-fluid">
                <a href="{{ url()->previous() }}" class="btn btn-primary mb-2"><i
                        class="fas fa-arrow-left fa-sm text-white-50 ml-1"></i> Back</a>

                <!-- Kamar Card -->



                {{-- Form --}}
                <form class="d-flex flex-column gap-3" action="{{ route('createMusyrif') }}" method="POST">
                    @csrf
                    <div class="card mt-4 col-xl-4 " style="width: 18rem;">
                        <div class="card-body pl-2">
                            <div class="detail1 d-flex align-items-center">
                                <img class="mr-3" src="{{ asset('img/santri.svg') }}" alt="">
                                <div class="text-detail">
                                    <h6 class="card-title mb-0">M Rifqi Syarifuddin</h6>
                                    <p class="card-text">Kamar 2.1</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 mb-3">
                            <label for="formGroupExampleInput" class="form-label">Nama</label>
                            <input name="nama" type="text" class="form-control " id="nama" placeholder="Nama Santri">
                        </div>
                        <div class="col-xl-6 mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Tanggal Lahir</label>
                            <input name="tanggal_lahir" type="date" class="form-control" id="tanggal_lahir">
                        </div>
                        <div class=" col-xl-6 mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Tempat Tinggal</label>
                            <input name="tempat_tinggal" type="text" class="form-control" id="tempat_tinggal"
                                placeholder="Tempat Tinggal">
                        </div>
                        <div class="col-xl-6 mb-3">
                            <label for="formGroupExampleInput2" class="form-label">No Telp</label>
                            <input name="no_telp" type="text" class="form-control" id="no_telp" placeholder="No Telp">
                        </div>
                        <div class="col-xl-6 mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Email</label>
                            <input id="email" name="email" name="name" type="text" class="form-control"
                                placeholder="Email">
                        </div>
                        <div class="col-xl-6 mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Password</label>
                            <input id="password" name="password" type="password" class="form-control"
                                placeholder="Password">
                        </div>

                    </div>
                    <button class="col-xl-3 col-md-6 mb-3 btn btn-primary" type="submit">Tambahkan</button>
                </form>

            </div>
            <!-- /.container-fluid -->
        </div>
    </div>

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
@endsection