<?= $this->extend('Layout/template'); ?>
<?= $this->extend('Layout/navbar'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid d-flex justify-content-center flex-column" style='background-image:url("/img/gedungUPH1blur.jpg"); min-height:100vh; background-size:cover;'>
    <div class="row">
        <div class="col mb-1 text-center">
            <h1>See Our Campus Here!</h1>
        </div>
    </div>
    <div class="row">
        <div class="col text-center mt-1">
            <a href="http://indonesiain360.com/virtualtours/uphlippo/003/"><button type="button" class="btn btn-outline-dark">Virtual Tour</button></a>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>