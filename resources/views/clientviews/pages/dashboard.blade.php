@extends('clientviews.layouts.panel')
@push('styles')

@endpush
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Dashboard</h4>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xxl-5">
        <div class="d-flex flex-column h-100">
            @if(Auth::guard('web')->user()->email_verified_at == null)
            <div class="row h-100">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="alert alert-warning border-0 rounded-0 m-0 d-flex align-items-center" role="alert">
                                <i data-feather="alert-triangle" class="text-warning me-2 icon-sm"></i>
                                <div class="flex-grow-1 text-truncate">
                                    <span class="fw-semibold">Welcome! To unlock the full potential of this platform, please verify your email address. We've sent a verification link to your inbox.</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="p-3">
                                        <p class="fs-16">Open your inbox to find the email verification link or <b><a href="{{route('user.dashboard')}}" id="verificationLink" onclick="event.preventDefault(); submitVerificationForm();" class="text-warning" style="cursor: pointer;">Click Here</a></b> to generate a new verification link.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<script src="{{asset('clientSideAssets/jquery/jquery-3.7.1.min.js')}}"></script>
<script>
    var counter = 0;

    function submitVerificationForm() {
        $.ajax({
            url: "{{route('user.resendVerificationMail')}}",
            type: "GET",
            data: {
                "_token": "{{ csrf_token() }}"
            },
            success: function(response) {
                console.log(response);
                if (response.success) {
                    counter++;
                    console.log(response.success);
                    Toastify({
                        text: response.success,
                        duration: 3000,
                        close: true,
                        gravity: "top",
                        position: 'right',
                        backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)",
                    }).showToast();
                    if (counter == 3) {
                        document.getElementById('verificationLink').style.pointerEvents = 'none';
                        document.getElementById('verificationLink').style.color = 'grey';
                    }

                } else {
                    console.log(response.error);
                    Toastify({
                        text: response.error,
                        duration: 3000,
                        close: true,
                        gravity: "top",
                        position: 'right',
                        backgroundColor: "linear-gradient(to right, #df1b1b, #FFA500)",
                    }).showToast();
                }
            }
        });
    }
</script>
@endpush