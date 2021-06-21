<?= $this->extend('Layout/template'); ?>

<?= $this->section('navbar'); ?>

<!-- Top page logo uph -->
<div class="container-fluid" style="background-color:darkorange">
    <div class="row">
        <img src="/img/LOGOUPH.png" width="600" height="100" alt="">
    </div>
</div>
<!-- Navbar 2-->
<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
    <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapse_target">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="/Home/index" class="nav-link">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown1">About</a>
                <div class="dropdown-menu" aria-labelledby="dropdown1">
                    <a href="/Pages/Sistech" class="dropdown-item">What is SISTECH?</a>
                    <a href="/Pages/OurPeople" class="dropdown-item">Our People</a>
                    <a href="/Pages/History" class="dropdown-item">History</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown2">Programs</a>
                <div class="dropdown-menu" aria-labelledby="dropdown2">
                    <a href="/Pages/Informatics" class="dropdown-item">Informatics</a>
                    <a href="/Pages/SI" class="dropdown-item">Information System</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown3">Gallery</a>
                <div class="dropdown-menu" aria-labelledby="dropdown3">
                    <a href="/Pages/Photos" class="dropdown-item">Photos</a>
                    <a href="/Pages/Videos" class="dropdown-item">Videos</a>
                </div>
            </li>
            <li class="nav-item">
                <a href="/Pages/VirtualTour" class="nav-link">Virtual Tour</a>
            </li>
        </ul>
    </div>
</nav>

<?= $this->endSection(); ?>