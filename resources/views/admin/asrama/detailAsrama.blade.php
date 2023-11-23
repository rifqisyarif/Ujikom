@extends('components.template')

@section('content')

<div class="container-fluid">
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Begin Page Content -->
            <div class="container-fluid">
                <a href="{{ route('asrama.index') }}" class="btn btn-primary mb-2 mb-3"><i
                        class="fas fa-arrow-left fa-sm text-white-50 ml-1"></i> Back</a>


                <!-- Kamar Card -->
                <div class="col-xl-4 mb-4 nopadding card-wrapper">
                    <a style="text-decoration: none; color:black">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body p-3">
                                <div class="d-flex no-gutters align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div class="mr-4">
                                            <img src="{{ asset('img/kasur.svg') }}" alt="">
                                        </div>
                                        <div class="">
                                            <p class="font-weight-bold text-black mb-1">
                                                Asrama {{ $asrama->asrama }}</p>
                                            <p style="font-size: .8rem" class="">{{ $asrama->musyrif }}</p>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <p>
                                            Total Santri</p>
                                        <p class="fs-6"><b>{{ $santri->where('asrama', $asrama->asrama)->count()
                                                }}</b></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="d-flex gap-2">
                    <!-- Topbar Search -->
                    <form action="{{ route('asrama.show', $asrama->asrama) }}" onsubmit="event.preventDefault()"
                        class="d-none d-sm-inline-block form-inline navbar-search w-50">
                        <div class="input-group">
                            <input type="text" name="search" id='search' class="form-control border-0 small"
                                placeholder="Search for..." />
                            <div class="input-group-append">
                                <button class="btn btn-primary">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    {{-- Form --}}
                    <div id="form-wrapper">
                        <div class="d-flex flex-column">
                            <div class="d-flex justify-content-between align-items-center ">
                                <a class="btn btn-primary">Santri Baru <i
                                        class="fas fa-plus fa-sm text-white-50 ml-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>


                {{-- List Santri --}}
                <div id="listSantri" class="row nopadding">
                    @foreach ($santri as $item)
                    @if ($item->asrama == $asrama->asrama)
                    <div class="mb-4 col-xl-4 nopadding card-wrapper ">
                        <div class="card mt-4  p-0" style="width: 18rem;">
                            <div class="card-body">
                                <div class="detail1 d-flex align-items-center">
                                    <img class="mr-3" src="{{ asset('img/santri.svg') }}" alt="">
                                    <div class="text-detail">
                                        <h6 class="card-title mb-0">{{ $item->nama }}</h6>
                                        <p class="card-text">{{ $item->asrama }}</p>
                                    </div>
                                </div>
                                <hr style="border-top: 2px solid rgba(0, 0, 0, .5);" class="sidebar-divider">
                                <div class="detail2 d-flex justify-content-between">
                                    <div>
                                        <h6 style="font-size: .9rem" class="card-title mb-0 d-flex ">Hari piket: <p
                                                class="ml-2">{{ $item->hari_piket }}</p>
                                        </h6>
                                        <h6 style="font-size: .9rem" class="card-title mb-0 d-flex ">Kelas: <p
                                                class="ml-2">
                                                12 RPL Karir</p>
                                        </h6>
                                    </div>
                                    <div class="div">
                                        <a style="font-size: .8rem" href="#" class="btn btn-primary btn-sm">Sudah
                                            Datang</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        fetch_santri_data();

        function fetch_santri_data(query = '')
        {
         $.ajax({
            //send request with slug as parameter
            url:"{{ route('searchSantri', ['noAsrama' => "$asrama->asrama"]) }}",
          method:'GET',
          data:{query:query},
          dataType:'json',
          success:function(data)
          {
            console.log(data);
            $('#listSantri').html(data.list_data);
          }
         })  
        }
        $(document).on('keyup', '#search', function(){
            var query = $(this).val();
            fetch_santri_data(query);
        });

    })
</script>
@endsection