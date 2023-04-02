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
                <form class="d-flex flex-column gap-3" action="{{ route('dashboard') }}">
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
                            <input type="text" class="form-control " id="formGroupExampleInput"
                                placeholder="Nama Santri">
                        </div>
                        <div class="col-xl-6 mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="formGroupExampleInput2">
                        </div>
                        <div class=" col-xl-6 mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Tempat Tinggal</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2"
                                placeholder="Tempat Tinggal">
                        </div>
                        <div class="col-xl-6 mb-3">
                            <label for="formGroupExampleInput2" class="form-label">No Telp</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="No Telp">
                        </div>
                        <div class="col-xl-6 mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Email</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Email">
                        </div>

                    </div>
                    <div class="button-wrapper row">
                        <div class="col-xl-12 col-md-6 mb-3">
                            <button class="col-xl-3 col-md-6 mb-3 mb-3 btn btn-primary" type="submit">Edit
                                Profile</button>
                            <button class="col-xl-3 col-md-6 mb-3 mb-3 btn btn-danger" type="submit">Delete</button>
                        </div>
                    </div>
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