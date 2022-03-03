@extends('layouts.main')

@section('container')
    <!-- ABOUT US -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 my-auto">
                    <iframe width="100%" height="300" src="https://www.youtube.com/embed/p1-mvDVWj7Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="col-lg-6 my-auto">
                    <span class="text-color">Learn more about us</span>
                    <h1>The Dream's property</h1>
                    <div class="about-five-tab">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link text-color active" data-bs-toggle="tab" data-bs-target="#nav-who" type="button" role="tab" aria-controls="nav-who" aria-selected="true">Who We Are</button>
                                <button class="nav-link text-color" data-bs-toggle="tab" data-bs-target="#nav-vision" type="button" role="tab" aria-controls="nav-vision" aria-selected="false">Our Vision</button>
                                <button class="nav-link text-color" data-bs-toggle="tab" data-bs-target="#nav-history" type="button" role="tab" aria-controls="nav-history" aria-selected="false">Our History</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-who" role="tabpanel" aria-labelledby="nav-who-tab">
                                <p>Quibusdam ut omnis consequuntur aspernatur. Eveniet excepturi veritatis laboriosam vitae. Expedita mollitia velit temporibus et accusamus. Cupiditate similique accusantium beatae voluptatem quo reprehenderit tenetur nostrum. <br> Voluptatum ut est et dolor omnis temporibus fugiat. Culpa reprehenderit quos voluptatem modi quae libero explicabo omnis. Perferendis nam ea voluptas sed fuga distinctio quis.</p>
                            </div>
                            <div class="tab-pane fade" id="nav-vision" role="tabpanel" aria-labelledby="nav-vision-tab">
                                <p>Quibusdam ut omnis consequuntur aspernatur. Eveniet excepturi veritatis laboriosam vitae. Expedita mollitia velit temporibus et accusamus. Cupiditate similique accusantium beatae voluptatem quo reprehenderit tenetur nostrum. <br> Voluptatum ut est et dolor omnis temporibus fugiat. Culpa reprehenderit quos voluptatem modi quae libero explicabo omnis. Perferendis nam ea voluptas sed fuga distinctio quis.</p>
                            </div>
                            <div class="tab-pane fade" id="nav-history" role="tabpanel" aria-labelledby="nav-history-tab">
                                <p>Quibusdam ut omnis consequuntur aspernatur. Eveniet excepturi veritatis laboriosam vitae. Expedita mollitia velit temporibus et accusamus. Cupiditate similique accusantium beatae voluptatem quo reprehenderit tenetur nostrum. <br> Voluptatum ut est et dolor omnis temporibus fugiat. Culpa reprehenderit quos voluptatem modi quae libero explicabo omnis. Perferendis nam ea voluptas sed fuga distinctio quis.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END ABOUT US -->

    <!-- FAQ -->
    <section class="faq py-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 pb-3">
                    <div class="section-title text-center">
                        <h6 class="text-color">FAQ</h6>
                        <h2>Frequently Asked Question</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Accordion Item #1
                        </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</strong> Fugiat repellat facere soluta. Quibusdam sequi in debitis quos perferendis est commodi nostrum molestias aliquam odio, unde voluptate voluptates eius reiciendis. Corporis!
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Accordion Item #2
                        </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</strong> Fugiat repellat facere soluta. Quibusdam sequi in debitis quos perferendis est commodi nostrum molestias aliquam odio, unde voluptate voluptates eius reiciendis. Corporis!
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Accordion Item #3
                        </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</strong> Fugiat repellat facere soluta. Quibusdam sequi in debitis quos perferendis est commodi nostrum molestias aliquam odio, unde voluptate voluptates eius reiciendis. Corporis!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END FAQ -->

    <!-- OUR PARTNERS -->
    <section>
        <div class="container">
            <h6 class="text-center text-color">Meet Our Partners</h6>
            <h2 class="text-center fw-bold">Our Awesome Partners</h2>
            <div class="row row-cols-1 row-cols-lg-3 py-2 text-center">
                <div class="feature col py-2">
                    <img width="150" src="asset/img/partners/google.png" alt="">
                </div>
                <div class="feature col py-2">
                    <img width="150" src="asset/img/partners/facebook.png" alt="">
                </div>
                <div class="feature col py-2">
                    <img width="150" src="asset/img/partners/instagram.png" alt="">
                </div>
                <div class="feature col py-2">
                    <img width="150" src="asset/img/partners/youtube.png" alt="">
                </div>
                <div class="feature col py-2">
                    <img width="150" src="asset/img/partners/twitter.png" alt="">
                </div>
                <div class="feature col">
                    <img width="150" src="asset/img/partners/discord.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- END OUR PARTNERS -->

@endsection
