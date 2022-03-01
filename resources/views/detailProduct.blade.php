@extends('layouts.main')

@section('container')
    <!-- ADDRESS -->
    <section class="container" id="container">
        <div class="d-flex mb-5 p-0 mt-0">
            <i class="fa-solid fa-house my-auto mx-2"></i>
            <i class="fa-solid fa-angle-right my-auto mx-2"></i>
            Product&service
            <i class="fa-solid fa-angle-right my-auto mx-2"></i>
            Lorem ipsum dolor sit amet consectetur adipisicing.
        </div>
    <!-- END ADDRESS -->
    
    <!-- PRODUCT -->
        <div class="sidebar row">
            <div class="col-md-8">
                <h3 class="text-center mb-3">Rumah Joglo Jakarta Barat</h3>
                <div class="d-flex justify-content-between">
                    <div class="d-flex">
                        <p>Kategori :</p>
                        <p class="Rumah border border-dark ms-1">Rumah</p>
                    </div>
                    <div>
                        <i class="fa-solid fa-share-nodes p-2 m-auto border border-dark"></i>
                    </div>
                </div>
                <img src="asset/img/c2.jpg" alt="" class="rounded">
                <div class="row mt-2 justify-content-between">
                    <div class="col-md-1 my-auto ">
                        <i class="fa-solid fa-angle-left"></i>
                    </div>
                    <div class="col">
                    <img src="asset/img/c2.jpg" alt="" width="50">
                    </div>
                    <div class="col">
                        <img src="asset/img/c2.jpg" alt="" width="50">
                    </div>
                    <div class="col">
                    <img src="asset/img/c2.jpg" alt="" width="50">
                    </div>
                    <div class="col">
                        <img src="asset/img/c2.jpg" alt="" width="50">
                    </div>
                    <div class="col-md-1 my-auto text-end">
                        <i class="fa-solid fa-angle-right"></i>
                    </div>
                </div>
                
                <div class="deskripsi mt-5">
                    <h4>Deskripsi</h4>
                    <p class="border border-dark py-3 px-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam aliquid, iusto odio dolorem, earum, velit asperiores saepe sit libero alias excepturi reprehenderit voluptatibus odit at aliquam quod sequi. Nulla praesentium adipisci ea aliquid, ad labore distinctio facilis aliquam necessitatibus quia odit, laboriosam deleniti reprehenderit quod minus? Beatae expedita maxime impedit doloremque eos voluptate consequatur dolorum dolorem recusandae laborum, modi quod non quisquam nesciunt a, blanditiis explicabo perferendis nulla quis facere eveniet soluta! Dolores accusamus repellendus enim facilis distinctio vero at libero odit earum eaque? Optio ipsam, minus fuga voluptas eveniet libero magni! Repellendus porro fuga voluptatibus totam maxime consequatur in?
                    </p>
                </div>
                <div class="detail mt-5">
                    <h4>Detail</h4>
                    <div class="border border-dark p-2">
                        <div class="row p-3">
                            <div class="col-6">
                                <p class="mb-1 mt-2">Kategori</p>
                                <h6 class="mb-0">Rumah</h6>
                                <hr class="mt-0">
                            </div>
                            <div class="col-6">
                                <p class="mb-1 mt-2">Luas Bangunan</p>
                                <h6 class="mb-0">9m x 5m (45m2)</h6>
                                <hr class="mt-0">
                            </div>
                            <div class="col-6">
                                <p class="mb-1 mt-2">Harga Per m2</p>
                                <h6 class="mb-0">Rp.45000000</h6>
                                <hr class="mt-0">
                            </div>
                            <div class="col-6">
                                <p class="mb-1 mt-2">Tahun Pembuatan</p>
                                <h6 class="mb-0">2017</h6>
                                <hr class="mt-0">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fasilitas mt-5">
                    <h4>Fasilitas</h4>
                    <div class="border border-dark p-2">
                        <div class="row p-3">
                            <div class="col-6 d-flex py-1">
                                <i class="fa-solid fa-bed"></i>
                                <h6 class="ms-3">2 kamar tidur</h6>
                            </div>
                            <div class="col-6 d-flex py-1">
                                <i class="fa-solid fa-person-swimming"></i>
                                <h6 class="ms-3">1 Kolam renang dewasa</h6>
                            </div>
                            <div class="col-6 d-flex py-1">
                                <i class="fa-brands fa-pagelines"></i>
                                <h6 class="ms-3">taman seluas 5m2</h6>
                            </div>
                            <div class="col-6 d-flex py-1">
                                <i class="fa-solid fa-utensils"></i>
                                <h6 class="ms-3">1 ruang makan</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">            
                <form action="" class="position-sticky sticky-top buatform">
                    <div class="row border g-2 border-light justify-content-center p-2 rounded shadow ">
                        <h5 class="text-center py-3">Form request</h5>
                        <div class="col-md-12">
                            <input type="text" class="form-control" placeholder="Nama">
                        </div>
                        <div class="col-md-12">
                            <input type="text" class="form-control" placeholder="E-mail">
                        </div>
                        <div class="col-md-12">
                            <input type="text" class="form-control" placeholder="No whatsapp">
                        </div>
                        <div class="col-md-12">
                            <input type="text" class="form-control" placeholder="Enter whatsapp">
                        </div>
                        <div class="col-md-12">
                            <textarea name="" id="" cols="30" rows="5" class="form-control"
                                placeholder="Masukan Pesan"></textarea>
                        </div>
                        <div class="col-md-12 d-grid py-2">
                            <button class="btn btn-primary">Request View</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- END PRODUCT -->

    <!-- MAPS -->
    <section class="container mt-0 pt-0" id="container">
        <div class="maps">
            <h3 class="text-center mt-0 pt-0 mb-4">Lokasi</h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.2735402105336!2d109.24713381405701!3d-7.434954175311657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655ea49d9f9885%3A0x62be0b6159700ec9!2sTelkom%20Institute%20of%20Technology%20Purwokerto!5e0!3m2!1sen!2sid!4v1645769991631!5m2!1sen!2sid" class="w-100" height="450" style="border: 2px solid black;" allowfullscreen="" loading="lazy"></iframe>
            
        </div>
    </section>
    <!-- END MAPS -->


    <!-- PRODUCT LAIN-->
    <section class="p-0">
        <div class="container-fluid" id="container">
                    <h4>Produk Lainnya</h4>
                    <hr>
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
@endsection