<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/icon/css/all.css">
    <link rel="stylesheet" href="asset/css/style.css">
   

    <title>The Dream's Property</title>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">

    <!-- NAVBAR -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3 bgnav">
        <div class="container">
            <a class="navbar-brand" href="home.html">
                <img class="logo" src="asset/img/logo-white.png" height="50" alt=""> 
                <!-- <h6 class="my-auto text-white">The Dreams <br> Property</h6> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/product">Product & Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item dropdown">
                        <!-- <a class="nav-link" href="#">Find Us</a> -->
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Find Us
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="about.html">About Us</a></li>
                            <li><a class="dropdown-item" href="contact.html">Contact Us</a></li>
                        </ul>
                    </li>

                    <!--
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li> 
                    -->

                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-globe"></i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="home.html">Indonesia</a></li>
                          <li><a class="dropdown-item" href="home.html">English</a></li>
                        </ul>
                    </li>
                </ul>
                <button class="btn ms-lg-3 py-0 rounded-pill">
                    Login
                </button>
            </div>
        </div>
    </nav>
    <!-- END NAVBAR -->

    <!-- ABOUT US -->
    <section>
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-7 my-auto">
                    <h1>The Dream's property</h1>
                    <p class="text-align-justify">Kami menyediakan beberapa pilihan kategori properti yang terbaik. Pilihlah properti yang menurut anda terbaik bagi anda dan keluarga. Untuk mencari properti sesuai lokasi yang anda inginkan, silahkan lakukan pencarian dibawah ini.
                    </p>

                    <!-- search bar 1 -->
                    <form class="d-flex py-2">
                        <input class="form-control rounded-pill" type="search" placeholder="Cari produk properti" aria-label="Search">
                    </form>

                    <!-- search bar 2 -->
                    <!-- <div class="input-group flex-nowrap py-3">
                        <span class="input-group-text"><i class="fa-solid fa-search"></i></span>
                        <input type="text" class="form-control" placeholder="Cari produk properti" aria-label="Username" aria-describedby="addon-wrapping">
                    </div> -->

                </div>
                <div class="col-lg-5">
                    <img src="asset/img/about.jpg" alt="" class="rounded" width="100%">
                </div>
            </div>
        </div>
    </section>
    <!-- END ABOUT US -->

    <!-- FEATURES -->
    <section id="container-bg">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-0 py-4 mx-auto text-center">
                <div class="feature col">
                    <h2>100%</h2>
                    <p>Client Satisfaction</p>
                </div>
                <div class="feature col">
                    <h2>55ha</h2>
                    <p>Land Area</p>
                </div>
                <div class="feature col">
                    <h2>60%</h2>
                    <p>Open Space</p>
                </div>
                <div class="feature col">
                    <h2>43km</h2>
                    <p>Jogging Track</p>
                </div>
            </div>
        </div>
    </section>
    <!-- END FEATURES -->

    <!-- PRODUCT -->
    <section>
        <div class="container-fluid" id="container">
            <div class="row mb-5">
                <div class="col-md-8 mx-auto text-center">
                    <h1>Produk yang kami tawarkan</h1>
                    <p>Lorem ipsum dolor sit amet consectetur nisi necessitatibus repellat distinctio eveniet eaque fuga in cumque optio consectetur harum vitae debitis sapiente praesentium aperiam aut</p>
                </div>
            </div>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                    <div class="card shadow-sm product position-relative overflow-hidden">
                        <img src="asset/img/c1.jpg" alt="">
                        <div class="caption position-absolute top-0 left-0 mt-2 ms-0">
                            <p class="text-white text-center px-3 py-1 my-auto"><i class="fa-solid fa-house-chimney-user"></i>  Rumah</p>
                        </div>
                        <div class="card-body">
                            <h3 class="card-text fs-6">Rumah Joglo Jakarta Barat</h3>
                            <p class="card-text fs-6">Jl. Prapanca R No.43 Blok IV Jakarta Barat
                                <br>2 <i class="fa-solid fa-bed"></i> 2 <i class="fa-solid fa-hot-tub"></i> 45 m2
                                <br>Rp 5.000.000.000</p>
                            <div class="d-flex">
                                <div class="btn-group mx-auto w-100">
                                    <button type="button" class="btn btn-sm btn-outline-secondary rounded-pill">Beli</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                  <div class="card shadow-sm product position-relative overflow-hidden">
                        <img src="asset/img/c2.jpg" alt="">
                        <div class="caption position-absolute top-0 left-0 mt-2 ms-0">
                            <p class="text-white text-center px-3 py-1 my-auto"><i class="fa-solid fa-house-chimney-user"></i>  Rumah</p>
                        </div>
                        <div class="card-body">
                            <h3 class="card-text fs-6">Rumah Joglo Jakarta Barat</h3>
                            <p class="card-text fs-6">Jl. Prapanca R No.43 Blok IV Jakarta Barat
                                <br>2 <i class="fa-solid fa-bed"></i> 2 <i class="fa-solid fa-hot-tub"></i> 45 m2
                                <br>Rp 5.000.000.000</p>
                            <div class="d-flex">
                                <div class="btn-group mx-auto w-100">
                                    <button type="button" class="btn btn-sm btn-outline-secondary rounded-pill">Beli</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm product position-relative overflow-hidden">
                        <img src="asset/img/c3.jpg" alt="">
                        <div class="caption position-absolute top-0 left-0 mt-2 ms-0">
                            <p class="text-white text-center px-3 py-1 my-auto"><i class="fa-solid fa-hotel"></i>  Apartement</p>
                        </div>
                        <div class="card-body">
                            <h3 class="card-text fs-6">Rumah Joglo Jakarta Barat</h3>
                            <p class="card-text fs-6">Jl. Prapanca R No.43 Blok IV Jakarta Barat
                                <br>2 <i class="fa-solid fa-bed"></i> 2 <i class="fa-solid fa-hot-tub"></i> 45 m2
                                <br>Rp 5.000.000.000</p>
                            <div class="d-flex">
                                <div class="btn-group mx-auto w-100">
                                    <button type="button" class="btn btn-sm btn-outline-secondary rounded-pill">Beli</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                  <div class="card shadow-sm product position-relative overflow-hidden">
                        <img src="asset/img/c4.jpg" alt="">
                        <div class="caption position-absolute top-0 left-0 mt-2 ms-0">
                            <p class="text-white text-center px-3 py-1 my-auto"><i class="fa-solid fa-warehouse"></i>  Villa</p>
                        </div>
                        <div class="card-body">
                            <h3 class="card-text fs-6">Rumah Joglo Jakarta Barat</h3>
                            <p class="card-text fs-6">Jl. Prapanca R No.43 Blok IV Jakarta Barat
                                <br>2 <i class="fa-solid fa-bed"></i> 2 <i class="fa-solid fa-hot-tub"></i> 45 m2
                                <br>Rp 5.000.000.000</p>
                            <div class="d-flex">
                                <div class="btn-group mx-auto w-100">
                                    <button type="button" class="btn btn-sm btn-outline-secondary rounded-pill">Beli</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm product position-relative overflow-hidden">
                        <img src="asset/img/c5.jpg" alt="">
                        <div class="caption position-absolute top-0 left-0 mt-2 ms-0">
                            <p class="text-white text-center px-3 py-1 my-auto"><i class="fa-solid fa-hotel"></i>  Apartement</p>
                        </div>
                        <div class="card-body">
                            <h3 class="card-text fs-6">Rumah Joglo Jakarta Barat</h3>
                            <p class="card-text fs-6">Jl. Prapanca R No.43 Blok IV Jakarta Barat
                                <br>2 <i class="fa-solid fa-bed"></i> 2 <i class="fa-solid fa-hot-tub"></i> 45 m2
                                <br>Rp 5.000.000.000</p>
                            <div class="d-flex">
                                <div class="btn-group mx-auto w-100">
                                    <button type="button" class="btn btn-sm btn-outline-secondary rounded-pill">Beli</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                  <div class="card shadow-sm product position-relative overflow-hidden">
                        <img src="asset/img/c6.jpg" alt="">
                        <div class="caption position-absolute top-0 left-0 mt-2 ms-0">
                            <p class="text-white text-center px-3 py-1 my-auto"><i class="fa-solid fa-hotel"></i>  Apartement</p>
                        </div>
                        <div class="card-body">
                            <h3 class="card-text fs-6">Rumah Joglo Jakarta Barat</h3>
                            <p class="card-text fs-6">Jl. Prapanca R No.43 Blok IV Jakarta Barat
                                <br>2 <i class="fa-solid fa-bed"></i> 2 <i class="fa-solid fa-hot-tub"></i> 45 m2
                                <br>Rp 5.000.000.000</p>
                            <div class="d-flex">
                                <div class="btn-group mx-auto w-100">
                                    <button type="button" class="btn btn-sm btn-outline-secondary rounded-pill">Beli</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <nav aria-label="Page navigation example">
            <ul class="pagination mt-4 justify-content-center">
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                </a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">4</a></li>
              <li class="page-item"><a class="page-link" href="#">5</a></li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                </a>
              </li>
            </ul>
          </nav>
    </section>
    <!-- END PRODUCT -->

    <!-- FOOTER -->
    <footer>
        <div class="footer-top py-5 bg-dark">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-4">
                        <!-- <img class="logo" src="" alt=""> -->
                        <h5 class="text-white">The Dream's property</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto atque, quae voluptas magni officia nihil doloribus impedit fuga quisquam excepturi?</p>
                        <div class="social-icons d-flex">
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram-square"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <h5 class="text-white">Brand</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">About</a></li>
                            <li><a href="#">Product</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Find Us</a></li>
                            <li><a href="#">About us</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2">
                        <h5 class="text-white">More</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">FAQ's</a></li>
                            <li><a href="#">Privacy & Policy</a></li>
                            <li><a href="#">Warranty</a></li>
                            <li><a href="#">Procedure</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 contact">
                        <h5 class="text-white">Contact</h5>
                        <ul class="list-unstyled">
                            <li><i class="fa-solid fa-location-dot"></i> Jl. Prapanca R No.43 Blok IV Kemang, Jakarta Selatan</li>
                            <li><i class="fa-solid fa-envelope"></i> contact@dreamsproperty.com</li>
                            <li><i class="fa-solid fa-square-phone"></i> (+625) 85 211 232 332</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom py-3">
            <div class="container">
                <p class="mb-0 text-center">Copyright © 2022 The Dream’s Property | All Rights Reserved | Owned by PT. Cipta Anugerah Laksana</p>
            </div>
        </div>
    </footer>
    <!-- END FOOTER -->
    
    <script src="asset/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>