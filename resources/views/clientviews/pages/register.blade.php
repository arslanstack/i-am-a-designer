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
                        <img src="{{asset('/clientSideAssets/images/logo.png')}}" alt="" />
                    </div>
                    <div class="text-center">
                        <h3>Sign Up</h3>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="name" class="form-control" id="floatingInput" placeholder="Your Name" />
                        <label for="floatingInput">Your Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" />
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" />
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" />
                        <label for="floatingPassword">Confirm Password</label>
                    </div>


                    <button type="submit" class="btn btn-primary w-100">SIGN UP</button>

                    <div class="text-center py-3">
                        <small class="text-muted">Already have an account?
                            <a href="{{route('login')}}" class="text-muted">Login</a></small>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
@endpush