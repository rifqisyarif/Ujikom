<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Management Asrama</title>
    <!-- Outer Row -->
    <link rel="icon" href="{{ asset('img/page_icon.png') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Custom fonts for this template-->
    <link href="{{ asset('fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    {{-- Bootstrap --}}

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

    <!-- SweetAlerts -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.19/dist/sweetalert2.all.min.js"></script>

    <!-- JQuery -->
    <script src="{{ asset('jquery/jquery.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.js"></script>

    {{-- Google Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="">
        <div style="" class="mx-auto d-flex flex-column justify-content-center wrapper">

            <!-- Outer Row -->
            <div class="row justify-content-center">

                <div class="col-xl-10 col-lg-12 col-md-9">

                    <div class="card o-hidden border-0 shadow-lg my-3">
                        <div class="card-body py-3">
                            <!-- Nested Row within Card Body -->
                            <div class="px-4 py-5">
                                <div class="text-center">
                                    <h2 class="h4 text-gray-900 mb-2">Hello Musyrif</h2>
                                    <span>Welcome back , Pray before login!</span>
                                </div>
                                <div class="text-center mb-2">
                                    <img style="height: 200px" class="img-fluid" src="{{ asset('img/baca-quran.png') }}"
                                        alt="">
                                </div>
                                <form id="login-form" method="POST" action="{{ url('/login') }}">
                                    @csrf
                                    <div class=" form-group">
                                        <label for="email" class="">
                                            E-Mail Address
                                        </label>
                                        <input id="emailInput" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="">
                                            Password
                                        </label>

                                        <input id="passwordInput" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="current-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100 ">
                                        Login
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- @endsection --}}
    <script>
        $(document).ready(function () {
            $('#login-form').on('submit', function (e) {
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "/login",
                    data: $(this).serialize(),
                    success: function (response) {
                        console.log('test');
                        console.log(response.success);

                        if (response.success === true) { // Check if response.success is a boolean
                            Swal.fire({
                                icon: 'success',
                                title: 'Login Berhasil',
                                text: 'Selamat Datang',
                                showConfirmButton: false,
                                timer: 1500
                            })
                            .then(() => {
                                // Redirect to the dashboard or any other desired page
                                window.location.href = '/asrama'; // Replace with your desired URL
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Login Gagal',
                                text: 'Email atau Password Salah',
                                showConfirmButton: false,
                                timer: 1500
                            });
                        }
                    },
                    error: function (error) {
                        console.log(error);
                        Swal.fire({
                            icon: 'error',
                            title: 'Login Gagal',
                            text: 'Email atau Password Salah',
                            showConfirmButton: false,
                            timer: 1500
                        });
                    }

                });
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>


    <!-- Bootstrap core JavaScript-->

    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    {{-- <script src="{{ asset('chart.js/Chart.min.js') }}"></script> --}}

    <!-- Page level custom scripts -->
    {{-- <script src="{{ asset('js/demo/chart-area-demo.js') }}"></script> --}}
    {{-- <script src="{{ asset('js/demo/chart-pie-demo.js') }}"></script> --}}

</body>