@extends('clientviews.layouts.panel')
@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js" integrity="sha512-6sSYJqDreZRZGkJ3b+YfdhB3MzmuP9R7X1QZ6g5aIXhRvR1Y/N/P47jmnkENm7YL3oqsmI6AK+V6AD99uWDnIw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endpush
@section('content')
<div class="profile-section">
    <div class="row gutters mt-5">
        <div class="col-12">
            <img class="profile-cover" src="https://plus.unsplash.com/premium_photo-1664112065830-5819554d0ec2?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8Y292ZXIlMjBwaG90b3xlbnwwfHwwfHx8MA%3D%3D" alt="">
        </div>
        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
            <div class="card ">
                <div class="card-body">
                    <div class="account-settings">
                        <div class="user-profile">
                            <div class="user-avatar">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Maxwell Admin">

                                <button class="camera-button"> <i class="fa-solid fa-camera"></i></button>

                            </div>
                            <h5 class="user-name">John Doe</h5>
                            <h6 class="user-email">New York, United States</h6>
                        </div>

                    </div>
                </div>
            </div>
            <div class="card mt-5 ">
                <div class="card-body">
                    <h5>Social</h5>
                    <div class="row gutters mt-3 ">
                        <div class="col-2 d-flex align-items-center justify-content-center h-100 ">
                            <h3 class="m-0"> <i class="fa-brands fa-facebook"></i></h3>
                        </div>
                        <div class="col-10">
                            <input type="text" placeholder="add Facebook link" class="form-control">
                        </div>
                    </div>
                    <div class="row gutters mt-3 ">

                        <div class="col-2 d-flex align-items-center justify-content-center h-100 ">
                            <h3 class="m-0"> <i class="fa-brands fa-square-instagram"></i></h3>
                        </div>
                        <div class="col-10">
                            <input type="text" placeholder="add Instagram link" class="form-control">
                        </div>
                    </div>
                    <div class="row gutters mt-3 ">
                        <div class="col-2 d-flex align-items-center justify-content-center h-100 ">
                            <h3 class="m-0"> <i class="fa-brands fa-twitter"></i></h3>
                        </div>
                        <div class="col-10">
                            <input type="text" placeholder="add Twitter link" class="form-control">
                        </div>
                    </div>
                    <div class="row gutters mt-3 ">
                        <div class="col-2 d-flex align-items-center justify-content-center h-100 ">
                            <h3 class="m-0"> <i class="fa-brands fa-pinterest"></i></h3>
                        </div>
                        <div class="col-10">
                            <input type="text" placeholder="add Pinterest link" class="form-control">
                        </div>
                    </div>
                    <div class="row gutters mt-3 ">
                        <div class="col-2 d-flex align-items-center justify-content-center h-100 ">
                            <h3 class="m-0"> <i class="fa-solid fa-globe"></i></h3>
                        </div>
                        <div class="col-10">
                            <input type="text" placeholder="add Website link" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-5 ">
                <div class="card-body">
                    <h5> <strong> Designer Category</strong></h5>
                    <div class="row gutters mt-3 ">
                        <div class="col-6 d-flex  h-100 ">
                            <input type="checkbox" id="category">
                            <label for="category" class="mx-2">Lorem Ipsum</label>
                        </div>
                        <div class="col-6">
                            <input type="checkbox" id="category">
                            <label for="category" class="mx-2">Lorem Ipsum</label>
                        </div>
                    </div>
                    <div class="row gutters mt-3 ">
                        <div class="col-6 d-flex  h-100 ">
                            <input type="checkbox" id="category">
                            <label for="category" class="mx-2">Lorem Ipsum</label>
                        </div>
                        <div class="col-6">
                            <input type="checkbox" id="category">
                            <label for="category" class="mx-2">Lorem Ipsum</label>
                        </div>
                    </div>
                    <div class="row gutters mt-3 ">
                        <div class="col-6 d-flex  h-100 ">
                            <input type="checkbox" id="category">
                            <label for="category" class="mx-2">Lorem Ipsum</label>
                        </div>
                        <div class="col-6">
                            <input type="checkbox" id="category">
                            <label for="category" class="mx-2">Lorem Ipsum</label>
                        </div>
                    </div>
                    <div class="row gutters mt-3 ">
                        <div class="col-6 d-flex  h-100 ">
                            <input type="checkbox" id="category">
                            <label for="category" class="mx-2">Lorem Ipsum</label>
                        </div>
                        <div class="col-6">
                            <input type="checkbox" id="category">
                            <label for="category" class="mx-2">Lorem Ipsum</label>
                        </div>
                    </div>
                    <div class="row gutters mt-3 ">
                        <div class="col-6 d-flex  h-100 ">
                            <input type="checkbox" id="category">
                            <label for="category" class="mx-2">Lorem Ipsum</label>
                        </div>
                        <div class="col-6">
                            <input type="checkbox" id="category">
                            <label for="category" class="mx-2">Lorem Ipsum</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-5 ">
                <div class="card-body">
                    <h5> <strong> Choose Services</strong></h5>
                    <div class="row gutters mt-3 ">
                        <div class="col-6 d-flex  h-100 ">
                            <input type="checkbox" id="category">
                            <label for="category" class="mx-2">Lorem Ipsum</label>
                        </div>
                        <div class="col-6">
                            <input type="checkbox" id="category">
                            <label for="category" class="mx-2">Lorem Ipsum</label>
                        </div>
                    </div>
                    <div class="row gutters mt-3 ">
                        <div class="col-6 d-flex  h-100 ">
                            <input type="checkbox" id="category">
                            <label for="category" class="mx-2">Lorem Ipsum</label>
                        </div>
                        <div class="col-6">
                            <input type="checkbox" id="category">
                            <label for="category" class="mx-2">Lorem Ipsum</label>
                        </div>
                    </div>
                    <div class="row gutters mt-3 ">
                        <div class="col-6 d-flex  h-100 ">
                            <input type="checkbox" id="category">
                            <label for="category" class="mx-2">Lorem Ipsum</label>
                        </div>
                        <div class="col-6">
                            <input type="checkbox" id="category">
                            <label for="category" class="mx-2">Lorem Ipsum</label>
                        </div>
                    </div>
                    <div class="row gutters mt-3 ">
                        <div class="col-6 d-flex  h-100 ">
                            <input type="checkbox" id="category">
                            <label for="category" class="mx-2">Lorem Ipsum</label>
                        </div>
                        <div class="col-6">
                            <input type="checkbox" id="category">
                            <label for="category" class="mx-2">Lorem Ipsum</label>
                        </div>
                    </div>
                    <div class="row gutters mt-3 ">
                        <div class="col-6 d-flex  h-100 ">
                            <input type="checkbox" id="category">
                            <label for="category" class="mx-2">Lorem Ipsum</label>
                        </div>
                        <div class="col-6">
                            <input type="checkbox" id="category">
                            <label for="category" class="mx-2">Lorem Ipsum</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
            <div class="card h-100">
                <div class="card-body pb-5 ">
                    <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <h3 class="mb-2 ">Profile Details</h3>
                        </div>
                        <div class="divider mt-3"></div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group mt-3">
                                <label for="fullName">Full Name</label>
                                <input type="text" class="form-control" id="fullName" placeholder="Enter full name">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group mt-3">
                                <label for="eMail">Define Yourself (I am a designer)</label>
                                <input type="text" class="form-control" id="eMail" placeholder="Graphic Designer">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group mt-3">
                                <label for="phone">Username</label>
                                <input type="text" class="form-control" id="phone" placeholder="johndoe">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group mt-3">
                                <label for="website">Email Address</label>
                                <input type="email" class="form-control" id="website" placeholder="john@gmail.com">
                            </div>
                        </div>
                    </div>
                    <div class="row gutters">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group mt-3">
                                <label for="Street">City</label>
                                <input type="name" class="form-control" id="Street" placeholder="New York">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group mt-3">
                                <label for="ciTy">Country</label>
                                <input type="name" class="form-control" id="ciTy" placeholder="United States">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group mt-3">
                                <label for="sTate">Bio</label>
                                <input type="text" class="form-control" id="sTate" placeholder="Phone Number">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group mt-3">
                                <label for="sTate">Phone Number</label>
                                <input type="text" class="form-control" id="sTate" placeholder="+1 (555) 000-0000">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group mt-3">
                                <label for="image">Image</label>
                                <input type="file" class="form-control" id="image" placeholder="Choose File">
                                <label for="image">+ Add Image</label>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group mt-3">
                                <label for="video">Intro Video</label>
                                <input type="file" class="form-control" id="video" placeholder="Choose File">
                                <label for="video">+ Add Video</label>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group mt-3">
                                <label for="video">Resume</label>
                                <input type="file" class="form-control" id="resume" placeholder="Choose File">

                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="form-group mt-3">
                                <label for="about-me">About Me</label>
                                <textarea class="form-control" id="about-me" placeholder="Lorem impsum about me description text." rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row gutters mt-5 skills-section ">
                        <div class="col-6 col-md-6">
                            <h6>Skills</h6>
                        </div>
                        <div class="col-6 col-md-6 text-end  ">
                            <h6 class="float-right"><a href="#">+ Add Skill</a></h6>
                        </div>
                    </div>
                    <div class="row gutters mt-1 skills-section ">
                        <div class="col-12 col-md-4 p-3">
                            <h6>Creativity</h6>
                        </div>
                        <div class="col-12 col-md-4 p-3  ">
                            <div class="d-flex align-items-center">
                                <button class="stepper-button">1</button>
                                <div class="stepper-progress">
                                </div>
                                <button class="stepper-button">2</button>
                                <div class="stepper-progress">
                                </div>
                                <button class="stepper-button">3</button>
                                <div class="stepper-progress">
                                </div>
                                <button class="stepper-button">4</button>
                                <div class="stepper-progress">
                                </div>
                                <button class="stepper-button">5</button>

                            </div>

                        </div>

                        <div class="col-12 col-md-4 text-end p-3  ">
                            <h5> <i class="fa-solid fa-pen-to-square"></i></h5>
                        </div>
                    </div>
                    <div class="row gutters mt-1 skills-section ">
                        <div class="col-12 col-md-4 p-3">
                            <h6>Photo Editing</h6>
                        </div>
                        <div class="col-12 col-md-4 p-3  ">
                            <div class="d-flex align-items-center">
                                <button class="stepper-button">1</button>
                                <div class="stepper-progress">
                                </div>
                                <button class="stepper-button">2</button>
                                <div class="stepper-progress">
                                </div>
                                <button class="stepper-button">3</button>
                                <div class="stepper-progress">
                                </div>
                                <button class="stepper-button">4</button>
                                <div class="stepper-progress">
                                </div>
                                <button class="stepper-button">5</button>

                            </div>

                        </div>

                        <div class="col-12 col-md-4 text-end p-3  ">
                            <h5> <i class="fa-solid fa-pen-to-square"></i></h5>
                        </div>
                    </div>
                    <div class="row gutters mt-1 skills-section ">
                        <div class="col-12 col-md-4 p-3">
                            <h6>Drawing</h6>
                        </div>
                        <div class="col-12 col-md-4 p-3  ">
                            <div class="d-flex align-items-center">
                                <button class="stepper-button">1</button>
                                <div class="stepper-progress">
                                </div>
                                <button class="stepper-button">2</button>
                                <div class="stepper-progress">
                                </div>
                                <button class="stepper-button">3</button>
                                <div class="stepper-progress">
                                </div>
                                <button class="stepper-button">4</button>
                                <div class="stepper-progress-disable">
                                </div>
                                <button class="stepper-button" disabled>5</button>

                            </div>

                        </div>

                        <div class="col-12 col-md-4 text-end p-3  ">
                            <h5> <i class="fa-solid fa-pen-to-square"></i></h5>
                        </div>
                    </div>
                    <div class="row gutters mt-1 skills-section ">
                        <div class="col-12 col-md-4 p-3">
                            <h6>Color Theory</h6>
                        </div>
                        <div class="col-12 col-md-4 p-3  ">
                            <div class="d-flex align-items-center">
                                <button class="stepper-button">1</button>
                                <div class="stepper-progress">
                                </div>
                                <button class="stepper-button">2</button>
                                <div class="stepper-progress">
                                </div>
                                <button class="stepper-button">3</button>
                                <div class="stepper-progress-disable ">
                                </div>
                                <button class="stepper-button" disabled>4</button>
                                <div class="stepper-progress-disable">
                                </div>
                                <button class="stepper-button" disabled>5</button>

                            </div>

                        </div>

                        <div class="col-12 col-md-4 text-end p-3  ">
                            <h5> <i class="fa-solid fa-pen-to-square"></i></h5>
                        </div>
                    </div>
                    <div class="row gutters mt-1 skills-section ">
                        <div class="col-12 col-md-4 p-3">
                            <h6>Branding</h6>
                        </div>
                        <div class="col-12 col-md-4 p-3  ">
                            <div class="d-flex align-items-center">
                                <button class="stepper-button">1</button>
                                <div class="stepper-progress">
                                </div>
                                <button class="stepper-button">2</button>
                                <div class="stepper-progress">
                                </div>
                                <button class="stepper-button">3</button>
                                <div class="stepper-progress ">
                                </div>
                                <button class="stepper-button">4</button>
                                <div class="stepper-progress">
                                </div>
                                <button class="stepper-button">5</button>

                            </div>

                        </div>

                        <div class="col-12 col-md-4 text-end p-3  ">
                            <h5> <i class="fa-solid fa-pen-to-square"></i></h5>
                        </div>
                    </div>
                    <div class="row gutters mt-1 skills-section ">
                        <div class="col-12 col-md-4 p-3">
                            <h6>Adobe Photoshop</h6>
                        </div>
                        <div class="col-12 col-md-4 p-3  ">
                            <div class="d-flex align-items-center">
                                <button class="stepper-button">1</button>
                                <div class="stepper-progress">
                                </div>
                                <button class="stepper-button">2</button>
                                <div class="stepper-progress">
                                </div>
                                <button class="stepper-button">3</button>
                                <div class="stepper-progress ">
                                </div>
                                <button class="stepper-button">4</button>
                                <div class="stepper-progress-disable ">
                                </div>
                                <button class="stepper-button" disabled>5</button>

                            </div>

                        </div>

                        <div class="col-12 col-md-4 text-end p-3  ">
                            <h5> <i class="fa-solid fa-pen-to-square"></i></h5>
                        </div>
                    </div>
                    <div class="row gutters mt-1 skills-section ">
                        <div class="col-12 col-md-4 p-3">
                            <h6>Adobe Illustrator</h6>
                        </div>
                        <div class="col-12 col-md-4 p-3  ">
                            <div class="d-flex align-items-center">
                                <button class="stepper-button">1</button>
                                <div class="stepper-progress">
                                </div>
                                <button class="stepper-button">2</button>
                                <div class="stepper-progress">
                                </div>
                                <button class="stepper-button">3</button>
                                <div class="stepper-progress ">
                                </div>
                                <button class="stepper-button">4</button>
                                <div class="stepper-progress-disable ">
                                </div>
                                <button class="stepper-button" disabled>5</button>

                            </div>

                        </div>

                        <div class="col-12 col-md-4 text-end p-3  ">
                            <h5> <i class="fa-solid fa-pen-to-square"></i></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
@endpush