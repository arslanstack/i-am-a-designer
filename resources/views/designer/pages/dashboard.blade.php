@extends('designer.layouts.app')
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
            @if(Auth::guard('designer')->user()->email_verified_at == null)
            <div class="row h-100">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="alert alert-warning border-0 rounded-0 m-0 d-flex align-items-center" role="alert">
                                <i data-feather="alert-triangle" class="text-warning me-2 icon-sm"></i>
                                <div class="flex-grow-1 text-truncate">
                                    <span class="fw-semibold">Please verify your email to continue using services</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="p-3">
                                        <p class="fs-16">Resend verification link to get your email address verified. <b><a href="{{route('designer.dashboard')}}" id="verificationLink" onclick="event.preventDefault(); submitVerificationForm();" class="text-warning" style="cursor: pointer;">Click Here</a></b> to generate new verification link.</p>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end card-body-->
                    </div>
                </div> <!-- end col-->
            </div> <!-- end row-->
            @endif

            <div class="row">
                <div class="col-md-6">
                    <div class="card card-animate">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <p class="fw-medium text-muted mb-0">Likes</p>
                                    <h4 class="mt-4 fs-22 ff-secondary fw-semibold"><span class="counter-value" data-target="129">0</span></h4>
                                </div>
                                <div>
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title bg-info-subtle rounded-circle fs-2">
                                            <i data-feather="heart" class="text-info"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end card body -->
                    </div> <!-- end card-->
                </div> <!-- end col-->
                <div class="col-md-6">
                    <div class="card card-animate">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <p class="fw-medium text-muted mb-0">Views</p>
                                    <h4 class="mt-4 fs-22 ff-secondary fw-semibold"><span class="counter-value" data-target="76">0</span></h4>
                                </div>
                                <div>
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title bg-info-subtle rounded-circle fs-2">
                                            <i data-feather="activity" class="text-info"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end card body -->
                    </div> <!-- end card-->
                </div> <!-- end col-->
            </div>
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
            url: "{{route('designer.resendVerificationMail')}}",
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