@extends("landing.app")

@section("content")

<main class="py-5">
    <section class="pricing pt-80" id="pricing">
        <div class="container">
            <div class="row clearfix">
                <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                    <div class="heading text-center">
                        <h2 class="heading-title">ALL BOOKS</h2>
                        <p class="heading-desc">"Ilmu yang sejati seperti barang berharga lainnya, tidak bisa diperoleh
                            dengan mudah. Ia harus diusahakan, dipelajari, dipikirkan, dan lebih dari itu, harus selalu disertai doa"
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-md-6 col-lg-3">
                    <div class="card" style="width: 18rem;">
                        <a href=""><img src="assets/images/ebook/1.jpg" class="card-img-top" alt="..."></a>
                        <div class="card-body">
                            <h6 class="card-text text-center">
                                Heart String<br>
                                <small class="text-muted">By Rahmawati</small>
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-6 col-lg-3">
                    <div class="card" style="width: 18rem;">
                        <a href=""><img src="assets/images/ebook/2.jpg" class="card-img-top" alt="..."></a>
                        <div class="card-body">
                          <h6 class="card-text text-center">
                                Online to In Person<br>
                                <small class="text-muted">By Wati</small>
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-6 col-lg-3">
                    <div class="card" style="width: 18rem;">
                        <a href=""><img src="assets/images/ebook/3.jpg" class="card-img-top" alt="..."></a>
                        <div class="card-body">
                          <h6 class="card-text text-center">
                                Modern Spaces<br>
                                <small class="text-muted">By Rahma</small>
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-6 col-lg-3">
                    <div class="card" style="width: 18rem;">
                        <a href=""><img src="assets/images/ebook/5.jpg" class="card-img-top" alt="..."></a>
                        <div class="card-body">
                            `<h6 class="card-text text-center">
                                Algoritma<br>
                                <small class="text-muted">By Kiara Novita</small>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</main>

@endsection
