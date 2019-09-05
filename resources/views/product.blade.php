@extends('layouts.master')

@section('title', $product->name)

@section('content')
    <!-- ##### Single Product Details Area Start ##### -->
    <section class="single_product_details_area d-flex align-items-center">

        <!-- Single Product Thumb -->
        <div class="single_product_thumb clearfix">
            <div class="product_thumbnail_slides owl-carousel">
                <img src="{{asset('storage/'.$product->foto1)}}" alt="">
                <img src="{{asset('storage/'.$product->foto2)}}" alt="">
                <img src="{{asset('storage/'.$product->foto3)}}" alt="">
            </div>
        </div>

        <!-- Single Product Description -->
        <div class="single_product_desc clearfix">
            <a href="cart.html">
                <h2>{{ $product->name }}</h2>
            </a>
            <p class="product-price"><span class="old-price">@currency($product->price)</span>@currency($product->price)</p>
            <p class="product-desc">{!! $product->description !!}</p>

            <!-- Form -->
            <form class="cart-form clearfix" method="post">
                <!-- Select Box -->
                <div class="select-box d-flex mt-50 mb-30">
                    <select name="select" id="productSize" class="mr-5">
                        <option value="value">Ukuran: XL</option>
                        <option value="value">Ukuran: L</option>
                        <option value="value">Ukuran: M</option>
                        <option value="value">Ukuran: S</option>
                    </select>
                    <select name="select" id="productColor">
                        <option value="value">Warna: Hitam</option>
                        <option value="value">Warna: Putih</option>
                        <option value="value">Warna: Merah</option>
                        <option value="value">Warna: Biru</option>
                    </select>
                </div>
                <!-- Cart & Favourite Box -->
                <div class="cart-fav-box d-flex align-items-center">
                    <!-- Cart -->
                    <button type="submit" name="addtocart" value="5" class="btn essence-btn">Tambah Keranjang</button>
                    <!-- Favourite -->
                    <div class="product-favourite ml-4">
                        <a href="#" class="favme fa fa-heart"></a>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- ##### Single Product Details Area End ##### -->
@endsection