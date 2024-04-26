@extends('clientviews.layouts.app')
@push('styles')
@endpush
@section('content')
<div class="container signin">
    <div class="section-heading text-center py-3">
        <h1>Contact Us</h1>
    </div>
    <div class="card my-lg-5 my-3 border-0" style="border-radius: 30px; overflow: hidden">
        <div class="row">
            <div class="col-lg-6 col-12 d-none d-lg-block">
                <div style="width: 100%; height: 550px">
                    <img src="{{asset('/clientSideAssets/images/contact.png')}}" class="d-block" width="100%" style="object-fit: cover ;height: 100%;" alt="" />
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div>
                    <form class="px-4 py-2">
                        <div class="text-start pt-4">
                            <h3>Get In Touch</h3>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-floating mb-3">
                                    <input type="name" class="form-control" id="floatingInput" placeholder="John Doe" />
                                    <label for="floatingInput">First Name</label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-floating mb-3">
                                    <input type="name" class="form-control" id="floatingInput" placeholder="John Doe" />
                                    <label for="floatingInput">Last Name</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" />
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="John Doe" />
                            <label for="floatingInput">Subject</label>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" placeholder="Message..." id="exampleFormControlTextarea1" rows="5"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
@endpush