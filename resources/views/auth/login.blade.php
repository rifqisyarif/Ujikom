@extends('components.template')

@section('content')
<div class="">
    <div style="" class="w-50 mx-auto d-flex flex-column justify-content-center">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9 mt-3">

                <div class="card o-hidden border-0 shadow-lg my-3">
                    <div class="card-body py-3">
                        <!-- Nested Row within Card Body -->
                        <div class="">
                            <div class="">
                                <div class="px-4 py-5">
                                    <div class="text-center">
                                        <h2 class="h4 text-gray-900 mb-4">Hello Musyrif</h2>
                                        <span>Welcome back , Pray before login!</span>
                                    </div>
                                    <div class="text-center">
                                        <img style="height: 200px" class="img-fluid"
                                            src="{{ asset('img/baca-quran.png') }}" alt="">
                                    </div>
                                    <form id="form" method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label for="email" class="col-md-4 col-form-label">{{
                                                __('E-Mail Address')
                                                }}</label>
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="password" class="col-md-4 col-form-label">{{
                                                __('Password')
                                                }}</label>

                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="current-password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <button type="submit" class="btn btn-primary w-100 show_confirm">
                                            {{ __('Login') }}
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    {{-- --}}
    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address')
                                }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password')
                                }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{
                                        old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
</div>
<script>
    $("#form").validate({
    submitHandler: function(form) {
        // this function will be called when the form is submitted and passes validation
        // you can use it to submit the form via AJAX and display a success message to the user

        // serialize the form data
        var formData = $(form).serialize();
        
        // submit the form via AJAX
        $.ajax({
        url: "/submit-form",
        type: "POST",
        data: formData,
        success: function(response) {
            // handle the server response here
            if (response.success) {
                        Swal.fire({
                            title: "Form submitted!",
                            text: response.message,
                            icon: "success",
                            confirmButtonText: "OK"
                        }).then(function() {
                            form.submit(); // reset the form
                        });
                    } else {
                        Swal.fire({
                            title: "Error!",
                            text: response.message,
                            icon: "error",
                            confirmButtonText: "OK"
                        });
                        console.log(response)
                    }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            // handle the AJAX error here
            Swal.fire({
            title: "Error!",
            text: "Invalid Email or password !",
            icon: "error",
            confirmButtonText: "OK"
            });
            console.log(textStatus)
        }
        });
    }
});
    
</script>
@endsection