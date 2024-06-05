@extends('clientviews.layouts.app')
@push('styles')
@endpush
@section('content')
<div class="container signin">
    <div class="col-lg-4 col-12 mx-auto">
        <div class="py-lg-1 py-1">
            <div class="card p-3 my-lg-5 my-3 border-0">

                <form method="post" action="{{route('user.register')}}">
                    @csrf
                    <div class="logo-signin text-center">
                        <img src="{{asset('/clientSideAssets/images/logo.png')}}" alt="">
                    </div>
                    <div class="text-center">
                        <h3>Register</h3>
                    </div>

                    @if(session()->has('errors'))
                    <div class="single-input-item">
                        <div class="alert alert-danger fade show" role="alert">
                            @foreach ($errors->all() as $error)
                            {{ $error }} <br>
                            @endforeach
                        </div>
                    </div>
                    @endif
                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{session('success')}}
                    </div>
                    @endif
                    <div class="form-floating mb-3">
                        <input type="name" name="name" required class="form-control" id="floatingInput" placeholder="John Doe" />
                        <label for="floatingInput">Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" name="email" required class="form-control" id="floatingInput" placeholder="name@example.com" />
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" name="password" required id="floatingPassword" placeholder="Password" />
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" name="password_confirmation" required id="floatingPassword" placeholder="Password" />
                        <label for="floatingPassword">Confirm Password</label>
                    </div>
                    <button type="submit" class="btn btn-primary w-100" style="background-color:#9C8A4A !important; border:1px solid #9C8A4A; color: white;">Register</button>

                    <div class="text-center py-3">
                        <small class="text-muted">Already have an account?
                            <a href="{{route('user.login')}}" class="text-muted">Login Now</a></small>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection
@push('scripts')
@endpush