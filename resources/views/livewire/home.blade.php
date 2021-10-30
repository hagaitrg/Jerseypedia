<div class="container">

    <!-- Banner Slider -->
    <div class="banner">
        <img src="{{ asset('img/slider/slider1.png') }}" alt="">
    </div>

    <!-- Pilih liga -->
    <section class="pilih-liga mt-4">
        <h3><strong>Pilih Liga</strong></h3>
        <div class="row mt-4">
            @foreach ($ligas as $liga)
            <div class="col">
                <div class="card shadow">
                    <div class="card-body text-center">
                        <img src="{{ asset('img/liga/')}}/{{$liga->gambar}}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <!-- Best product -->
    <section class="best-product mt-5 mb-5">
        <h3><strong>Best Products</strong></h3>
        <div class="row mt-4">
            @foreach ($products as $product)
            <div class="col">
                <div class="card">
                    <div class="card-body text-center">
                        <img src="{{ asset('img/jersey/')}}/{{$product->gambar}}" alt="" class="img-fluid">
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <h5><strong>{{ $product->nama}}</strong></h5>
                                <h5 class="text-muted">Rp {{ number_format($product->harga)}}</p>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <a href="#" class="btn btn-dark btn-block">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</div>