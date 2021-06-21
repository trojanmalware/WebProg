<?= $this->extend('Layout/template'); ?>
<?= $this->extend('Layout/navbar'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="/img/fotodosen/<?= $staff['foto']; ?>" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $staff['Name']; ?></h5>
                            <p class="card-text"><?= $staff['Title']; ?></p>
                            <p class="card-text"><?= $staff['Education']; ?></p>
                            <p class="card-text"><?= $staff['Department']; ?></p>
                            <p class="card-text"><?= $staff['Contact']; ?></p>
                            <p class="card-text"><?= $staff['Disciplines']; ?></p>
                            <p class="card-text"><?= $staff['Research Interest']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>