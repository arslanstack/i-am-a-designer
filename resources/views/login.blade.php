<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - Jewels Portfolio Site</title>
    <link rel="stylesheet" href="./clientSideAssets/css/global.css" />
    <link rel="stylesheet" href="./clientSideAssets/bootstrap-dist/css/bootstrap.min.css" />
    <script src="./clientSideAssets/bootstrap-dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <!-- Navbar Start -->
    <nav id="navbar" class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="{{route('welcome')}}" style="width: 100px"><img src="./clientSideAssets/images/logo.png" width="100%" alt="" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active  mx-0" aria-current="page" href="{{route('designers')}}">Find Designers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  mx-0" aria-current="page" href="{{route('login')}}">Publish Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  mx-0" href="{{route('login')}}">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <div class="container signin">
        <div class="col-lg-4 col-12 mx-auto">
            <div class="py-lg-5 py-2">
                <div class="card p-3 my-lg-5 my-3 border-0">
                    <form>

                        <div class="logo-signin text-center">
                            <img src="./clientSideAssets/images/logoform.png" alt="">
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

    <!-- Footer Start  -->

    <footer class="mt-3">
        <div class="container">
            <div class="row pb-4 pt-3">
                <div class="col-lg-2 col-12">
                    <div style="width: 120px" class="footer-image">
                        <a class="" href="#"><img src="./clientSideAssets/images/logo.png" width="100%" alt="" /></a>
                    </div>
                </div>
                <div class="col-lg-8 col-12">
                    <div>
                        <ul class="d-flex list-unstyled footer-links flex-wrap footer-middle">
                            <li>
                                <a href="#" class="text-black text-decoration-none fw-semibold">For Designers</a>
                            </li>
                            <li>
                                <a href="#" class="text-black text-decoration-none fw-semibold">Hire Talent</a>
                            </li>

                            <li>
                                <a href="#" class="text-black text-decoration-none fw-semibold">About</a>
                            </li>
                            <li>
                                <a href="#" class="text-black text-decoration-none fw-semibold">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-12">
                    <div class="d-flex footer-social" style="margin-top: 14px">
                        <div class="mx-2">
                            <svg width="20" height="20" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M23.25 5.133a9.46 9.46 0 0 1-2.65.717 4.57 4.57 0 0 0 2.03-2.512c-.908.53-1.9.903-2.932 1.101A4.647 4.647 0 0 0 16.327 3c-2.55 0-4.615 2.034-4.615 4.542a4.37 4.37 0 0 0 .119 1.036A13.158 13.158 0 0 1 2.315 3.83a4.485 4.485 0 0 0-.627 2.283c0 1.574.821 2.967 2.062 3.782a4.57 4.57 0 0 1-2.1-.567v.056c0 2.204 1.595 4.036 3.704 4.454a4.752 4.752 0 0 1-1.216.159c-.291 0-.582-.028-.868-.085.587 1.805 2.294 3.118 4.315 3.155a9.356 9.356 0 0 1-6.835 1.88A13.063 13.063 0 0 0 7.816 21c8.501 0 13.146-6.923 13.146-12.928 0-.197-.006-.394-.015-.586a9.304 9.304 0 0 0 2.303-2.353Z"></path>
                            </svg>
                        </div>

                        <div class="mx-2">
                            <svg width="20" height="20" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M22.5 12.063c0-5.799-4.702-10.5-10.5-10.5s-10.5 4.7-10.5 10.5c0 5.24 3.84 9.584 8.86 10.373v-7.337H7.692v-3.037h2.666V9.75c0-2.63 1.568-4.085 3.966-4.085 1.15 0 2.351.205 2.351.205v2.584h-1.324c-1.304 0-1.712.81-1.712 1.64v1.97h2.912l-.465 3.036H13.64v7.337c5.02-.788 8.859-5.131 8.859-10.373Z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div class="mx-2">
                            <svg width="20" height="20" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.375 3.25a4.388 4.388 0 0 1 4.375 4.375v8.75a4.388 4.388 0 0 1-4.375 4.375h-8.75a4.389 4.389 0 0 1-4.375-4.375v-8.75A4.388 4.388 0 0 1 7.625 3.25h8.75Zm0-1.75h-8.75C4.256 1.5 1.5 4.256 1.5 7.625v8.75c0 3.369 2.756 6.125 6.125 6.125h8.75c3.369 0 6.125-2.756 6.125-6.125v-8.75c0-3.369-2.756-6.125-6.125-6.125Z"></path>
                                <path d="M17.688 7.625a1.313 1.313 0 1 1 0-2.625 1.313 1.313 0 0 1 0 2.625Z"></path>
                                <path d="M12 8.5a3.5 3.5 0 1 1 0 7 3.5 3.5 0 0 1 0-7Zm0-1.75a5.25 5.25 0 1 0 0 10.5 5.25 5.25 0 0 0 0-10.5Z"></path>
                            </svg>
                        </div>
                        <div class="mx-2">
                            <svg width="20" height="20" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.002 1.5c-5.798 0-10.5 4.702-10.5 10.5 0 4.298 2.587 7.992 6.286 9.619-.028-.732-.005-1.613.183-2.41l1.35-5.723s-.338-.67-.338-1.66c0-1.556.9-2.718 2.025-2.718.957 0 1.416.717 1.416 1.575 0 .96-.614 2.395-.928 3.726-.263 1.116.557 2.02 1.66 2.02 1.987 0 3.327-2.554 3.327-5.582 0-2.302-1.551-4.022-4.369-4.022-3.182 0-5.17 2.377-5.17 5.03 0 .914.272 1.56.694 2.057.192.23.22.324.15.586-.052.193-.164.657-.216.844-.07.267-.286.361-.525.263-1.467-.6-2.151-2.203-2.151-4.013 0-2.981 2.517-6.558 7.504-6.558 4.008 0 6.647 2.902 6.647 6.014 0 4.12-2.292 7.196-5.667 7.196-1.134 0-2.198-.614-2.564-1.308 0 0-.61 2.419-.74 2.887-.22.811-.657 1.618-1.055 2.25.966.286 1.969.43 2.976.432 5.799 0 10.5-4.702 10.5-10.5C22.497 6.206 17.8 1.5 12.002 1.5Z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container py-4">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="lower-links text-lg-start text-center">
                        <span>© 2024 Jewels Designer Portfolio</span>
                        <a href="#" class="mx-2 text-decoration-none">Terms of Service</a>
                        <a href="#" class="mx-2 text-decoration-none">Privacy Policy</a>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="lower-links text-lg-end text-center">
                        <a href="#" class="mx-2 text-decoration-none">Designers</a>
                        <a href="#" class="mx-2 text-decoration-none">Sitemap</a>
                        <a href="https://arslanstack.com" class="mx-2 text-decoration-none">Made by @arslanstack</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Footer End  -->
    <script>
        window.onscroll = function() {
            scrollFunction();
        };

        function scrollFunction() {
            var navbar = document.getElementById("navbar");

            if (
                document.body.scrollTop > 60 ||
                document.documentElement.scrollTop > 60
            ) {
                navbar.classList.add("navbar-scrolled");
            } else {
                navbar.classList.remove("navbar-scrolled");
            }
        }
    </script>
</body>

</html>