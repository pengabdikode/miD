@extends('layouts.master')

@section('title','Home')

@section('content')

    <!-- ##### CTA Area Start ##### -->
    <div class="cta-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-content bg-img background-overlay" style="background-image: url(img/bg-img/bg_welcome11.jpg);">
                        <div class="h-100 d-flex align-items-center justify-content-end">
                            <div class="cta--text">
                                <h6>Sale -10%</h6>
                                <h2>Xiaomi Poco F1</h2>
                                <a href="#" class="btn essence-btn">Beli Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### CTA Area End ##### -->

    <!-- ##### New Arrivals Area Start ##### -->
    <section class="new_arrivals_area section-padding-80 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Produk Terpopuler</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="popular-products-slides owl-carousel">

                        <!-- Single Product -->
                        @foreach($products as $product)
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="{{asset('storage/product/'.$product->foto1)}}" alt="">
                                <!-- Hover Thumb -->
                                <a href="{{route('shop.show',$product->slug)}}">
                                <img class="hover-img" src="{{asset('storage/product/'.$product->foto2)}}" alt="">
                                </a>
                                <!-- Favourite -->
                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description text-center">
                                <a href="{{route('shop.show',$product->slug)}}">
                                    <h6>{{ $product->name}}</h6>
                                </a>
                                <div class="product-price">@currency($product->price)</div>

                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn">Tambah Ke Keranjang</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center">
            <a href="{{route('shop.index')}}" class="btn essence-btn">Tampil Lebih Banyak</a>
        </div>
    </section>
    <!-- ##### New Arrivals Area End ##### -->

    <div>
        <img src="img/bg-img/bg_welcome13.jpg" alt="">
    </div>

@endsection
