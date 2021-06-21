<?= $this->extend('Layout/template'); ?>
<?= $this->extend('Layout/navbar'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid" style='background-image:url("/img/gedungUPH1blur.jpg"); background-size:cover;'>
    <div class="row ">
        <div class="col text-center">
            <h2>See our annual event!</h2>
            <a href="https://www.youtube.com/watch?v=zpm_YVoQMOo"><img src="/img/logofp9.png" alt="" style="width: 600px; height: 300"></a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 text-center">
            <h4>Informatics Academics Showcase!</h4>
            <a href="https://www.youtube.com/watch?v=jW8b0CaFqM8"><img src="/img/logohmtif.png" alt="" style="width: 200px; height: 200px"></a>
        </div>
        <div class="col-md-6 text-center">
            <h4>Information Systems Academics Showcase!</h4>
            <a href="https://www.youtube.com/watch?v=k7BNH1SBBOc"><img src="/img/logohmpssi.png" alt="" style="width: 200px; height: 200px"></a>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>