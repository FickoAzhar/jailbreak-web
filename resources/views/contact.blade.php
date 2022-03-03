@extends('layouts.main')

@section('container')
    <!-- CONTACT US -->
    <section class="contact" id="contact">
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <h2 class="fw-bold mb-5">Contact Us</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="contact-item d-flex mb-3">
                        <div class="icon fs-4 text-color">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="text ms-3">
                            <h3 class="fs-5">Email</h3>
                            <p class="text-muted">thedreamsproperty@example.com</p>
                        </div>
                    </div>
                    <div class="contact-item d-flex mb-3">
                        <div class="icon fs-4 text-color">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="text ms-3">
                            <h3 class="fs-5">Phone</h3>
                            <p class="text-muted">(+625) 85 211 232 332</p>
                        </div>
                    </div>
                    <div class="contact-item d-flex mb-3">
                        <div class="icon fs-4 text-color">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="text ms-3">
                            <h3 class="fs-5">Address</h3>
                            <p class="text-muted">Jl. Prapanca R No.43 Blok IV Kemang, Jakarta Selatan</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="contact-form">
                        <form action="">
                            <div class="row">
                                <div class="col-lg-6 mb-4">
                                    <input type="text" placeholder="Isi nama Anda" class="form-control form-control-lg fs-6 border-0 shadow-sm">
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <input type="text" placeholder="Isi email Anda" class="form-control form-control-lg fs-6 border-0 shadow-sm">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 mb-4">
                                    <input type="text" placeholder="Subjek pesan" class="form-control form-control-lg fs-6 border-0 shadow-sm">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 mb-4">
                                    <textarea rows="5" type="text" placeholder="Isi pesan" class="form-control form-control-lg fs-6 border-0 shadow-sm"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="" col-lg-12>
                                    <button type="submit" class="btn btn-dark px-5">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END CONTACT US -->

    

@endsection