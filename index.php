<?php include('partials/head.php'); ?>

<body id="home">
    <!-- start of #home-page -->

    <?php include('partials/navigation.php'); ?>

    <main>

        <section class="section section-narrow">
            <div class="section-image" style="background-image:url('img/rectangle.jpg');">

            </div>
            <div class="section-text">
                <h1>
                    Pasitikėjimą kuriame greitai reaguodami
                </h1>
                <h4 class="sub-title sub-title-primary mr-auto">net į smulkiausius jūsų poreikius</h4>
            </div>
        </section>

        <div class="section-bird-1">

        </div>

        <div class="jumbotron mb-0">
          <div class="shape shape-oval paroller shape-vertical"></div>
          <div class="container">
              <h2>Apie mus</h2>
              <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
          </div>
          <div class="jumbotron-media" style="background-image:url('img/rectangle-7.jpg');">

          </div>
          <div class="shape shape-circle paroller shape-circle-1 shape-horizontal"></div>
          <div class="shape shape-circle paroller shape-circle-2 shape-horizontal"></div>
        </div>

        <section class="section section-shadow">
            <div class="section-bird-2">

            </div>
            <div class="container">
                <div class="row pb-2">
                    <div class="col-12 text-center">
                        <h2>Veikla</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="card card-simple text-center">
                          <img class="card-img-top rounded-circle pb-1" src="img/oval-2.jpg" alt="Card image cap">
                          <div class="card-body">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-link btn-link-hoverable">Go somewhere</a>
                          </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="card card-simple text-center">
                          <img class="card-img-top rounded-circle pb-1" src="img/oval-2-copy.jpg" alt="Card image cap">
                          <div class="card-body">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-link btn-link-hoverable">Go somewhere</a>
                          </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4">
                        <div class="card card-simple text-center">
                          <img class="card-img-top rounded-circle pb-1" src="img/oval-2-copy.jpg" alt="Card image cap">
                          <div class="card-body">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-link btn-link-hoverable">Go somewhere</a>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-carousel">

            <div class="container">
                <div class="row text-center pb-lg-2">
                    <div class="col-12">
                        <h2>Kodėl mus renkasi</h2>
                    </div>
                </div>
                <div class="row pb-2">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                      </ol>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <div class="carousel-image" style="background-image:url('img/rectangle-11.jpg');"></div>
                          <div class="carousel-text">
                              <h4>Greitis ir lankstumas</h4>
                              <p>The collapse of the online-advertising market in 2001 made marketing on the Internet seem even less compelling. Website usability, press releases, online media buys, podcasts, mobile marketing and more.</p>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <div class="carousel-image" style="background-image:url('img/rectangle-11.jpg');"></div>
                          <div class="carousel-text">
                              <h4>Greitis ir lankstumas</h4>
                              <p>The collapse of the online-advertising market in 2001 made marketing on the Internet seem even less compelling. Website usability, press releases, online media buys, podcasts, mobile marketing and more.</p>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <div class="carousel-image" style="background-image:url('img/rectangle-11.jpg');"></div>
                          <div class="carousel-text">
                              <h4>Greitis ir lankstumas</h4>
                              <p>The collapse of the online-advertising market in 2001 made marketing on the Internet seem even less compelling. Website usability, press releases, online media buys, podcasts, mobile marketing and more.</p>
                          </div>
                        </div>
                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                </div>
            </div>
        </section>

        <?php include('partials/cta.php'); ?>

    </main>

<?php include('partials/footer.php') ?>
