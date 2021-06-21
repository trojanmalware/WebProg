<?= $this->extend('Layout/template'); ?>
<?= $this->extend('Layout/navbar'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid" style="background-image:url(/img/falcon1.JPG); background-size:cover;">
    <div class="row">
        <div class="col text-center text-light">
            <h1 class="photosText" style="color:beige">See Our Faculty Events!</h1>
        </div>
    </div>
    <div class="container-fluid  d-flex justify-content-center flex-row">
        <div class="row">
            <div class="col-md-3 mx-3 my-3">
                <div class="card" style="width: 18rem;">
                    <img src="/img/falcon9.JPG" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Falcon Project 9!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mx-3 my-3">
                <div class="card" style="width: 18rem;">
                    <img src="/img/iCore1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">I-Core 2019!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mx-3 my-3">
                <div class="card" style="width: 18rem; height: 15.9rem;">
                    <img src="/img/makrab1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Malam Keakraban Informatics 2019!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid  d-flex justify-content-center flex-row">
        <div class="row">
            <div class="col-md-3 mx-3 my-3">
                <div class="card" style="width: 18rem;">
                    <img src="/img/makrab2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Malam Keakraban Informatics 2018!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mx-3 my-3">
                <div class="card" style="width: 18rem;">
                    <img src="/img/seminar1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Data Security Seminar!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mx-3 my-3">
                <div class="card" style="width: 18rem; height: 15.9rem;">
                    <img src="/img/welpar1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Welcoming Party Scene!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>