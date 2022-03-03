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

    

@endsection