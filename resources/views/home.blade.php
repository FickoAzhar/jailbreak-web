@extends('layouts.main')

@section('container')
    <!-- HERO -->
    <div class="hero vh-100 d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mx-auto text-center">
                    <img src="/asset/img/logo-image.png" width="200">
                    <h1 class="text-white">The Dream's Property</h1>
                    <p class="text-white my-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque quia
                        sequi eius. Quas, totam aliquid. Repudiandae reiciendis vel excepturi ipsa voluptate dicta!</p>
                    <div class="row mt-5">
                        <a href="#" class="col btn mx-2 btn-outline-light">Request Viewing</a>
                        <a href="#" class="col btn mx-2 btn-outline-light ms-auto">Play Video</a>
                        <a href="#" class="col btn mx-2 btn-outline-light">360 virtual tour</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- END HERO -->

    <!-- ABOUT US -->
    <section>
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 mx-auto text-center">
                    <h6 class="text-color">TENTANG KAMI</h6>
                    <h1>Profile The Dream's property</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7 my-auto py-2 text-end">
                    <p class="text-align-justify">The Dream's Property merupakan projek kolaborasi berskala internasional antara PT Meikarta Group Pte. Ltd., dan PT. Cipta Anugerah. Tiga company besar membangun international standard golden resort living di lokasi paling strategis di Kemang, dengan konsep “Golden Living by The Mountain”. The Dream's Property adalah development properti paling eksklusif dan terbaik di Indonesia.
                    </p>
                    <button type="button" class="mt-2 btn btn-primary">Read More</button>
                </div>
                <div class="col-lg-5">
                    <img src="/asset/img/about.jpg" alt="" class="rounded" width="100%">
                </div>
            </div>
        </div>
    </section>
    <!-- END ABOUT US -->

    <!-- ADVANTAGES -->
    <section class="advantages row w-100 py-0 bg-light">
        <div class="col-lg-6 col-img"></div>
        <div class="col-lg-6 py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <h1>A HOME DESIGNED FOR YOU</h1>
                        <p>The Dream’s Property merupakan kawasan Premium yang dikelilingi oleh keindahan pegunungan serta udara yang sejuk. Kawasan pengembangan yang telah di rancang dengan sangat baik untuk membangun sebuah hunian keluarga Anda.</p>

                        <div class="feature d-flex mt-5">
                            <div class="iconbox me-3">
                                <i class="fa-solid fa-eye"></i>
                            </div>
                            <div>
                                <h5>kelebihan 1</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil perspiciatis illo </p>
                            </div>
                        </div>
                        <div class="feature d-flex">
                            <div class="iconbox me-3">
                                <i class="fa-solid fa-hand-holding-dollar"></i>
                            </div>
                            <div>
                                <h5>kelebihan 2</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil perspiciatis illo </p>
                            </div>
                        </div>
                        <div class="feature d-flex">
                            <div class="iconbox me-3">
                                <i class="fa-solid fa-circle-down"></i>
                            </div>
                            <div>
                                <h5>kelebihan 3</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil perspiciatis illo </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END ADVANTAGES -->

    <!-- CATALOG -->
    <section>
        <div class="container-fluid" id="container">
            <div class="row mb-5">
                <div class="col-md-8 mx-auto text-center">
                    <h6 class="text-color">KATALOG</h6>
                    <h1>Produk yang kami tawarkan</h1>
                    <p>Lorem ipsum dolor sit amet consectetur nisi necessitatibus repellat distinctio eveniet eaque fuga
                        in cumque optio consectetur harum vitae debitis sapiente praesentium aperiam aut</p>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-lg-4 col-sm-6">
                    <div class="catalog position-relative overflow-hidden">
                        <img src="/asset/img/c1.jpg" alt="">
                        <div class="caption position-absolute top-0 left-0 mt-2 ms-0">
                            <p class="text-white text-center px-3 py-1 my-auto"><i class="fa-solid fa-house-chimney-user"></i>  Rumah</p>
                        </div>
                        <div class="overlay position-absolute top-0 left-0 w-100 h-100 d-flex p-4 align-items-end">
                            <div>
                                <h3 class="text-white fs-6">Rumah Joglo Jakarta Barat</h3>
                                <p class="text-white fs-10">Jl. Prapanca R No.43 Blok IV Jakarta Barat</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="catalog position-relative overflow-hidden">
                        <img src="/asset/img/c2.jpg" alt="">
                        <div class="caption position-absolute top-0 left-0 mt-2 ms-0">
                            <p class="text-white text-center px-3 py-1 my-auto"><i class="fa-solid fa-house-chimney-user"></i>  Rumah</p>
                        </div>
                        <div class="overlay position-absolute top-0 left-0 w-100 h-100 d-flex p-4 align-items-end">
                            <div>
                                <h3 class="text-white fs-6">Rumah Joglo Jakarta Barat</h3>
                                <p class="text-white fs-10">Jl. Prapanca R No.43 Blok IV Jakarta Barat</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="catalog position-relative overflow-hidden">
                        <img src="/asset/img/c3.jpg" alt="">
                        <div class="caption position-absolute top-0 left-0 mt-2 ms-0">
                            <p class="text-white text-center px-3 py-1 my-auto"><i class="fa-solid fa-hotel"></i>  Apartement</p>
                        </div>
                        <div class="overlay position-absolute top-0 left-0 w-100 h-100 d-flex p-4 align-items-end">
                            <div>
                                <h3 class="text-white fs-6">Rumah Joglo Jakarta Barat</h3>
                                <p class="text-white fs-10">Jl. Prapanca R No.43 Blok IV Jakarta Barat</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="catalog position-relative overflow-hidden">
                        <img src="/asset/img/c4.jpg" alt="">
                        <div class="caption position-absolute top-0 left-0 mt-2 ms-0">
                            <p class="text-white text-center px-3 py-1 my-auto"><i class="fa-solid fa-warehouse"></i>  Villa</p>
                        </div>
                        <div class="overlay position-absolute top-0 left-0 w-100 h-100 d-flex p-4 align-items-end">
                            <div>
                                <h3 class="text-white fs-6">Rumah Joglo Jakarta Barat</h3>
                                <p class="text-white fs-10">Jl. Prapanca R No.43 Blok IV Jakarta Barat</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="catalog position-relative overflow-hidden">
                        <img src="/asset/img/c5.jpg" alt="">
                        <div class="caption position-absolute top-0 left-0 mt-2 ms-0">
                            <p class="text-white text-center px-3 py-1 my-auto"><i class="fa-solid fa-hotel"></i>  Apartement</p>
                        </div>
                        <div class="overlay position-absolute top-0 left-0 w-100 h-100 d-flex p-4 align-items-end">
                            <div>
                                <h3 class="text-white fs-6">Rumah Joglo Jakarta Barat</h3>
                                <p class="text-white fs-10">Jl. Prapanca R No.43 Blok IV Jakarta Barat</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="catalog position-relative overflow-hidden">
                        <img src="/asset/img/c6.jpg" alt="">
                        <div class="caption position-absolute top-0 left-0 mt-2 ms-0">
                            <p class="text-white text-center px-3 py-1 my-auto"><i class="fa-solid fa-hotel"></i>  Apartement</p>
                        </div>
                        <div class="overlay position-absolute top-0 left-0 w-100 h-100 d-flex p-2 align-items-end">
                            <div>
                                <h3 class="text-white fs-6">Rumah Joglo Jakarta Barat</h3>
                                <p class="text-white fs-10">Jl. Prapanca R No.43 Blok IV Jakarta Barat</p>
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
    <!-- END CATALOG -->

    <!-- BLOG -->
    <section class="bg-light pt-5" id="container">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 mx-auto text-center">
                    <h6 class="text-color">BLOG</h6>
                    <h1>Latest News From The Blog</h1>
                    <p>Lorem ipsum dolor sit amet consectetur nisi necessitatibus repellat distinctio eveniet eaque fuga in cumque optio consectetur harum vitae debitis sapiente praesentium aperiam aut</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="blog-post card-effect">
                        <img src="/asset/img/blog1.jpg" alt="">
                        <h5 class="mt-4"><a href="#">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident, aliquid! Provident, aliquid!</a></h5>
                        <p>Rabu, 23 Februari 2022</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="blog-post card-effect">
                        <img src="/asset/img/blog2.jpg" alt="">
                        <h5 class="mt-4"><a href="#">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident, aliquid!</a></h5>
                        <p>Rabu, 23 Februari 2022</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="blog-post card-effect">
                        <img src="/asset/img/blog3.jpg" alt="">
                        <h5 class="mt-4"><a href="#">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident, aliquid!</a></h5>
                        <p>Rabu, 23 Februari 2022</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="blog-post card-effect">
                        <img src="/asset/img/blog4.jpg" alt="">
                        <h5 class="mt-4"><a href="#">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident, aliquid!</a></h5>
                        <p>Rabu, 23 Februari 2022</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- END BLOG -->
@endsection
