<?php
    use Carbon\Carbon;
    $current_year = Carbon::now();
?>

<!DOCTYPE html>
<html lang="en" class="">

    <head>
        <!-- Required meta tags always come first -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Electronic Vaults (EV)</title>

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Bootstrap core CSS -->
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="/css/mdb.min.css" rel="stylesheet">

        <style>

            html,
            body,
            header,
            .jarallax {
                height: 700px;
            }

            @media (max-width: 740px) {
                html,
                body,
                header,
                .jarallax {
                    height: 100vh;
                }
            }

            @media (min-width: 800px) and (max-width: 850px) {
                html,
                body,
                header,
                .jarallax {
                    height: 100vh;
                }
            }

            @media (min-width: 560px) and (max-width: 650px) {
                header .jarallax h1 {
                    margin-bottom: .5rem !important;
                }

                header .jarallax h5 {
                    margin-bottom: .5rem !important;
                }
            }

            @media (min-width: 660px) and (max-width: 700px) {
                header .jarallax h1 {
                    margin-bottom: 1.5rem !important;
                }

                header .jarallax h5 {
                    margin-bottom: 1.5rem !important;
                }
            }

            .top-nav-collapse {
                background-color: #7283A7 !important;
            }

            .navbar:not(.top-nav-collapse) {
                background: transparent !important;
            }

            @media (max-width: 768px) {
                .navbar:not(.top-nav-collapse) {
                    background: #7283A7 !important;
                }
            }

            @media (min-width: 800px) and (max-width: 850px) {
                .navbar:not(.top-nav-collapse) {
                    background: #7283A7 !important;
                }
            }

            footer.page-footer {
                background-color: #383838;
            }

            @media (max-width: 450px) {
                .display-3 {
                    font-size: 3rem;
                }
            }

        </style>

    </head>

    <body>

    <!--Main Navigation-->
    <header>

        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <strong>Electronic Vaults - EV</strong>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7"
                        aria-controls="navbarSupportedContent-7"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Profile</a>
                        </li>
                    </ul>
                    <form class="form-inline">
                        <div class="md-form my-0">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                        </div>
                    </form>
                </div>
            </div>
        </nav>

        <!-- Intro Section -->
        <div class="view jarallax" data-jarallax='{"speed": 0.2}'
             style="background-image: url(/img/homepage.jpg); background-repeat: no-repeat; background-size: cover; background-position: center center;">
            <div class="mask rgba-white-light">
                <div class="container h-100 d-flex justify-content-center align-items-center">
                    <div class="row pt-5 mt-3">
                        <div class="col-md-12 mb-3">
                            <div class="intro-info-content text-center">
                                <h1 class="display-3 mb-5 wow fadeInDown" data-wow-delay="0.3s">NEW
                                    <a class="indigo-text font-weight-bold">COLLECTION</a>
                                </h1>
                                <h5 class="text-uppercase mb-5 mt-1 font-weight-bold wow fadeInDown" data-wow-delay="0.3s">
                                    Free delivery & special prices</h5>
                                <a class="btn btn-outline-indigo btn-lg wow fadeInDown" data-wow-delay="0.3s">Shop</a>
                                <a class="btn btn-indigo btn-lg wow fadeInDown" data-wow-delay="0.3s">Lookbook</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <!--Main Navigation-->


    <!--Main Layout-->
    <main>

        <div class="container">

            <!--Section: Products v.3-->
            <section class="section pb-3 wow fadeIn" data-wow-delay="0.3s">

                <!--Section heading-->
                <h1 class="font-weight-bold text-center h1 my-5">Our bestsellers</h1>
                <!--Section description-->
                <p class="text-center grey-text mb-5 mx-auto w-responsive">Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Fugit, error amet numquam iure provident voluptate esse
                    quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam.</p>

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4">

                        <!--Card-->
                        <div class="card card-ecommerce">

                            <!--Card image-->
                            <div class="view overlay z-depth-1">
                                <img src="/img/Alarms1.png" class="card-img-top" alt="">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <!--Card image-->

                            <!--Card content-->
                            <div class="card-body text-center no-padding">
                                <!--Category & Title-->
                                <a href="" class="text-muted">
                                    <h5>Alarms</h5>
                                </a>
                                <h4 class="card-title">
                                    <strong>
                                        <a href="">Blouse</a>
                                    </strong>
                                </h4>

                                <!--Description-->
                                <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor.
                                </p>

                                <!--Card footer-->
                                <div class="card-footer">
                      <span class="float-left">59$
                        <span class="discount">199$</span>
                      </span>
                                    <span class="float-right">
                        <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                          <i class="fa fa-heart"></i>
                        </a>
                      </span>
                                </div>

                            </div>
                            <!--Card content-->

                        </div>
                        <!--Card-->

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4">

                        <!--Card-->
                        <div class="card card-ecommerce">

                            <!--Card image-->
                            <div class="view overlay z-depth-1">
                                <img src="/img/Dedicated_Products1.png"
                                     class="card-img-top" alt="">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <!--Card image-->

                            <!--Card content-->
                            <div class="card-body text-center no-padding">
                                <!--Category & Title-->
                                <a href="" class="text-muted">
                                    <h5>Dedicated Products</h5>
                                </a>
                                <h4 class="card-title">
                                    <strong>
                                        <a href="">Accessories</a>
                                    </strong>
                                </h4>

                                <!--Description-->
                                <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor.
                                </p>

                                <!--Card footer-->
                                <div class="card-footer">
                      <span class="float-left">39$
                        <span class="discount">99$</span>
                      </span>
                                    <span class="float-right">
                        <a class="active" data-toggle="tooltip" data-placement="top" title="Added to Wishlist">
                          <i class="fa fa-heart"></i>
                        </a>
                      </span>
                                </div>

                            </div>
                            <!--Card content-->

                        </div>
                        <!--Card-->

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4">

                        <!--Card-->
                        <div class="card card-ecommerce">

                            <!--Card image-->
                            <div class="view overlay z-depth-1">
                                <img src="/img/Discountinued_Products.png"
                                     class="card-img-top" alt="">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <!--Card image-->

                            <!--Card content-->
                            <div class="card-body text-center no-padding">
                                <!--Category & Title-->
                                <a href="" class="text-muted">
                                    <h5>Discontinued Products</h5>
                                </a>
                                <h4 class="card-title">
                                    <strong>
                                        <a href="">Camera</a>
                                    </strong>
                                </h4>

                                <!--Description-->
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing minima.
                                </p>

                                <!--Card footer-->
                                <div class="card-footer">
                      <span class="float-left">79$
                        <span class="discount">299$</span>
                      </span>
                                    <span class="float-right">
                        <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                          <i class="fa fa-heart"></i>
                        </a>
                      </span>
                                </div>

                            </div>
                            <!--Card content-->

                        </div>
                        <!--Card-->

                    </div>
                    <!--Grid column-->

                    <!--Fourth column-->
                    <div class="col-lg-3 col-md-6 mb-4">

                        <!--Card-->
                        <div class="card card-ecommerce">

                            <!--Card image-->
                            <div class="view overlay z-depth-1">
                                <img src="/img/Machine_Vision1.png"
                                     class="card-img-top" alt="">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <!--Card image-->

                            <!--Card content-->
                            <div class="card-body text-center no-padding">
                                <!--Category & Title-->
                                <a href="" class="text-muted">
                                    <h5>Machine Vision</h5>
                                </a>
                                <h4 class="card-title">
                                    <strong>
                                        <a href="">Board Cameras</a>
                                    </strong>
                                </h4>

                                <!--Description-->
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing minima.
                                </p>

                                <!--Card footer-->
                                <div class="card-footer">
                      <span class="float-left">79$
                        <span class="discount">299$</span>
                      </span>
                                    <span class="float-right">
                        <a class="active" data-toggle="tooltip" data-placement="top" title="Added to Wishlist">
                          <i class="fa fa-heart"></i>
                        </a>
                      </span>
                                </div>

                            </div>
                            <!--Card content-->

                        </div>
                        <!--Card-->

                    </div>
                    <!--Fourth column-->

                </div>
                <!--Grid row-->

            </section>
            <!--Section: Products v.3-->

            <hr class="mb-5 mt-4">

            <!--Section: Products v.5-->
            <section class="section pb-3 wow fadeIn" data-wow-delay="0.3s">

                <!--Section heading-->
                <h1 class="font-weight-bold text-center h1 my-5">Last products</h1>
                <!--Section description-->
                <p class="text-center grey-text mb-5 mx-auto w-responsive">Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Fugit, error amet numquam iure provident voluptate esse
                    quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam.</p>

                <!--Carousel Wrapper-->
                <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

                    <!--Controls-->
                    <div class="controls-top">
                        <a class="btn-floating primary-color" href="#multi-item-example" data-slide="prev">
                            <i class="fa fa-chevron-left"></i>
                        </a>
                        <a class="btn-floating primary-color" href="#multi-item-example" data-slide="next">
                            <i class="fa fa-chevron-right"></i>
                        </a>
                    </div>
                    <!--Controls-->

                    <!--Indicators-->
                    <ol class="carousel-indicators">
                        <li class="primary-color" data-target="#multi-item-example" data-slide-to="0" class="active"></li>
                        <li class="primary-color" data-target="#multi-item-example" data-slide-to="1"></li>
                        {{--<li class="primary-color" data-target="#multi-item-example" data-slide-to="2"></li>--}}
                    </ol>
                    <!--Indicators-->

                    <!--Slides-->
                    <div class="carousel-inner" role="listbox">

                        <!--First slide-->
                        <div class="carousel-item active">

                            <div class="col-md-4">

                                <!--Card-->
                                <div class="card card-cascade narrower card-ecommerce">

                                    <!--Card image-->
                                    <div class="view view-cascade overlay">
                                        <img src="/img/EZ-IP.png"
                                             class="card-img-top" alt="">
                                        <a>
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                    <!--Card image-->

                                    <!--Card content-->
                                    <div class="card-body card-body-cascade text-center no-padding">
                                        <!--Category & Title-->
                                        <a href="" class="text-muted">
                                            <h5>EZ-IP</h5>
                                        </a>
                                        <h4 class="card-title">
                                            <strong>
                                                <a href="">Cameras</a>
                                            </strong>
                                        </h4>

                                        <!--Description-->
                                        <p class="card-text">Temporibus autem quibusdam et aut officiis debitis aut rerum
                                            necessitatibus saepe eveniet ut et voluptates.
                                        </p>

                                        <!--Card footer-->
                                        <div class="card-footer">
                                            <span class="float-left">69$</span>
                                            <span class="float-right">
                            <a class="" data-toggle="tooltip" data-placement="top" title="Quick Look">
                              <i class="fa fa-eye"></i>
                            </a>
                            <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                              <i class="fa fa-heart"></i>
                            </a>
                          </span>
                                        </div>

                                    </div>
                                    <!--Card content-->

                                </div>
                                <!--Card-->

                            </div>

                            <div class="col-md-4 clearfix d-none d-sm-block">

                                <!--Card-->
                                <div class="card card-cascade narrower card-ecommerce">

                                    <!--Card image-->
                                    <div class="view view-cascade overlay">
                                        <img src="/img/Network_Cameras.png"
                                             class="card-img-top" alt="">
                                        <a>
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                    <!--Card image-->

                                    <!--Card content-->
                                    <div class="card-body card-body-cascade text-center no-padding">
                                        <!--Category & Title-->
                                        <a href="" class="text-muted">
                                            <h5>Network Cameras</h5>
                                        </a>
                                        <h4 class="card-title">
                                            <strong>
                                                <a href="">Cameras</a>
                                            </strong>
                                        </h4>

                                        <!--Description-->
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing minima
                                            veniam elit. Nam incidunt eius est voluptatibus.
                                        </p>

                                        <!--Card footer-->
                                        <div class="card-footer">
                                            <span class="float-left">99$</span>
                                            <span class="float-right">
                            <a class="" data-toggle="tooltip" data-placement="top" title="Quick Look">
                              <i class="fa fa-eye"></i>
                            </a>
                            <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                              <i class="fa fa-heart"></i>
                            </a>
                          </span>
                                        </div>

                                    </div>
                                    <!--Card content-->

                                </div>
                                <!--Card-->

                            </div>

                            <div class="col-md-4 clearfix d-none d-sm-block">

                                <!--Card-->
                                <div class="card card-cascade narrower card-ecommerce">

                                    <!--Card image-->
                                    <div class="view view-cascade overlay">
                                        <img src="/img/Thermal_Cameras.png"
                                             class="card-img-top" alt="">
                                        <a>
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                    <!--Card image-->

                                    <!--Card content-->
                                    <div class="card-body card-body-cascade text-center no-padding">
                                        <!--Category & Title-->
                                        <a href="" class="text-muted">
                                            <h5>Thermal Cameras</h5>
                                        </a>
                                        <h4 class="card-title">
                                            <strong>
                                                <a href="">Cameras</a>
                                            </strong>
                                        </h4>

                                        <!--Description-->
                                        <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit
                                            amet, consectetur, adipisci velit, sed quia
                                            non.
                                        </p>

                                        <!--Card footer-->
                                        <div class="card-footer">
                                            <span class="float-left">49$</span>
                                            <span class="float-right">
                            <a class="" data-toggle="tooltip" data-placement="top" title="Quick Look">
                              <i class="fa fa-eye"></i>
                            </a>
                            <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                              <i class="fa fa-heart"></i>
                            </a>
                          </span>
                                        </div>

                                    </div>
                                    <!--Card content-->

                                </div>
                                <!--Card-->

                            </div>

                        </div>
                        <!--First slide-->

                        <!--Second slide-->
                        <div class="carousel-item">

                            <div class="col-md-4">

                                <!--Card-->
                                <div class="card card-cascade narrower card-ecommerce">

                                    <!--Card image-->
                                    <div class="view view-cascade overlay">
                                        <img src="/img/Video_Conferencing.png"
                                             class="card-img-top" alt="">
                                        <a>
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                    <!--Card image-->

                                    <!--Card content-->
                                    <div class="card-body card-body-cascade text-center no-padding">
                                        <!--Category & Title-->
                                        <a href="" class="text-muted">
                                            <h5>Video Conferencing</h5>
                                        </a>
                                        <h4 class="card-title">
                                            <strong>
                                                <a href="">Accessories</a>
                                            </strong>
                                        </h4>

                                        <!--Description-->
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing minima
                                            veniam elit. Nam incidunt eius est voluptatibus.
                                        </p>

                                        <!--Card footer-->
                                        <div class="card-footer">
                                            <span class="float-left">39$</span>
                                            <span class="float-right">
                            <a class="" data-toggle="tooltip" data-placement="top" title="Quick Look">
                              <i class="fa fa-eye"></i>
                            </a>
                            <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                              <i class="fa fa-heart"></i>
                            </a>
                          </span>
                                        </div>

                                    </div>
                                    <!--Card content-->

                                </div>
                                <!--Card-->

                            </div>

                            <div class="col-md-4 clearfix d-none d-sm-block">

                                <!--Card-->
                                <div class="card card-cascade narrower card-ecommerce">

                                    <!--Card image-->
                                    <div class="view view-cascade overlay">
                                        <img src="/img/Video_Intercom.png"
                                             class="card-img-top" alt="">
                                        <a>
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                    <!--Card image-->

                                    <!--Card content-->
                                    <div class="card-body card-body-cascade text-center no-padding">
                                        <!--Category & Title-->
                                        <a href="" class="text-muted">
                                            <h5>Video Intercom</h5>
                                        </a>
                                        <h4 class="card-title">
                                            <strong>
                                                <a href="">Accessories</a>
                                            </strong>
                                        </h4>

                                        <!--Description-->
                                        <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit
                                            amet, consectetur, adipisci velit, sed quia
                                            non.
                                        </p>

                                        <!--Card footer-->
                                        <div class="card-footer">
                                            <span class="float-left">79$</span>
                                            <span class="float-right">
                            <a class="" data-toggle="tooltip" data-placement="top" title="Quick Look">
                              <i class="fa fa-eye"></i>
                            </a>
                            <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                              <i class="fa fa-heart"></i>
                            </a>
                          </span>
                                        </div>

                                    </div>
                                    <!--Card content-->

                                </div>
                                <!--Card-->

                            </div>

                            <div class="col-md-4 clearfix d-none d-sm-block">

                                <!--Card-->
                                <div class="card card-cascade narrower card-ecommerce">

                                    <!--Card image-->
                                    <div class="view view-cascade overlay">
                                        <img src="/img/AI3.png"
                                             class="card-img-top" alt="">
                                        <a>
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                    <!--Card image-->

                                    <!--Card content-->
                                    <div class="card-body card-body-cascade text-center no-padding">
                                        <!--Category & Title-->
                                        <a href="" class="text-muted">
                                            <h5>Artificial Intelligence</h5>
                                        </a>
                                        <h4 class="card-title">
                                            <strong>
                                                <a href="">Accessories</a>
                                            </strong>
                                        </h4>

                                        <!--Description-->
                                        <p class="card-text">Temporibus autem quibusdam et aut officiis debitis aut rerum
                                            necessitatibus saepe eveniet ut et voluptates.
                                        </p>

                                        <!--Card footer-->
                                        <div class="card-footer">
                                            <span class="float-left">149$</span>
                                            <span class="float-right">
                            <a class="" data-toggle="tooltip" data-placement="top" title="Quick Look">
                              <i class="fa fa-eye"></i>
                            </a>
                            <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                              <i class="fa fa-heart"></i>
                            </a>
                          </span>
                                        </div>

                                    </div>
                                    <!--Card content-->

                                </div>
                                <!--Card-->

                            </div>

                        </div>
                        <!--Second slide-->

                    </div>
                    <!--Slides-->

                </div>
                <!--Carousel Wrapper-->

            </section>
            <!--Section: Products v.5-->

        </div>

        <!-- Streak Section -->
        <div class="streak streak-photo" style="background-image:url('/img/WWDC18.jpg')">

            <div class="flex-center white-text pattern-1" style="background-attachment: f">
                <ul class="list-unstyled">
                    <li>
                        <h1 class=" white-text">
                            <strong>500+</strong> happy customers</h1>
                    </li>

                </ul>
            </div>

        </div>
        <!-- /.Streak Section -->

        <div class="container">

            <!--Projects section v.4-->
            <section class="text-center pb-5 wow fadeIn">

                <!--Section heading-->
                <h2 class="font-weight-bold text-center h1 my-5">Other Section Here</h2>
                <!--Section description-->
                <p class="text-center grey-text mb-5 mx-auto w-responsive">Duis aute irure dolor in reprehenderit in
                    voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                    sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12 mb-4">
                        something here
                    </div>

            </section>
            <!--Projects section v.4-->

        </div>

    </main>
    <!--Main Layout-->

    <footer class="page-footer text-center text-md-left stylish-color-dark pt-0">

        <div style="background-color: #4285f4;">
            <div class="container">
                <!--Grid row-->
                <div class="row py-4 d-flex align-items-center">

                    <!--Grid column-->
                    <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                        <h6 class="mb-0 white-text">Get connected with us on social networks!</h6>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6 col-lg-7 text-center text-md-right">
                        <!--Facebook-->
                        <a class="fb-ic ml-0 px-2">
                            <i class="fa fa-facebook white-text"> </i>
                        </a>
                        <!--Twitter-->
                        <a class="tw-ic px-2">
                            <i class="fa fa-twitter white-text"> </i>
                        </a>
                        <!--Google +-->
                        <a class="gplus-ic px-2">
                            <i class="fa fa-google-plus white-text"> </i>
                        </a>
                        <!--Linkedin-->
                        <a class="li-ic px-2">
                            <i class="fa fa-linkedin white-text"> </i>
                        </a>
                        <!--Instagram-->
                        <a class="ins-ic px-2">
                            <i class="fa fa-instagram white-text"> </i>
                        </a>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </div>
        </div>

        <!--Footer Links-->
        <div class="container mt-5 mb-4 text-center text-md-left">
            <div class="row mt-3">

                <!--First column-->
                <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
                    <h6 class="text-uppercase font-weight-bold">
                        <strong>Electronic Vaults - EV</strong>
                    </h6>
                    <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit amet,
                        consectetur
                        adipisicing elit.</p>
                </div>
                <!--/.First column-->

                <!--Second column-->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">
                        <strong>Products</strong>
                    </h6>
                    <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a href="#!">link</a>
                    </p>
                    <p>
                        <a href="#!">link</a>
                    </p>
                    <p>
                        <a href="#!">link</a>
                    </p>
                    <p>
                        <a href="#!">link</a>
                    </p>
                </div>
                <!--/.Second column-->

                <!--Third column-->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">
                        <strong>Useful links</strong>
                    </h6>
                    <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a href="#!">Your Account</a>
                    </p>
                    <p>
                        <a href="#!">Become an Affiliate</a>
                    </p>
                    <p>
                        <a href="#!">Shipping Rates</a>
                    </p>
                    <p>
                        <a href="#!">Help</a>
                    </p>
                </div>
                <!--/.Third column-->

                <!--Fourth column-->
                <div class="col-md-4 col-lg-3 col-xl-3">
                    <h6 class="text-uppercase font-weight-bold">
                        <strong>Contact</strong>
                    </h6>
                    <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <i class="fa fa-home mr-3"></i> New York, NY 10012, US</p>
                    <p>
                        <i class="fa fa-envelope mr-3"></i> info@example.com</p>
                    <p>
                        <i class="fa fa-phone mr-3"></i> + 01 234 567 88</p>
                    <p>
                        <i class="fa fa-print mr-3"></i> + 01 234 567 89</p>
                </div>
                <!--/.Fourth column-->

            </div>
        </div>
        <!--/.Footer Links-->

        <!-- Copyright-->
        <div class="footer-copyright py-3 text-center">
            <div class="container-fluid">
                &copy; {{ $current_year->year  }} Copyright:
                <a href="https://evaclerm.com"> Evaclerm </a> - Designed By @euclimauro
            </div>
        </div>
        <!--/.Copyright -->

    </footer>
    <!--/.Footer-->


    <!--  SCRIPTS  -->
    <!-- JQuery -->
    <script type="text/javascript" src="/js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="/js/mdb.min.js"></script>
    <script>
        new WOW().init();
    </script>
</body>

</html>