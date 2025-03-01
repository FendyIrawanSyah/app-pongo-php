<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="src/asset/style.css">

    <link href="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-2.2.2/datatables.min.css" rel="stylesheet">
    <title>Pongo Studio</title>
</head>
<body>
    
    <!--navbar-->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Pongo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0" style="font-size:20px; font-weight:20px">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Gallery</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                    </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Foto</a></li>
                    <li><a class="dropdown-item" href="#">Video</a></li>
                    <li><a class="dropdown-item" href="#">Wedding</a></li>
                </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <!--end navbar-->
    
    <!--background carousel-->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="src/img/bg1.jpg" class="d-block w-100" style="heigth:100px !important;" alt="image not found">
            </div>
            <div class="carousel-item">
                <img src="src/img/bg2.jpg" class="d-block w-100" style="heigth:100px !important;" alt="image not found">
            </div>
            <div class="carousel-item">
                <img src="src/img/bg3.jpg" class="d-block w-100" style="heigth:100px !important;" alt="image not found">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!--end background carousel-->
    <br>
    <!--About me-->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">About Me</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel turpis id urna consectetur sagittis. Integer vel nisl fermentum, ultrices metus id, tristique velit. In malesuada lectus vel neque consectetur, at faucibus metus scelerisque. Sed et consectetur lectus. Sed vel turpis id urna consectetur sagittis. Integer vel nisl fermentum, ultrices metus id, tristique velit. In malesuada lectus vel neque consectetur, at faucibus metus scelerisque. Sed et consectetur lectus.</p>
            </div>
        </div>
    </div>
    <!--end About me-->
    <br>
    <!-- Gallery-->
    <div class="container">
        <div class="row">
            <h4 class="text-center">All Gallery</h4>
            <div class="col-md-3">
                <div class="card text-start">
                    <img class="card-img-top" src="src/img/card1.jpg" alt="Title" />
                    <div class="card-body">
                        <h4 class="card-title">Title</h4>
                        <p class="card-text">Body</p>
                    </div>
                </div> 
            </div>
            <div class="col-md-3">
                <div class="card text-start">
                    <img class="card-img-top" src="src/img/card2.jpg" alt="Title" />
                    <div class="card-body">
                        <h4 class="card-title">Title</h4>
                        <p class="card-text">Body</p>
                    </div>
                </div> 
            </div>
            <div class="col-md-3">
                <div class="card text-start">
                    <img class="card-img-top" src="src/img/card3.jpg" alt="Title" />
                    <div class="card-body">
                        <h4 class="card-title">Title</h4>
                        <p class="card-text">Body</p>
                    </div>
                </div> 
            </div>
            <div class="col-md-3">
                <div class="card text-start">
                    <img class="card-img-top" src="src/img/card4.jpg" alt="Title" />
                    <div class="card-body">
                        <h4 class="card-title">Title</h4>
                        <p class="card-text">Body</p>
                    </div>
                </div> 
            </div>
        </div>
    </div>
    <!--end Gallery-->
    <br>
    <!--Location-->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="text-center">Location</h4>
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96714.68291250926!2d-74.05953969406828!3d40.75468158321536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2588f046ee661%3A0xa0b3281fcecc08c!2sManhattan%2C%20Nowy%20Jork%2C%20Stany%20Zjednoczone!5e0!3m2!1spl!2spl!4v1672242259543!5m2!1spl!2spl"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!--end Location-->
    <br>
    <!-- Footer -->
    <footer class="text-center text-lg-start bg-body-tertiary text-muted">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
            <span>Tetap terhubung dengan sosial media kami</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-google"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-linkedin"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-github"></i>
            </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                <!-- Content -->
                <h6 class="text-uppercase fw-bold mb-4">
                    <i class="fas fa-gem me-3"></i>Pongo Studio
                </h6>
                <p>
                    Studio Foto dan Video Profesional dengan pengalaman lebih dari ratusan client yang sudah menggunakan jasa kami
                </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">
                    Products
                </h6>
                <p>
                    <a href="#!" class="text-reset">Foto</a>
                </p>
                <p>
                    <a href="#!" class="text-reset">Video</a>
                </p>
                <p>
                    <a href="#!" class="text-reset">Weeding</a>
                </p>
                <p>
                    <a href="#!" class="text-reset">Profile Company</a>
                </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">
                    Useful links
                </h6>
                <p>
                    <a href="#!" class="text-reset">Pricing</a>
                </p>
                <p>
                    <a href="#!" class="text-reset">Settings</a>
                </p>
                <p>
                    <a href="#!" class="text-reset">Orders</a>
                </p>
                <p>
                    <a href="#!" class="text-reset">Help</a>
                </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                <p><i class="fas fa-home me-3"></i> Pangkalambung, Kalimantan Tengah, Indonesia</p>
                <p>
                    <i class="fas fa-envelope me-3"></i>
                    pongostudio@mail.co.id
                </p>
                <p><i class="fas fa-phone me-3"></i> 0821 3380 1636</p>
                <p><i class="fas fa-print me-3"></i> + 62 234 567 89</p>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2021 Copyright:
            <a class="text-reset fw-bold" href="https://pongostudio.com/">Pongo Stuido.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
    

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-2.2.2/datatables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>   
    <script type="text/javascript" src="control/action.js"></script>
</body>
</html>