@extends('components.template')

@section('content')
<div id="wrapper">
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Begin Page Content -->
            <div class="container-fluid">
                <a href="{{ url()->previous() }}" class="btn btn-primary mb-4"><i
                        class="fas fa-arrow-left fa-sm text-white-50 ml-1"></i> Back</a>

                <div class="row">

                    <!-- Kamar Card -->
                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body p-3">
                                <div class="d-flex no-gutters align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div class="mr-4">
                                            <img src="{{ asset('img/kasur.svg') }}" alt="">
                                        </div>
                                        <div class="">
                                            <p class="font-weight-bold text-primary mb-1">
                                                Kamar 2.1</p>
                                            <p class="fs-6">Ust. Abdullah Azka</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                {{-- Form --}}
                <div id="form-wrapper" class="row">
                    <form class="d-flex flex-column gap-3" action="{{ url('/createAsrama') }}" method="POST">
                        @csrf
                        <div>
                            <label><b>Kamar</b></label>
                            <select name="asrama" class="form-select col-xl-4 col-md-7">
                                <option selected><i class="fa-arrow-down"></i> Filter</option>
                                <option>2.1</option>
                                <option>2.2</option>
                                <option>2.3</option>
                                <option>2.4</option>
                                <option>2.5</option>
                                <option>2.6</option>
                            </select>
                        </div>

                        <div>
                            <label><b>Musrif</b></label>
                            <select name="musyrif" class="form-select col-xl-4 col-md-7">
                                <option selected>Abdullah Azka</option>
                                <option selected>Abdullah Azka</option>
                                <option selected>Abdullah Azka</option>
                                <option selected>Abdullah Azka</option>
                            </select>
                        </div>
                        <button class="btn btn-primary w-25" type="submit">Create</button>
                    </form>
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
</div>

</div>
@endsection