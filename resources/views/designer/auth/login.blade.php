@extends('clientviews.layouts.app')
@push('styles')
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

    .containeerr {
        font-family: 'Poppins', sans-serif;
        margin: 50px auto;
    }

    /* .body {
        position: relative;
        width: 720px;
        height: 440px;
        margin: 20px auto;
        border: 1px solid #dddd;
        border-radius: 18px;
        overflow: hidden;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    } */

    .box-1 img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .box-2 {
        padding: 10px;
    }

    .box-1,
    .box-2 {
        width: 50%;
    }

    .h-1 {
        font-size: 24px;
        font-weight: 700;
    }

    .containeerr .box {
        width: 100px;
        height: 100px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        border: 2px solid transparent;
        text-decoration: none;
        color: #615f5fdd;
    }

    .box:active,
    .box:visited {
        border: 2px solid #ee82ee;
    }

    .box:hover {
        border: 2px solid #ee82ee;
    }



    @media (max-width:767px) {
        body {
            padding: 10px;
        }

        .body {
            width: 100%;
            height: 100%;
        }

        .box-1 {
            margin-top: 0;
            order: 2;
            width: 100%;
        }

        .box-2 {
            order: 1;
            width: 100%;
            min-height: 440px;
            text-align: center;
        }
    }
</style>
@endpush
@section('content')

<div class="containeerr">
    <div class="col-lg-7 mx-auto card border-0" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;border-radius:30px;overflow:hidden">
        <div class=" d-md-flex align-items-center justify-content-between">
            <div class="box-1 mt-md-0 d-lg-block d-none">
                <img src="{{asset('designer_assets/images/login-banner.jpg')}}" class="" alt="">
            </div>
            <div class=" box-2 d-flex flex-column">
                <div class="mt-3 mx-3">
                    <p class="mb-1 h-1 text-center">Login</p>
                    <p class="text-muted mb-4 text-center">Share your designs with the world.</p>
                    @if(session()->has('errors'))
                    <div class="single-input-item">
                        <div class="alert alert-danger fade show" role="alert">
                            @foreach ($errors->all() as $error)
                            {{ $error }} <br>
                            @endforeach
                        </div>
                    </div>
                    @endif

                    @if(session()->has('success'))
                    <div class="single-input-item">
                        <div class="alert alert-success fade show" role="alert">
                            {{ session()->get('success') }}
                        </div>
                    </div>
                    @endif
                    <div class="d-flex flex-column ">
                        <form method="post" action="{{route('designer.login')}}">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="email" name="email" required class="form-control" id="floatingInput" placeholder="name@example.com" />
                                <label for="floatingInput">Email address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" name="password" required class="form-control" id="floatingPassword" placeholder="Password" />
                                <label for="floatingPassword">Password</label>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Login</button>
                            <div class="d-flex justify-content-center py-2">
                                <div>
                                    <a href="{{route('designer.reset')}}" class="text-decoration-none">Forgot Password?</a>
                                </div>
                            </div>
                            <div class="text-center py-3">
                                <small class="text-muted">Don't have an account?
                                    <a href="{{route('designer.register')}}" class="text-muted">Register Now</a></small>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <span class="fas fa-times"></span>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="hhttps://use.fontawesome.com/releases/v5.7.2/css/all.css"></script>
<!-- <script>
    var error = "{{ $errors->first() }}";
    var success = "{{ session('success') }}";
    document.addEventListener('DOMContentLoaded', function() {
        if (error) {
            Toastify({
                text: error,
                duration: 3000,
                newWindow: true,
                close: true,
                gravity: "top", // `top` or `bottom`
                position: "right", // `left`, `center` or `right`
                stopOnFocus: true, // Prevents dismissing of toast on hover
                style: {
                    background: "linear-gradient(to right, #df1b1b, #FFA500)",
                },
                onClick: function() {} // Callback after click
            }).showToast()
        }

        if (success) {
            Toastify({
                text: success,
                duration: 3000,
                newWindow: true,
                close: true,
                gravity: "top", // `top` or `bottom`
                position: "right", // `left`, `center` or `right`
                stopOnFocus: true, // Prevents dismissing of toast on hover
                style: {
                    background: "linear-gradient(to right, #df1b1b, #FFA500)",
                },
                onClick: function() {} // Callback after click
            }).showToast()
        }
    });
</script> -->
@endpush