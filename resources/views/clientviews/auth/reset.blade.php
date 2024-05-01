@extends('clientviews.layouts.app')
@push('styles')
@endpush
@section('content')
<div class="container signin">
    <div class="col-lg-4 col-12 mx-auto">
        <div class="py-lg-1 py-1">
            <div class="card p-3 my-lg-5 my-3 border-0">

                <form method="post" action="{{route('user.resetPassword')}}">
                    @csrf
                    <div class="logo-signin text-center">
                        <img src="{{asset('/clientSideAssets/images/logo.png')}}" alt="">
                    </div>
                    <div class="text-center">
                        <h3>Reset Password</h3>
                        <p class="text-muted">Enter a secure password for your account</p>
                    </div>

                    @if(session('error'))
                    <div class="single-input-item">
                        <div class="alert alert-danger fade show" role="alert">
                            {{ session('error') }}
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
                    <input type="text" name="token" value="{{$token}}" hidden>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" name="password" required id="floatingPassword" placeholder="Password" />
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" name="password_confirmation" required id="floatingPassword" placeholder="Password" />
                        <label for="floatingPassword">Confirm Password</label>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Reset Password</button>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection
@push('scripts')
@endpush