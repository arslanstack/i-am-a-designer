@extends('clientviews.layouts.app')
@push('styles')
@endpush
@section('content')
<div class="container signin">
    <div class="col-lg-4 col-12 mx-auto">
        <div class="py-lg-5 py-2">
            <div class="card p-3 my-lg-5 my-3 border-0">
                <form>

                    <div class="logo-signin text-center">
                        <img src="{{asset('/clientSideAssets/images/logo.png')}}" alt="">
                    </div>
                    <div class="text-center">
                        <h3>Login</h3>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" />
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" />
                        <label for="floatingPassword">Password</label>
                    </div>

                    <div class="d-flex justify-content-between pb-3">
                        <div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" />
                                <label class="form-check-label" for="exampleCheck1">Remember me</label>
                            </div>
                        </div>
                        <div>
                            <a href="" class="text-decoration-none">Forgot Password?</a>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">LOGIN</button>

                    <div class="text-center py-3">
                        <small class="text-muted">Don't have an account?
                            <a href="{{route('register')}}" class="text-muted">Register Now</a></small>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection
@push('scripts')
@endpush