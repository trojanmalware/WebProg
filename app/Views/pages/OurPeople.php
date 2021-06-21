<?= $this->extend('Layout/template'); ?>
<?= $this->extend('Layout/navbar'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row" style="background-color:orange;">
        <div class="col">
            <h1>Our People in SISTECH</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Number</th>
                        <th scope="col">Photos</th>
                        <th scope="col">Name</th>
                        <th scope="col">Details</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($staff as $s) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><img src="/img/fotodosen/<?= $s['foto']; ?>" alt="" style="width:128px; height:128px;"></td>
                            <td><?= $s['Name']; ?></td>
                            <td><a href="/Pages/Details/<?= $s['slug']; ?>" class="btn btn-primary">Details</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>