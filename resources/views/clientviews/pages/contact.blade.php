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
                    <form class="px-4 py-2" id="contact-form" action="{{route('contactMail')}}">
                        @csrf
                        <div class="text-start pt-4">
                            <h3>Get In Touch</h3>
                        </div>
                        <div class="success-alert d-none">
                            <div class="alert alert-success" role="alert">
                                Your message has been sent successfully.
                            </div>
                        </div>
                        <div class="error-alert d-none">
                            <div class="alert alert-danger" role="alert">
                                An error occurred while sending your message.
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="name" class="form-control" name="name" id="floatingInput" required placeholder="John Doe" />
                            <label for="floatingInput">Name</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" name="email" id="floatingInput" required placeholder="name@example.com" />
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="subject" id="floatingInput" required placeholder="Lorem Ipsum" />
                            <label for="floatingInput">Subject</label>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" name="message" placeholder="Message..." id="exampleFormControlTextarea1" required rows="5"></textarea>
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

<script>
    $(document).ready(function() {
        $('#contact-form').submit(function(e) {
            e.preventDefault();
            $('#contact-form button').attr('disabled', true);
            var form = $(this);
            var url = form.attr('action');
            $.ajax({
                type: "POST",
                url: url,
                data: form.serialize(),
                success: function(data) {
                    console.log(data);
                    if (data.status == 'success') {
                        $('.success-alert').removeClass('d-none');
                        $('#contact-form button').attr('disabled', false);
                        form[0].reset();
                    } else {
                        $('.error-alert').removeClass('d-none');
                        $('#contact-form button').attr('disabled', false);
                    }
                }
            });
        });
    });
</script>

@endpush