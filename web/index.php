<!DOCTYPE html>
<html lang="en" class="full-height">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <title>Rumah Santri Indonesia</title>

        <?php include('./web/template/preInit.php'); ?>
        <link rel="stylesheet" href="assets/css/home-style.css">
    </head>

    <body>
        <header>
            <?php include('./web/template/navigation.php'); ?>

            <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                    <li data-target="#carousel" data-slide-to="2"></li>
                    <li data-target="#carousel" data-slide-to="3"></li>
                </ol>

                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="view">
                            <img class="d-block w-100" src="<?php echo $f->url('/data/public/images/preview/01.jpg') ?>" alt="First slide">
                        </div>
                        <div class="carousel-caption">
                            <h3 class="h3-responsive">First title</h3>
                            <p>First text</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="view">
                            <img class="d-block w-100" src="<?php echo $f->url('/data/public/images/preview/02.jpg') ?>" alt="Second slide">
                        </div>
                        <div class="carousel-caption">
                            <h3 class="h3-responsive">Second title</h3>
                            <p>Second text</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="view">
                            <img class="d-block w-100" src="<?php echo $f->url('/data/public/images/preview/03.jpg') ?>" alt="Third slide">
                        </div>
                        <div class="carousel-caption">
                            <h3 class="h3-responsive">Third title</h3>
                            <p>Third text</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="view">
                            <img class="d-block w-100" src="<?php echo $f->url('/data/public/images/preview/04.jpg') ?>" alt="Fourth slide">
                        </div>
                        <div class="carousel-caption">
                            <h3 class="h3-responsive">Fourth title</h3>
                            <p>Fourth text</p>
                        </div>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="false"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </header>

        <main class="text-center py-5">
            <div class="container">
                <section class="mt-4 text-center">
                    <section class="mt-4">
                        <div class="row">
                            <div class="col-md-12">
                                <p align="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                    voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                    enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                    nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                    mollit anim id est laborum.</p>
                            </div>
                        </div>
                        <div class="row card-deck">
                            <div class="card card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2814%29.jpg);">
                                <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                                    <div>
                                        <h3 class="card-title pt-2"><strong>This is card title</strong></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat, laboriosam, voluptatem,
                                            optio vero odio nam sit officia accusamus minus error nisi architecto nulla ipsum dignissimos.
                                            Odit sed qui, dolorum!.</p>
                                        <a class="btn btn-pink"><i class="fa fa-clone left"></i> View project</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2814%29.jpg);">
                                <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                                    <div>
                                        <h3 class="card-title pt-2"><strong>This is card title</strong></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat, laboriosam, voluptatem,
                                            optio vero odio nam sit officia accusamus minus error nisi architecto nulla ipsum dignissimos.
                                            Odit sed qui, dolorum!.</p>
                                        <a class="btn btn-pink"><i class="fa fa-clone left"></i> View project</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2814%29.jpg);">
                                <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                                    <div>
                                        <h3 class="card-title pt-2"><strong>This is card title</strong></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat, laboriosam, voluptatem,
                                            optio vero odio nam sit officia accusamus minus error nisi architecto nulla ipsum dignissimos.
                                            Odit sed qui, dolorum!.</p>
                                        <a class="btn btn-pink"><i class="fa fa-clone left"></i> View project</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </section>

                <hr>

                <section class="mt-4 text-center">
                    <section class="mt-4">
                        <h5 class="my-4">Mitra kami:</h5>
                        <div id="partners-carousel" class="carousel slide" data-ride="carousel" data-interval="1800">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 text-center
                                             align-items-center justify-content-center">
                                            <img src="https://mdbootstrap.com/img/logo/brands/nike.png" class="img-fluid px-4" alt="Nike - logo" style="max-height: 40px">
                                        </div>
                                        <div class="col-lg-3 col-md-6 text-center align-items-center justify-content-center">
                                            <img src="https://mdbootstrap.com/img/logo/brands/amazon.png" class="img-fluid px-4" alt="Amazon - logo" style="max-height: 40px">
                                        </div>
                                        <div class="col-lg-3 col-md-6 text-center align-items-center justify-content-center">
                                            <img src="https://mdbootstrap.com/img/logo/brands/sony.png" class="img-fluid px-4" alt="Sony - logo" style="max-height: 40px">
                                        </div>
                                        <div class="col-lg-3 col-md-6 text-center align-items-center justify-content-center">
                                            <img src="https://mdbootstrap.com/img/logo/brands/samsung.png" class="img-fluid px-4" alt="Samsung - logo" style="max-height: 40px">
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 text-center align-items-center justify-content-center">
                                            <img src="https://mdbootstrap.com/img/logo/brands/airbus.png" class="img-fluid px-4" alt="Airbus - logo" style="max-height: 40px">
                                        </div>
                                        <div class="col-lg-3 col-md-6 text-center align-items-center justify-content-center">
                                            <img src="https://mdbootstrap.com/img/logo/brands/yahoo.png" class="img-fluid px-4" alt="Yahoo - logo" style="max-height: 40px">
                                        </div>
                                        <div class="col-lg-3 col-md-6 text-center align-items-center justify-content-center">
                                            <img src="https://mdbootstrap.com/img/logo/brands/deloitte.png" class="img-fluid px-4" alt="Deloitte - logo" style="max-height: 40px">
                                        </div>
                                        <div class="col-lg-3 col-md-6 text-center align-items-center justify-content-center">
                                            <img src="https://mdbootstrap.com/img/logo/brands/ge.png" class="img-fluid px-4" alt="GE - logo" style="max-height: 40px">
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 text-center align-items-center justify-content-center">
                                            <img src="https://mdbootstrap.com/img/logo/brands/kpmg.png" class="img-fluid px-4" alt="KPMG - logo" style="max-height: 40px">
                                        </div>
                                        <div class="col-lg-3 col-md-6 text-center align-items-center justify-content-center">
                                            <img src="https://mdbootstrap.com/img/logo/brands/unity.png" class="img-fluid px-4" alt="Unity - logo" style="max-height: 40px">
                                        </div>
                                        <div class="col-lg-3 col-md-6 text-center align-items-center justify-content-center">
                                            <img src="https://mdbootstrap.com/img/logo/brands/ikea.png" class="img-fluid px-4" alt="Ikea - logo" style="max-height: 40px">
                                        </div>
                                        <div class="col-lg-3 col-md-6 text-center align-items-center justify-content-center">
                                            <img src="https://mdbootstrap.com/img/logo/brands/aegon.png" class="img-fluid px-4" alt="Aegon - logo" style="max-height: 40px">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <ol class="carousel-indicators mt-4">
                                <li data-target="#partners-carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#partners-carousel" data-slide-to="1"></li>
                                <li data-target="#partners-carousel" data-slide-to="2"></li>
                            </ol>

                            <a class="carousel-control-prev" href="#partners-carousel" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="false"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#partners-carousel" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </section>
                </section>
            </div>
        </main>

        <?php include('./web/template/footer.php'); ?>

        <?php include('./web/template/postInit.php'); ?>
    </body>

</html>
