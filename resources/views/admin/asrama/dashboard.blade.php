@extends('components.template')

@section('content')

<div class="container-fluid">
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <div class="text-wrapper">
                        <h1 class="h4 mb-0 text-gray-800">Asrama Santri IDN</h1>
                        <p class="text-muted mb-0 mt-1">List Asrama Santri IDN</p>
                    </div>
                    <a href="asrama/tambahAsrama" class="btn btn-primary">Data Baru
                        <i class="fas fa-plus fa-sm text-white-50 ml-1"></i></a>

                </div>

                <!-- Content Row -->
                <div class="row">
                    <!-- Kamar Card -->
                    @foreach ($asrama as $item)
                    <div class="col-xl-4 col-md-6 mb-4 card-wrapper">
                        <a href="{{ route('asrama.show', $item->id) }}" style="text-decoration: none; color:black">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body p-3">
                                    <div class="d-flex no-gutters align-items-center justify-content-between">

                                        <div class="d-flex align-items-center">
                                            <div class="mr-4">
                                                <img src="{{ asset('img/kasur.svg') }}" alt="">
                                            </div>
                                            <div class="">
                                                <p class="font-weight-bold text-black mb-1">Asrama
                                                    {{ $item->asrama }}</p>
                                                <p style="font-size: .8rem" class="text-primary">{{ $item->musyrif }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <p>
                                                Total Santri</p>
                                            <p class="fs-6"><b>{{ $santri->where('asrama', $item->asrama)->count()
                                                    }}</b></p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

    @endsection