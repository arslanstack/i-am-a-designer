@extends('clientviews.layouts.panel')
@push('styles')

@endpush
@section('content')
<div class="row">
    <div class="col">

        <div class="h-100">
            <div class="row mb-3 pb-1">
                <div class="col-12">
                    <div class="d-flex align-items-lg-center flex-lg-row">
                        <div class="me-2">
                            <h5 class="font-size-15">Welcome, {{Auth::user()->name}}!</h5>
                            <!-- Verification Message and resend verification etc -->
                            @if (!Auth::user()->email_verified_at)
                            <div class="d-flex align-items-center mt-2">
                                <div class="text-muted">Please verify your email address via link sent on yur registered email address. <a href="{{route('user.resendVerificationMail')}}" class="text-primary"> Click Here</a> to resend verification email.
                                </div>
                            </div>
                            @endif
                        </div>
                    </div><!-- end card header -->
                </div>
                <!--end col-->
            </div>
        </div> <!-- end row-->

    </div> <!-- end .h-100-->

</div> <!-- end col -->
@endsection
@push('scripts')
<script>

</script>
@endpush