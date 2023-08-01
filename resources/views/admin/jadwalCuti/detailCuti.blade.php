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

                <div class="d-sm-flex align-items-center justify-content-between mt-3">
                    <div class="text-wrapper">
                        <h1 class="h4 mb-0 text-gray-800">Request Cuti</h1>
                        <p class="text-muted mb-0 mt-1">List Cuti IDN</p>
                    </div>

                </div>

                {{-- Form --}}
<<<<<<< Updated upstream
                <form class="d-flex flex-column gap-3" action="{{ route('dashboard') }}">
=======
                <form class="d-flex flex-column gap-3 mb-3" action="{{ url("detailCuti/$cutiMusyrif->id") }}">
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
                                    <h6 class="card-title mb-0">{{ $cutiMusyrif->musyrif }}</h6>
                                    <p class="card-text">Dari: <b>{{ $cutiMusyrif->awal }}</b></p>
                                    <p class="card-text">Sampai: <b>{{ $cutiMusyrif->akhir }}</b></p>
>>>>>>> Stashed changes
                                </div>
                            </div>
                        </div>
                    </div>
<<<<<<< Updated upstream
                    <div class="row">
                        <div class="col-xl-6 mb-3">
                            <label for="formGroupExampleInput" class="form-label">Musyrif</label>
                            <select class="form-control">
                                <option selected><i class="fa-arrow-down"></i> Name</option>
                                <option>2.1</option>
                                <option>2.2</option>
                                <option>2.3</option>
                                <option>2.4</option>
                                <option>2.5</option>
                                <option>2.6</option>
                            </select>
                        </div>
                        <div class="col-xl-6 mb-3">
                            <label for="formGroupExampleInput2" class="form-label">From</label>
                            <input type="date" class="form-control" id="formGroupExampleInput2">
                        </div>
                        <div class=" col-xl-6 mb-3">
                            <label for="formGroupExampleInput2" class="form-label">To</label>
                            <input type="date" class="form-control" id="formGroupExampleInput2"
                                placeholder="Tempat Tinggal">
                        </div>
                        <div class="col-xl-6 mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Alasan</label>
                            <textarea type="text" class="form-control" rows="4" cols="50" id="formGroupExampleInput2"
                                placeholder="Alasan Santri"></textarea>
                        </div>

                    </div>
                    <div class="button-wrapper row">
                        <div class="col-xl-12 col-md-6 mb-3">
                            <button class="col-xl-3 col-md-6 mb-3 mb-3 btn btn-danger" type="submit">Decline</button>
                            <button class="col-xl-3 col-md-6 mb-3 mb-3 btn btn-primary" type="submit">Approve</button>
                        </div>
                    </div>
                </form>

=======
                </form>
                <div class="button-wrapper row gap-3">
                    @if ($cutiMusyrif->status == 'Approved' || $cutiMusyrif->status == 'Declined')
                    <form action="{{ url("detailCuti/$cutiMusyrif->id") }}" method='POST'>
                        @csrf @method('DELETE')
                        <button class="col-xl-3 col-md-6 mb-3 mb-3 btn btn-danger" type="submit">Delete</button>
                    </form>
                    @else
                    <form action="{{ url("/decline-data/$cutiMusyrif->id") }}" method="POST">
                        @csrf
                        <button class="col-xl-3 col-md-6 mb-3 mb-3 btn btn-danger" type="submit">Tolak</button>
                    </form>
                    <form action="{{ url("/approve-data/$cutiMusyrif->id") }}" method="POST">
                        @csrf
                        <button class="col-xl-3 col-md-6 mb-3 mb-3 btn btn-success" type="submit">Approve</button>
                    </form>
                    @endif
                </div>
>>>>>>> Stashed changes
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