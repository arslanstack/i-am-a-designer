@extends('clientviews.layouts.app')
@push('styles')
@endpush
@section('content')
<div class="container signin">
    <div class="col-lg-4 col-12 mx-auto">
        <div class="py-lg-1 py-1">
            <div class="card p-3 my-lg-5 my-3 border-0">

                <form method="post" action="{{route('user.resetMail')}}">
                    @csrf
                    <div class="logo-signin text-center">
                        <img src="{{asset('/clientSideAssets/images/logo.png')}}" alt="">
                    </div>
                    <div class="text-center">
                        <h3>Forgot Password?</h3>
                        <p class="text-muted">
                            Enter your email address to reset your password.
                        </p>
                    </div>

                    @if(session('error'))
                    <div class="single-input-item">
                        <div class="alert alert-danger fade show" role="alert">
                            {{ session('error') }}
                        </div>
                    </div>
                    @endif
                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{session('success')}}
                    </div>
                    @endif
                    <div class="form-floating mb-3">
                        <input type="email" name="email" required class="form-control" id="floatingInput" placeholder="name@example.com" />
                        <label for="floatingInput">Email address</label>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Send Reset Link</button>

                    <div class="text-center py-3">
                        <small class="text-muted">Login to your account?
                            <a href="{{route('user.login')}}" class="text-muted">Click Here</a></small>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection
@push('scripts')
@endpush