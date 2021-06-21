<?= $this->extend('Layout/template'); ?>
<?= $this->extend('Layout/navbar'); ?>

<?= $this->section('content'); ?>
<!-- Carousel -->
<div id="carouselHomepage" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselHomepage" data-slide-to="0" class="active"></li>
        <li data-target="#carouselHomepage" data-slide-to="1"></li>
        <li data-target="#carouselHomepage" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/img/gedungUPH1.jpg" height="800" class="d-block w-100" alt="">
            <div class="carousel-caption d-none d-md-block">
                <h1>Welcome To SISTECH UPH!</h1>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/img/makrab1.JPG" height="800" class="d-block w-100" alt="">
            <div class="carousel-caption d-none d-md-block">
                <h1 style="color:beige;">Our Events!</h1>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/img/welpar1.JPG" height="800" class="d-block w-100" alt="">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="text-dark">Our Community!</h1>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselHomepage" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselHomepage" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- End Carousel -->
<!-- HomePage content -->
<div class="container-fluid">
    <div class="row">
        <div class="col" style="background-color:orange;">
            <h1>Explore SISTECH!</h1>
        </div>
    </div>
</div>
<div class="container-fluid py-3">
    <div class="card text-center">
        <h5 class="card-header" style="background-color: orange;">Find Out About Us!</h5>
        <div class="card-body" style="background-size:cover;">
            <a href="/Pages/Sistech" class="btn btn-block my-2" style="background-color:orange;">About Us!</a>
            <a href="/Pages/VirtualTour" class="btn btn-block my-2" style="background-color:orange;">Our Campus!</a>
            <a href="/Pages/Photos" class="btn btn-block my-2" style="background-color:orange;">What We Do!</a>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>