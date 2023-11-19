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

<<<<<<< Updated upstream


                {{-- Form --}}
                <form class="d-flex flex-column gap-3" action="{{ route('dashboard') }}">
=======
                {{-- Form --}}
                <form class="d-flex flex-column gap-3" action="{{ url("detailMusyrif/$musyrif->id") }}" method="POST">
                    @csrf @method('PATCH')
>>>>>>> Stashed changes
                    <div class="card mt-4 col-xl-4 " style="width: 18rem;">
                        <div class="card-body pl-2">
                            <div class="detail1 d-flex align-items-center">
                                <img class="mr-3" src="{{ asset('img/santri.svg') }}" alt="">
                                <div class="text-detail">
<<<<<<< Updated upstream
                                    <h6 class="card-title mb-0">M Rifqi Syarifuddin</h6>
                                    <p class="card-text">Kamar 2.1</p>
=======
                                    <h6 class="card-title mb-0">Ust {{ $musyrif->name }}</h6>
                                    <p class="card-text">{{ $musyrif->email }}</p>
>>>>>>> Stashed changes
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 mb-3">
                            <label for="formGroupExampleInput" class="form-label">Nama</label>
<<<<<<< Updated upstream
                            <input type="text" class="form-control " id="formGroupExampleInput"
=======
                            <input name="name" type="text" class="form-control"
                                value="{{ old('nama', $musyrif->name) }}" id="formGroupExampleInput"
>>>>>>> Stashed changes
                                placeholder="Nama Santri">
                        </div>
                        <div class="col-xl-6 mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Tanggal Lahir</label>
<<<<<<< Updated upstream
                            <input type="date" class="form-control" id="formGroupExampleInput2">
                        </div>
                        <div class=" col-xl-6 mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Tempat Tinggal</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2"
=======
                            <input name="tanggal_lahir" type="date" class="form-control"
                                value="{{ old('tanggal_lahir', $musyrif->tanggal_lahir) }}" id="formGroupExampleInput2">
                        </div>
                        <div class=" col-xl-6 mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Tempat Tinggal</label>
                            <input name="tempat_tinggal" type="text" class="form-control" id="formGroupExampleInput2"
                                value="{{ old('tempat_tinggal', $musyrif->tempat_tinggal) }}"
>>>>>>> Stashed changes
                                placeholder="Tempat Tinggal">
                        </div>
                        <div class="col-xl-6 mb-3">
                            <label for="formGroupExampleInput2" class="form-label">No Telp</label>
<<<<<<< Updated upstream
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
=======
                            <input name="no_telp" type="text" class="form-control" id="formGroupExampleInput2"
                                value="{{ old('no_telp', $musyrif->no_telp) }}" placeholder="No Telp">
                        </div>
                        <div class="col-xl-6 mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Email</label>
                            <input name="email" type="text" class="form-control" id="formGroupExampleInput2"
                                value="{{ old('email', $musyrif->email) }}" placeholder="Email">
                        </div>

                    </div>
                    @if (Auth::user()->email == 'admin@admin.com')
                    <button class="col-xl-3 col-md-6 mb-3 mb-3 btn btn-primary" type="submit">Update</button>
                    @endif
                </form>
                <form class="d-flex flex-column gap-3" action="{{ url("/detailMusyrif/$musyrif->id") }}"
                    method="POST">
                    @csrf @method('DELETE')
                    @if (Auth::user()->email == 'admin@admin.com')
                    <button class="col-xl-3 col-md-6 mb-3 mb-3 btn btn-danger" type="submit">Delete</button>
                    @endif
>>>>>>> Stashed changes
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