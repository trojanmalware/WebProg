<?= $this->extend('Layout/template'); ?>
<?= $this->extend('Layout/navbar'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid d-flex justify-content-center" style='background-image:url("/img/gedungUPH1blur.jpg"); min-height:100vh; background-size:cover;'>
    <div class="row">
        <div class="col text-center text-light" style="margin-top:100px;">
            <div class="container" style="background-color:black; opacity:60%;">
                <h1>What is SISTech?</h1>
                <p class="text-left">
                    The use of information and communication technology (ICT) in human life has become indispensable. Through an effective use of ICT, it is possible to streamline business processes to gain competitive advantage, integrate data and systems across multiple platform and networks, and even interact socially with others.
                </p>
                <p class="text-left">
                    UPH School of Information Science and Technology is built under strong and innovative curriculum which enables students to study the most recent developments in computer science. The faculty offers degrees in
                </p>
                <p class="text-left">
                    Informatics which focuses on:
                </p>
                <ul class="text-left">
                    <li>Software Engineering</li>
                    <li>Medical Informatics</li>
                    <li>Intelligent & Interactive Applications (Game Programming)</li>
                </ul>
                <p class="text-left">
                    Information Systems which focuses on:
                </p>
                <ul class="text-left">
                    <li>Business Information Systems</li>
                    <li>Web and Mobile Development</li>
                </ul>
                <p class="text-left">
                    Lectures are conducted under guidance of distinguished professors and professionals, all holding master and doctoral degrees from various national and international universities.
                </p>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>