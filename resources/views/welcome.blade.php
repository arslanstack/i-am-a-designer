<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jewels - Designers Portfolio Site</title>
    <link rel="stylesheet" href="./clientSideAssets/css/global.css" />
    <link rel="stylesheet" href="./clientSideAssets/masonary/css/component.css" />
    <script src="./clientSideAssets/masonary/js/modernizr.custom.js"></script>
    <link rel="stylesheet" href="./clientSideAssets/bootstrap-dist/css/bootstrap.min.css" />
    <script src="./clientSideAssets/bootstrap-dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <!-- Navbar Start -->
    <nav id="navbar" class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#" style="width: 100px"><img src="./clientSideAssets/images/logo.png" width="100%" alt="" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active  mx-0" aria-current="page" href="#">Find Designers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  mx-0" href="#">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Hero Section Start -->

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="overlay"></div>
                <img src="./clientSideAssets/plugin/img/slide-img-1.jpg" class="d-block w-100" alt="..." />
                <div class="carousel-caption text-black">
                    <div class="hero">
                        <p>The Worlds Destination for jewelry design</p>
                        <h1>Find Dream Designers</h1>
                        <small>
                            Get inspired by the work of thousands of top-rated jewelry
                            designers around the world.</small>
                        <div class="mt-2">
                            <button>
                                Search Now<svg width="18" height="18" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.25 18.715c0-3.003.677-5.402 2.011-7.137 1.612-2.094 4.157-3.223 7.574-3.363v-4.84l9.915 8.438-9.915 8.437v-4.812c-2.075.056-3.64.356-4.888.93-1.348.621-2.325 1.55-3.379 2.752L2.25 20.625v-1.91Z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="overlay"></div>
                <img src="./clientSideAssets/plugin/img/slide-img-2.jpg" class="d-block w-100" alt="..." />
                <div class="carousel-caption text-black">
                    <div class="hero">
                        <p>Over 3 thousand ready-to-work creatives!</p>
                        <h1>Find Inspiring Designs</h1>
                        <small>
                            The world's leading brands use 'Jewels' to hire creative talent. </small>
                        <div class="mt-2">
                            <button>
                                Search Now<svg width="18" height="18" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.25 18.715c0-3.003.677-5.402 2.011-7.137 1.612-2.094 4.157-3.223 7.574-3.363v-4.84l9.915 8.438-9.915 8.437v-4.812c-2.075.056-3.64.356-4.888.93-1.348.621-2.325 1.55-3.379 2.752L2.25 20.625v-1.91Z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Hero Section End -->
    <!-- Inspiring Cards Start -->
    <div class="container py-5">
        <div class="section-heading text-center pb-3">
            <h1>Explore Designs That Inspire</h1>
            <p class="py-2" style="font-size: 20px;">Discover the elegance of creative expression, crafted in precious metals and stones.</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-12">
                <div class="card border-0 my-3">
                    <div class="inspiring-image" style="height: 200px">
                        <img src="./clientSideAssets/images/car1.jpg" class="card-img-top" alt="..." />
                        <div class="image-overlay">
                            <span class="overlay-text">
                                <div class="row">
                                    <div class="col-12">
                                        <p class="mb-0 mt-2 text-white">Bridgetown Collection</p>
                                    </div>
                                    <!--  -->
                                </div>
                            </span>
                        </div>
                    </div>

                    <div class="card-body px-0 py-1 inspiring-text">
                        <div class="d-flex justify-content-between">
                            <div>
                                <div class="d-flex">
                                    <div>
                                        <img src="./clientSideAssets/images/matty.avif" style="border-radius: 60px" width="20px" height="20px" alt="" />
                                    </div>
                                    <div class="mx-1">
                                        <span>Mattey Corbalorano</span>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="mx-1">
                                    <svg class="heart" width="18" height="18" fill="#ccc" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="m12 21-.421-.281c-2.006-1.34-4.543-2.853-6.422-5.078-1.98-2.344-2.93-4.75-2.907-7.36C2.28 5.37 4.616 3 7.457 3c2.255 0 3.755 1.313 4.544 2.26.788-.947 2.287-2.26 4.543-2.26 2.841 0 5.177 2.37 5.206 5.28.027 2.61-.923 5.016-2.906 7.36-1.879 2.226-4.416 3.74-6.422 5.079l-.421.281Z"></path>
                                    </svg>
                                    <span class="amount">228</span>
                                    <svg width="18" height="q8" fill="#ccc" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"></path>
                                        <path d="M18.507 6.618C16.457 5.213 14.264 4.5 11.99 4.5c-2.048 0-4.045.61-5.934 1.804C4.149 7.51 2.28 9.704.75 12c1.238 2.063 2.933 4.183 4.697 5.4 2.024 1.393 4.225 2.1 6.542 2.1 2.297 0 4.493-.706 6.53-2.1 1.792-1.228 3.499-3.346 4.731-5.4-1.237-2.036-2.948-4.151-4.743-5.382ZM12 16.5a4.5 4.5 0 1 1 0-9 4.5 4.5 0 0 1 0 9Z"></path>
                                    </svg>
                                    <span class="amount">52k</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-12">
                <div class="card border-0 my-3">
                    <div class="inspiring-image" style="height: 200px">
                        <img src="./clientSideAssets/images/car2.jpg" class="card-img-top" alt="..." />
                        <div class="image-overlay">
                            <span class="overlay-text">
                                <div class="row">
                                    <div class="col-12">
                                        <p class="mb-0 mt-2 text-white">Bridgetown Collection</p>
                                    </div>
                                    <!--  -->
                                </div>
                            </span>
                        </div>
                    </div>

                    <div class="card-body px-0 py-1 inspiring-text">
                        <div class="d-flex justify-content-between">
                            <div>
                                <div class="d-flex">
                                    <div>
                                        <img src="./clientSideAssets/images/matty.avif" style="border-radius: 60px" width="20px" height="20px" alt="" />
                                    </div>
                                    <div class="mx-1">
                                        <span>Mattey Corbalorano</span>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="mx-1">
                                    <svg class="heart" width="18" height="18" fill="#ccc" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="m12 21-.421-.281c-2.006-1.34-4.543-2.853-6.422-5.078-1.98-2.344-2.93-4.75-2.907-7.36C2.28 5.37 4.616 3 7.457 3c2.255 0 3.755 1.313 4.544 2.26.788-.947 2.287-2.26 4.543-2.26 2.841 0 5.177 2.37 5.206 5.28.027 2.61-.923 5.016-2.906 7.36-1.879 2.226-4.416 3.74-6.422 5.079l-.421.281Z"></path>
                                    </svg>
                                    <span class="amount">228</span>
                                    <svg width="18" height="q8" fill="#ccc" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"></path>
                                        <path d="M18.507 6.618C16.457 5.213 14.264 4.5 11.99 4.5c-2.048 0-4.045.61-5.934 1.804C4.149 7.51 2.28 9.704.75 12c1.238 2.063 2.933 4.183 4.697 5.4 2.024 1.393 4.225 2.1 6.542 2.1 2.297 0 4.493-.706 6.53-2.1 1.792-1.228 3.499-3.346 4.731-5.4-1.237-2.036-2.948-4.151-4.743-5.382ZM12 16.5a4.5 4.5 0 1 1 0-9 4.5 4.5 0 0 1 0 9Z"></path>
                                    </svg>
                                    <span class="amount">52k</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-12">
                <div class="card border-0 my-3">
                    <div class="inspiring-image" style="height: 200px">
                        <img src="./clientSideAssets/images/car3.jpg" class="card-img-top" alt="..." />
                        <div class="image-overlay">
                            <span class="overlay-text">
                                <div class="row">
                                    <div class="col-12">
                                        <p class="mb-0 mt-2 text-white">Bridgetown Collection</p>
                                    </div>
                                    <!--  -->
                                </div>
                            </span>
                        </div>
                    </div>

                    <div class="card-body px-0 py-1 inspiring-text">
                        <div class="d-flex justify-content-between">
                            <div>
                                <div class="d-flex">
                                    <div>
                                        <img src="./clientSideAssets/images/matty.avif" style="border-radius: 60px" width="20px" height="20px" alt="" />
                                    </div>
                                    <div class="mx-1">
                                        <span>Mattey Corbalorano</span>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="mx-1">
                                    <svg class="heart" width="18" height="18" fill="#ccc" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="m12 21-.421-.281c-2.006-1.34-4.543-2.853-6.422-5.078-1.98-2.344-2.93-4.75-2.907-7.36C2.28 5.37 4.616 3 7.457 3c2.255 0 3.755 1.313 4.544 2.26.788-.947 2.287-2.26 4.543-2.26 2.841 0 5.177 2.37 5.206 5.28.027 2.61-.923 5.016-2.906 7.36-1.879 2.226-4.416 3.74-6.422 5.079l-.421.281Z"></path>
                                    </svg>
                                    <span class="amount">228</span>
                                    <svg width="18" height="q8" fill="#ccc" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"></path>
                                        <path d="M18.507 6.618C16.457 5.213 14.264 4.5 11.99 4.5c-2.048 0-4.045.61-5.934 1.804C4.149 7.51 2.28 9.704.75 12c1.238 2.063 2.933 4.183 4.697 5.4 2.024 1.393 4.225 2.1 6.542 2.1 2.297 0 4.493-.706 6.53-2.1 1.792-1.228 3.499-3.346 4.731-5.4-1.237-2.036-2.948-4.151-4.743-5.382ZM12 16.5a4.5 4.5 0 1 1 0-9 4.5 4.5 0 0 1 0 9Z"></path>
                                    </svg>
                                    <span class="amount">52k</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-12">
                <div class="card border-0 my-3">
                    <div class="inspiring-image" style="height: 200px">
                        <img src="./clientSideAssets/images/car4.jpg" class="card-img-top" alt="..." />
                        <div class="image-overlay">
                            <span class="overlay-text">
                                <div class="row">
                                    <div class="col-12">
                                        <p class="mb-0 mt-2 text-white">Bridgetown Collection</p>
                                    </div>
                                    <!--  -->
                                </div>
                            </span>
                        </div>
                    </div>

                    <div class="card-body px-0 py-1 inspiring-text">
                        <div class="d-flex justify-content-between">
                            <div>
                                <div class="d-flex">
                                    <div>
                                        <img src="./clientSideAssets/images/matty.avif" style="border-radius: 60px" width="20px" height="20px" alt="" />
                                    </div>
                                    <div class="mx-1">
                                        <span>Mattey Corbalorano</span>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="mx-1">
                                    <svg class="heart" width="18" height="18" fill="#ccc" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="m12 21-.421-.281c-2.006-1.34-4.543-2.853-6.422-5.078-1.98-2.344-2.93-4.75-2.907-7.36C2.28 5.37 4.616 3 7.457 3c2.255 0 3.755 1.313 4.544 2.26.788-.947 2.287-2.26 4.543-2.26 2.841 0 5.177 2.37 5.206 5.28.027 2.61-.923 5.016-2.906 7.36-1.879 2.226-4.416 3.74-6.422 5.079l-.421.281Z"></path>
                                    </svg>
                                    <span class="amount">228</span>
                                    <svg width="18" height="q8" fill="#ccc" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"></path>
                                        <path d="M18.507 6.618C16.457 5.213 14.264 4.5 11.99 4.5c-2.048 0-4.045.61-5.934 1.804C4.149 7.51 2.28 9.704.75 12c1.238 2.063 2.933 4.183 4.697 5.4 2.024 1.393 4.225 2.1 6.542 2.1 2.297 0 4.493-.706 6.53-2.1 1.792-1.228 3.499-3.346 4.731-5.4-1.237-2.036-2.948-4.151-4.743-5.382ZM12 16.5a4.5 4.5 0 1 1 0-9 4.5 4.5 0 0 1 0 9Z"></path>
                                    </svg>
                                    <span class="amount">52k</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-12">
                <div class="card border-0 my-3">
                    <div class="inspiring-image" style="height: 200px">
                        <img src="./clientSideAssets/images/car5.jpg" class="card-img-top" alt="..." />
                        <div class="image-overlay">
                            <span class="overlay-text">
                                <div class="row">
                                    <div class="col-12">
                                        <p class="mb-0 mt-2 text-white">Bridgetown Collection</p>
                                    </div>
                                    <!--  -->
                                </div>
                            </span>
                        </div>
                    </div>

                    <div class="card-body px-0 py-1 inspiring-text">
                        <div class="d-flex justify-content-between">
                            <div>
                                <div class="d-flex">
                                    <div>
                                        <img src="./clientSideAssets/images/matty.avif" style="border-radius: 60px" width="20px" height="20px" alt="" />
                                    </div>
                                    <div class="mx-1">
                                        <span>Mattey Corbalorano</span>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="mx-1">
                                    <svg class="heart" width="18" height="18" fill="#ccc" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="m12 21-.421-.281c-2.006-1.34-4.543-2.853-6.422-5.078-1.98-2.344-2.93-4.75-2.907-7.36C2.28 5.37 4.616 3 7.457 3c2.255 0 3.755 1.313 4.544 2.26.788-.947 2.287-2.26 4.543-2.26 2.841 0 5.177 2.37 5.206 5.28.027 2.61-.923 5.016-2.906 7.36-1.879 2.226-4.416 3.74-6.422 5.079l-.421.281Z"></path>
                                    </svg>
                                    <span class="amount">228</span>
                                    <svg width="18" height="q8" fill="#ccc" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"></path>
                                        <path d="M18.507 6.618C16.457 5.213 14.264 4.5 11.99 4.5c-2.048 0-4.045.61-5.934 1.804C4.149 7.51 2.28 9.704.75 12c1.238 2.063 2.933 4.183 4.697 5.4 2.024 1.393 4.225 2.1 6.542 2.1 2.297 0 4.493-.706 6.53-2.1 1.792-1.228 3.499-3.346 4.731-5.4-1.237-2.036-2.948-4.151-4.743-5.382ZM12 16.5a4.5 4.5 0 1 1 0-9 4.5 4.5 0 0 1 0 9Z"></path>
                                    </svg>
                                    <span class="amount">52k</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-12">
                <div class="card border-0 my-3">
                    <div class="inspiring-image" style="height: 200px">
                        <img src="./clientSideAssets/images/car6.jpg" class="card-img-top" alt="..." />
                        <div class="image-overlay">
                            <span class="overlay-text">
                                <div class="row">
                                    <div class="col-12">
                                        <p class="mb-0 mt-2 text-white">Bridgetown Collection</p>
                                    </div>
                                    <!--  -->
                                </div>
                            </span>
                        </div>
                    </div>

                    <div class="card-body px-0 py-1 inspiring-text">
                        <div class="d-flex justify-content-between">
                            <div>
                                <div class="d-flex">
                                    <div>
                                        <img src="./clientSideAssets/images/matty.avif" style="border-radius: 60px" width="20px" height="20px" alt="" />
                                    </div>
                                    <div class="mx-1">
                                        <span>Mattey Corbalorano</span>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="mx-1">
                                    <svg class="heart" width="18" height="18" fill="#ccc" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="m12 21-.421-.281c-2.006-1.34-4.543-2.853-6.422-5.078-1.98-2.344-2.93-4.75-2.907-7.36C2.28 5.37 4.616 3 7.457 3c2.255 0 3.755 1.313 4.544 2.26.788-.947 2.287-2.26 4.543-2.26 2.841 0 5.177 2.37 5.206 5.28.027 2.61-.923 5.016-2.906 7.36-1.879 2.226-4.416 3.74-6.422 5.079l-.421.281Z"></path>
                                    </svg>
                                    <span class="amount">228</span>
                                    <svg width="18" height="q8" fill="#ccc" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"></path>
                                        <path d="M18.507 6.618C16.457 5.213 14.264 4.5 11.99 4.5c-2.048 0-4.045.61-5.934 1.804C4.149 7.51 2.28 9.704.75 12c1.238 2.063 2.933 4.183 4.697 5.4 2.024 1.393 4.225 2.1 6.542 2.1 2.297 0 4.493-.706 6.53-2.1 1.792-1.228 3.499-3.346 4.731-5.4-1.237-2.036-2.948-4.151-4.743-5.382ZM12 16.5a4.5 4.5 0 1 1 0-9 4.5 4.5 0 0 1 0 9Z"></path>
                                    </svg>
                                    <span class="amount">52k</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-12">
                <div class="card border-0 my-3">
                    <div class="inspiring-image" style="height: 200px">
                        <img src="./clientSideAssets/images/car7.jpg" class="card-img-top" alt="..." />
                        <div class="image-overlay">
                            <span class="overlay-text">
                                <div class="row">
                                    <div class="col-12">
                                        <p class="mb-0 mt-2 text-white">Bridgetown Collection</p>
                                    </div>
                                    <!--  -->
                                </div>
                            </span>
                        </div>
                    </div>

                    <div class="card-body px-0 py-1 inspiring-text">
                        <div class="d-flex justify-content-between">
                            <div>
                                <div class="d-flex">
                                    <div>
                                        <img src="./clientSideAssets/images/matty.avif" style="border-radius: 60px" width="20px" height="20px" alt="" />
                                    </div>
                                    <div class="mx-1">
                                        <span>Mattey Corbalorano</span>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="mx-1">
                                    <svg class="heart" width="18" height="18" fill="#ccc" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="m12 21-.421-.281c-2.006-1.34-4.543-2.853-6.422-5.078-1.98-2.344-2.93-4.75-2.907-7.36C2.28 5.37 4.616 3 7.457 3c2.255 0 3.755 1.313 4.544 2.26.788-.947 2.287-2.26 4.543-2.26 2.841 0 5.177 2.37 5.206 5.28.027 2.61-.923 5.016-2.906 7.36-1.879 2.226-4.416 3.74-6.422 5.079l-.421.281Z"></path>
                                    </svg>
                                    <span class="amount">228</span>
                                    <svg width="18" height="q8" fill="#ccc" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"></path>
                                        <path d="M18.507 6.618C16.457 5.213 14.264 4.5 11.99 4.5c-2.048 0-4.045.61-5.934 1.804C4.149 7.51 2.28 9.704.75 12c1.238 2.063 2.933 4.183 4.697 5.4 2.024 1.393 4.225 2.1 6.542 2.1 2.297 0 4.493-.706 6.53-2.1 1.792-1.228 3.499-3.346 4.731-5.4-1.237-2.036-2.948-4.151-4.743-5.382ZM12 16.5a4.5 4.5 0 1 1 0-9 4.5 4.5 0 0 1 0 9Z"></path>
                                    </svg>
                                    <span class="amount">52k</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-12">
                <div class="card border-0 my-3">
                    <div class="inspiring-image" style="height: 200px">
                        <img src="./clientSideAssets/images/car8.jpg" class="card-img-top" alt="..." />
                        <div class="image-overlay">
                            <span class="overlay-text">
                                <div class="row">
                                    <div class="col-12">
                                        <p class="mb-0 mt-2 text-white">Bridgetown Collection</p>
                                    </div>
                                    <!--  -->
                                </div>
                            </span>
                        </div>
                    </div>

                    <div class="card-body px-0 py-1 inspiring-text">
                        <div class="d-flex justify-content-between">
                            <div>
                                <div class="d-flex">
                                    <div>
                                        <img src="./clientSideAssets/images/matty.avif" style="border-radius: 60px" width="20px" height="20px" alt="" />
                                    </div>
                                    <div class="mx-1">
                                        <span>Mattey Corbalorano</span>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="mx-1">
                                    <svg class="heart" width="18" height="18" fill="#ccc" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="m12 21-.421-.281c-2.006-1.34-4.543-2.853-6.422-5.078-1.98-2.344-2.93-4.75-2.907-7.36C2.28 5.37 4.616 3 7.457 3c2.255 0 3.755 1.313 4.544 2.26.788-.947 2.287-2.26 4.543-2.26 2.841 0 5.177 2.37 5.206 5.28.027 2.61-.923 5.016-2.906 7.36-1.879 2.226-4.416 3.74-6.422 5.079l-.421.281Z"></path>
                                    </svg>
                                    <span class="amount">228</span>
                                    <svg width="18" height="q8" fill="#ccc" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"></path>
                                        <path d="M18.507 6.618C16.457 5.213 14.264 4.5 11.99 4.5c-2.048 0-4.045.61-5.934 1.804C4.149 7.51 2.28 9.704.75 12c1.238 2.063 2.933 4.183 4.697 5.4 2.024 1.393 4.225 2.1 6.542 2.1 2.297 0 4.493-.706 6.53-2.1 1.792-1.228 3.499-3.346 4.731-5.4-1.237-2.036-2.948-4.151-4.743-5.382ZM12 16.5a4.5 4.5 0 1 1 0-9 4.5 4.5 0 0 1 0 9Z"></path>
                                    </svg>
                                    <span class="amount">52k</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Inspiring Cards End -->
    <!-- Gallery Section Start -->
    <div class="container py-4">
        <div class="section-heading text-center pt-4">
            <h1>Explore, Connect & Create</h1>
            <p class="py-2" style="font-size: 20px;">Discover the elegance of creative expression, crafted in precious metals and stones.</p>
        </div>
        <!-- <div class="grid-wrapper">
            <div>
                <img src="./clientSideAssets/images/gal1.jpg" alt="" />
            </div>
            <div>
                <img src="./clientSideAssets/images/gal2.jpg" alt="" />
            </div>
            <div class="tall">
                <img src="./clientSideAssets/images/gal3.jpg" alt="" />
            </div>
            <div class="wide">
                <img src="./clientSideAssets/images/gal4.jpg" alt="" />
            </div>
            <div>
                <img src="./clientSideAssets/images/gal5.jpg" alt="" />
            </div>

            <div>
                <img src="./clientSideAssets/images/gal9.jpg" alt="" />
            </div>
        </div> -->
    </div>

    <!-- Gallery Section End -->

    <!-- Masoonary Start -->
    <div class="container">
        <ul class="grid effect-1" id="grid">
            <li>
                <a href="" style="text-decoration: none;"><img src="./clientSideAssets/images/gal1.jpg" />

                </a>
            </li>
            <li>
                <a href="" style="text-decoration: none;"><img src="./clientSideAssets/images/gal2.jpg" />

                </a>
            </li>
            <li>
                <a href="" style="text-decoration: none;"><img src="./clientSideAssets/images/gal3.jpg" />

                </a>
            </li>
            <li>
                <a href="" style="text-decoration: none;"><img src="./clientSideAssets/images/gal4.jpg" />

                </a>
            </li>
            <li>
                <a href="" style="text-decoration: none;"><img src="./clientSideAssets/images/gal5.jpg" />

                </a>
            </li>
            <li>
                <a href="" style="text-decoration: none;"><img src="./clientSideAssets/images/gal6.jpg" />

                </a>
            </li>
            <li>
                <a href="" style="text-decoration: none;"><img src="./clientSideAssets/images/gal7.jpg" />

                </a>
            </li>
            <li>
                <a href="" style="text-decoration: none;"><img src="./clientSideAssets/images/gal8.jpg" />

                </a>
            </li>
            <li>
                <a href="" style="text-decoration: none;"><img src="./clientSideAssets/images/gal1.jpg" />

                </a>
            </li>


        </ul>
    </div>

    <script src="./clientSideAssets/masonary/js/masonry.pkgd.min.js"></script>
    <script src="./clientSideAssets/masonary/js/imagesloaded.js"></script>
    <script src="./clientSideAssets/masonary/js/classie.js"></script>
    <script src="./clientSideAssets/masonary/js/AnimOnScroll.js"></script>
    <script>
        new AnimOnScroll(document.getElementById("grid"), {
            minDuration: 0.4,
            maxDuration: 0.7,
            viewportFactor: 0.2,
        });
    </script>

    <!-- Masoonary End -->







    <!-- Team Card Start -->
    <div class="container">
        <div class="section-heading text-center pt-5 pb-0">
            <h1 class="m-0">Our Featured Designers</h1>
            <p class="py-2" style="font-size: 20px;">Discover the elegance of creative expression, crafted in precious metals and stones.</p>
        </div>
    </div>

    <div class="my-4">
        <div class="wrap-slider" id="js-wrapSlider">
            <ul class="js-slider">
                <li class="item">
                    <div class="mx-2">
                        <div class="card position-relative team my-2">
                            <img src="./clientSideAssets/images/potrait.avif" class="card-img" alt="Sample Image" />
                            <div class="card-img-overlay pb-4 ms-2">
                                <div class="card-img-overlay-text pb-2">
                                    <p class="card-text m-0">Dan Mall</p>
                                    <div>
                                        <small class="card-text">London, UK</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="item">
                    <div class="mx-2">
                        <div class="card position-relative team my-2">
                            <img src="./clientSideAssets/images/bl-white.webp" class="card-img" alt="Sample Image" />
                            <div class="card-img-overlay pb-4 ms-2">
                                <div class="card-img-overlay-text pb-2">
                                    <p class="card-text m-0">Walt Disney</p>
                                    <div>
                                        <small class="card-text">Texas, US</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="item">
                    <div class="mx-2">
                        <div class="card position-relative team my-2">
                            <img src="./clientSideAssets/images/chintoo.gif" class="card-img" alt="Sample Image" />
                            <div class="card-img-overlay pb-4 ms-2">
                                <div class="card-img-overlay-text pb-2">
                                    <p class="card-text m-0">Elsa Chinto</p>
                                    <div>
                                        <small class="card-text">Tengah, Singapore</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="item">
                    <div class="mx-2">
                        <div class="card position-relative team my-2">
                            <img src="./clientSideAssets/images/mcb.webp" class="card-img" alt="Sample Image" />
                            <div class="card-img-overlay pb-4 ms-2">
                                <div class="card-img-overlay-text pb-2">
                                    <p class="card-text m-0">Molda Banki</p>
                                    <div>
                                        <small class="card-text">Tokyo, Japan</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="item">
                    <div class="mx-2">
                        <div class="card position-relative team my-2">
                            <img src="./clientSideAssets/images/designer.gif" class="card-img" alt="Sample Image" />
                            <div class="card-img-overlay pb-4 ms-2">
                                <div class="card-img-overlay-text pb-2">
                                    <p class="card-text m-0">Alfred Augusta</p>
                                    <div>
                                        <small class="card-text">New York, US</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <script>
        window.requestAnimFrame = (function() {
            return (
                window.requestAnimationFrame ||
                window.webkitRequestAnimationFrame ||
                window.mozRequestAnimationFrame ||
                function(callback) {
                    window.setTimeout(callback, 1000 / 60);
                }
            );
        })();

        const wrapSlider = document.querySelector("#js-wrapSlider");
        const widthWrap = wrapSlider.offsetWidth;

        let items;
        let sliders;
        let sliderList = [];

        const getSliderList = () => {
            sliders = document.querySelectorAll(".js-slider");
            // get the dom elements in a array to better use it
            sliderList = [...sliders];
        };
        // made a function for update later
        getSliderList();

        const slider = document.querySelectorAll(".js-slider")[0];
        const sliderWidth = slider.offsetWidth;

        const sumIsLargerThanSlider = sliderWidth >= widthWrap + sliderWidth;

        const iterationItems = Math.ceil((widthWrap + sliderWidth) / sliderWidth);
        if (iterationItems > 1) {
            for (let i = 0; i < iterationItems - 1; i++) {
                const clone = slider.cloneNode(true);
                wrapSlider.appendChild(clone);
            }

            getSliderList();
        }

        let stateList = sliderList.map((item, i) => {
            let pos = 0;
            let start = false;

            if (i < iterationItems - 1) {
                pos = -widthWrap + sliders[i].offsetWidth * i;
                start = true;

                sliders[i].style.transform = `translate(${pos}px, -50%)`;
            }

            return {
                pos,
                start,
            };
        });

        // logic animation for sliding each item at a time
        const translate = () => {
            for (let i = 0; i < sliderList.length; i++) {
                const slider = sliderList[i];
                const sliderWidth = slider.offsetWidth;
                const nextIndex = i != sliderList.length - 1 ? i + 1 : 0;
                let pos;

                // if slider should be in movement
                if (stateList[i].start) {
                    stateList[i].pos -= 1;
                    pos = stateList[i].pos;

                    slider.style.transform = `translate(${pos}px, -50%)`;
                }

                const isComplete = pos <= -sliderWidth;
                const isOutSeen = pos <= -widthWrap - sliderWidth;

                // if the slider is fully on screen
                if (isComplete) {
                    stateList[nextIndex].start = true;
                }
                // if the slider finished crossing the slider and has disappeared
                if (isOutSeen) {
                    stateList[i].start = false;
                    stateList[i].pos = 0;
                }
            }
        };

        let isPaused = false;

        function start() {
            if (!isPaused) {
                translate();
            }

            requestAnimFrame(start);
        }

        start();
    </script>
    <!-- Team Card End -->


    <!--Destination Section Start -->
    <div class="destination py-3">
        <div class="container py-5">
            <div class="col-lg-11 mx-auto">
                <div class="col-lg-6 mx-auto">
                    <div class="text-center pb-3">
                        <h1>Find Your Dream Designer Today</h1>
                        <p class="py-3">
                            The world’s leading brands use 'Jewels' to hire creative talent.
                            Browse thousands of top-rated designs & portfolios to find your perfect
                            creative match!
                        </p>
                        <div class="row">
                            <div class="col-lg-12">
                                <button class="w-50 m-auto started my-2">
                                    Get started now
                                </button>
                            </div>
                        </div>
                        <p class="pt-2">
                            Are you a designer?
                            <a href="/" class="text-black">Publish Your Portfolio</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Destination Section End -->




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
                        <a href="#" class="mx-2 text-decoration-none">Made in United</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Footer End  -->

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var grid = document.querySelector(".grid");
            var masonry = new Masonry(grid, {
                itemSelector: ".grid-item",
                columnWidth: ".grid-sizer",
                gutter: 20,
            });
        });
    </script>
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