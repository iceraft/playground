<?php $__env->startSection('content'); ?>


<!--       <div class="page-header header-filter" data-parallax="true">
        <div class="container">
          <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
              <div class="brand text-center">
                <h1>Your title here</h1>
                <h3 class="title text-center">Subtitle</h3>
              </div>
            </div>
          </div>
        </div>
      </div> -->
     
     <!-- Carousel Start -->
      <div id="carousel">
      <div class="container-fluid">
     <!--    <div class="row"> -->
          <div class="col-lg-12 mr-auto ml-auto">
            <!-- Carousel Card -->
            <div class="card card-raised card-carousel">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
<!--                 <div class="brand text-center">
                  <h1>Starting events</h1>
                  <h3 class="title text-center">x Nampak sial</h3>
                </div> -->
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="<?php echo e(asset('material-kit-html-v2.0.4/assets/img/bg2.jpg')); ?>" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h4>
                        <i class="material-icons">location_on</i> Yellowstone National Park, United States
                      </h4>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="<?php echo e(asset('material-kit-html-v2.0.4/assets/img/bg3.jpg')); ?>" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h4>
                        <i class="material-icons">location_on</i> Somewhere Beyond, United States
                      </h4>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="<?php echo e(asset('material-kit-html-v2.0.4/assets/img/bg.jpg')); ?>" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h4>
                        <i class="material-icons">location_on</i> Yellowstone National Park, United States
                      </h4>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <i class="material-icons">keyboard_arrow_left</i>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <i class="material-icons">keyboard_arrow_right</i>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
            <!-- End Carousel Card -->
          </div>
      <!--   </div> -->
      </div>
    </div>
    <!--         end carousel -->

      <div class="main">
        <!--search navbar -->
        <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container">
              <div class="navbar-translate">
                <p class="navbar-brand" href="#0">Search for Events now</p>
                <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="navbar-toggler-icon"></span>
                  <span class="navbar-toggler-icon"></span>
                  <span class="navbar-toggler-icon"></span>
                </button> -->
              </div>
              <div class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="dropdown nav-item">
                      <a href="#pablo" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        Catergories
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="#pablo" class="dropdown-item">Gig</a>
                        <a href="#pablo" class="dropdown-item">Talk</a>
                        <a href="#pablo" class="dropdown-item">Niger</a>
                        <div class="dropdown-divider"></div>
                        <h6 class="dropdown-header">Sub Categories</h6>
                        <a href="#pablo" class="dropdown-item">Aniger</a>
                        <a href="#pablo" class="dropdown-item">Anigger</a>
                      </div>
                    </li>
                  </ul>
                  <form class="form-inline ml-auto">
                  <div class="form-group has-white">
                    <input type="text" class="form-control" placeholder="Search">
                  </div>
                  <button type="submit" class="btn btn-white btn-raised btn-fab btn-round">
                    <i class="material-icons">search</i>
                  </button>
                </form>
              </div>
            </div>
          </nav>
          <!--        end search navbar -->
        <div class="container">
          <div class="section text-center">
            <h2 class="title">Your main section here</h2>
            <p>more content</p>
            <p>more content</p>
            <p>more content</p>
            <p>more content</p>
            <p>more content</p>
            <p>more content</p>
            <p>more content</p>
            <p>more content</p>
            <p>more content</p>
            <p>more content</p>
            <p>more content</p>
            <p>more content</p>
            <p>more content</p>
            <p>more content</p>
          </div>
        </div>
      </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('myLayouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>