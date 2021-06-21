<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <title><?= $title; ?></title>
</head>

<body style="overflow-x:hidden;">
    <?= $this->renderSection('navbar'); ?>

    <!--  content section-->
    <?= $this->renderSection('content'); ?>

    <!-- footer section -->
    <footer class="page-footer" style="background-color:darkorange">

        <div class="bg-dark">
            <div class="container">
                <div class="row py-4 d-flex align-items-center">
                    <div class="col-md-12 text-center">
                        <a href="https://www.facebook.com/UPHImpactlives/"><i class="fab fa-facebook text-white mr-4"></i></a>
                        <a href="https://twitter.com/uphimpactslives?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i class="fab fa-twitter text-white mr-4"></i></a>
                        <a href="https://www.linkedin.com/school/universitas-pelita-harapan-main-campus/"><i class="fab fa-linkedin text-white mr-4"></i></a>
                        <a href="https://www.instagram.com/uphimpactslives/"><i class="fab fa-instagram text-white mr-4"></i></a>
                    </div>
                </div>
            </div>
        </div>


        <div class="container text-center text-md-left mt-5">
            <div class="row">
                <div class="col-md-5 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">Universitas Pelita Harapan</h6>
                    <hr class="bg-dark mb-4 mt-0 d-inline-block mx-auto" style="width: 235px; height: 2px">
                    <h5 class="mt-2"><b>Visi</b> </h5>
                    <p class="mt-2">Menjadi Universitas yang berpusat pada Kristus, yang dibangun dan dikembangkan di atas dasar pengetahuan sejati, iman dalam Kristus, dan karakter ilahi, dengan tujuan menghasilkan pemimpin masa depan yang takut akan Tuhan, kompeten, dan profesional melalui pendidikan yang unggul, holistis dan transformasional.</p>
                    <h5 class="mt-2"><b>Misi</b> </h5>
                    <ul class="mt-2">
                        <li>Menyelenggarakan pendidikan transformasional yang holistis yang berakar dari Alkitab dan kerangka teologis Reformed;</li>
                        <li>Berkontribusi pada kemajuan ilmu pengetahuan dan kebudayaan yang dipimpin oleh wawasan dunia Kristen yang alkitabiah;</li>
                        <li>Berpartisipasi secara redemtif dalam pengembangan individu dan masyarakat bagi kemuliaan Tuhan.</li>
                    </ul>
                </div>


                <div class="col-md-3 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">Links</h6>
                    <hr class="bg-dark mb-4 mt-0 d-inline-block mx-auto" style="width: 50px; height: 2px">
                    <ul class="list-unstyled">
                        <li class="my-2"><a href="/Home/index">Home</a></li>
                        <li class="my-2"><a href="/Pages/Sistech">What is SISTECH?</a></li>
                        <li class="my-2"><a href="/Pages/OurPeople">Our People</a></li>
                        <li class="my-2"><a href="/Pages/History">History</a></li>
                        <li class="my-2"><a href="/Pages/Informatics">Informatics</a></li>
                        <li class="my-2"><a href="/Pages/SI">Information Systems</a></li>
                        <li class="my-2"><a href="/Pages/Photos">Photos</a></li>
                        <li class="my-2"><a href="/Pages/Videos">Gallery</a></li>
                        <li class="my-2"><a href="/Pages/VirtualTour">Virtual Tour</a></li>
                    </ul>
                </div>

                <div class="col-md-4 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">Contact</h6>
                    <hr class="bg-dark mb-4 mt-0 d-inline-block mx-auto" style="width: 75px; height: 2px">
                    <ul class="list-unstyled">
                        <li class="my-2"><i class="fas fa-home mr-3"></i>MH Thamrin Boulevard 1100, Klp. Dua, Kec. Klp. Dua, Tangerang, Banten 15811</li>
                        <li class="my-2"><i class="far fa-envelope mr-3"></i>undergraduate.admission@uph.edu</li>
                        <li class="my-2"><i class="far fa-envelope mr-3"></i>graduate.admission@uph.edu</li>
                        <li class="my-2"><i class="fas fa-phone mr-3"></i>(021) 5460901</li>
                        <li class="my-2"><i class="fas fa-phone mr-3"></i>(021) 5470901</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright text-center py-3">
            <p>&copy; Copyright <a href="#">UPH</a></p>
            <p>Designed By Marcellus Jonathan & Michael Anthony</p>
        </div>
    </footer>


    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

</body>

</html>