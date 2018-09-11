<?php include('partials/head.php'); ?>

<body id="ekologiskumas">
    <!-- start of #home-page -->

    <?php include('partials/navigation-white.php'); ?>

    <main>

        <section class="section section-wide">
            <div class="section-image" style="background-image:url('img/rectangle-copy.jpg');">
            </div>
            <div class="section-text">
                <h1>
                    Ekologiskumas
                    <div class="shape shape-circle shape-circle-1 paroller shape-horizontal"></div>
                </h1>
                <p>The collapse of the online-advertising market in 2001 made marketing on the Internet seem even less compelling. Website usability, press releases, online media buys, podcasts, mobile marketing and more.</p>
            </div>
        </section>

        <section class="section pt-0 pb-2">
            <div class="container">
                <div class="row text-center">
                    <div class="col-sm-6 col-md-3">
                        <div class="shape shape-orbit"></div>
                        <h4>Agriculture</h4>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="shape shape-orbit"></div>
                        <h4>Agriculture</h4>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="shape shape-orbit"></div>
                        <h4>Building & construction</h4>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="shape shape-orbit"></div>
                        <h4>Agriculture</h4>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="shape shape-oval shape-oval-1 paroller shape-vertical"></div>
            <div class="container">
                <div class="row pb-3 text-center">
                    <div class="col-12">
                        <h2>Sertifikatai</h2>
                    </div>
                </div>
                <div id="card-download" class="slick-download row text-center">
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="card card-download">
                                <img src="img/group-7-copy.svg" alt="">
                                <h5>EASA UK Part 145</h5>
                                <p>Issued by the United Kingdom’s Civil Aviation Authority</p>
                                <a href="#" class="btn btn-primary">Atsisiųsti</a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="card card-download">
                                <img src="img/group-7-copy.svg" alt="">
                                <h5>EASA UK Part 145</h5>
                                <p>Issued by the United Kingdom’s Civil Aviation Authority</p>
                                <a href="#" class="btn btn-primary">Atsisiųsti</a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="card card-download">
                                <img src="img/group-7-copy.svg" alt="">
                                <h5>EASA UK Part 145</h5>
                                <p>Issued by the United Kingdom’s Civil Aviation Authority</p>
                                <a href="#" class="btn btn-primary">Atsisiųsti</a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="card card-download">
                                <img src="img/group-7-copy.svg" alt="">
                                <h5>EASA UK Part 145</h5>
                                <p>Issued by the United Kingdom’s Civil Aviation Authority</p>
                                <a href="#" class="btn btn-primary">Atsisiųsti</a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="card card-download">
                                <img src="img/group-7-copy.svg" alt="">
                                <h5>EASA UK Part 145</h5>
                                <p>Issued by the United Kingdom’s Civil Aviation Authority</p>
                                <a href="#" class="btn btn-primary">Atsisiųsti</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape shape-oval-green shape-oval-2 paroller shape-vertical"></div>
        </section>



        <script type="text/javascript">
            $(document).ready(function(){
                $('#card-download').slick({
                    slidesToShow: 3,
                    dots: false,
                    responsive: [
                       {
                         breakpoint: 1024,
                         settings: {
                           slidesToShow: 2,
                           slidesToScroll: 2,
                         }
                       },
                       {
                         breakpoint: 600,
                         settings: {
                           slidesToShow: 1,
                           slidesToScroll: 1
                         }
                       },
                       {
                         breakpoint: 480,
                         settings: {
                           slidesToShow: 1,
                           slidesToScroll: 1
                         }
                       }
                     ]
                });
            });
        </script>

    </main>

<?php include('partials/footer.php') ?>
