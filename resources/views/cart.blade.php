@extends('layouts.master')

@section('title', 'Shopping Cart')

@section('extra-css')
    <link rel="stylesheet" href="{{ URL::to('css/app2.css') }}">
    <link rel="stylesheet" href="{{ URL::to('css/responsive2.css') }}">
@endsection

@section('content')

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb_area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h2>Shopping Cart</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <div class="cart-section container">
        <div>
            <h2> 3 items in Shopping Cart</h2>

            <div class="cart-table">
                <div class="cart-table-row">
                <div class="cart-table-row-left">
                    <a href="#"><img src="{{URL::to('img/product-img/product-2.jpg')}}" class="cart-table-img"></a>
                    <div class="cart-item-details">
                        <div class="cart-table-item"><a href="#">Redmi 4X</a></div>
                        <div class="cart-table-description">Handphon murah tapi bagus</a></div>
                    </div>
                </div>
                <div class="cart-table-row-right">
                    <div class="cart-table-actions">
                        <a href="#">Remove</a><br>
                        <a href="#">Save for Later</a>
                    </div>
                    <div>
                        <select class="quantity">
                            <option selected="">1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div>Rp. 2.400.000</div>
                </div>
            </div>

            <a href="#" class="have-code">Have a code?</a>

            <div class="have-code-container">
                <form action="#">
                    <input type="text">
                    <button type="submit" class="button button-plain">Apply</button>
                </form>
            </div>

            <div class="cart-totals">
                <div class="cart-totals-left">
                Shipping is free
                </div>

                <div class="cart-totals-right">
                    <div>
                        Subtotal<br>
                        Tax<br>
                        <span class="cart-totals-total">Total</span>
                    </div>
                    <div class="cart-totals-subtotal">
                        Rp. 1.400.000<br>
                        Rp. 2.800.000<br>
                        <span class="cart-totals-total">Rp 4.200.000</span>
                    </div>
                </div>
            </div>

            <div class="cart-buttons">
                <a href="#" class="button">Continue Shopping</a>
                <a href="/checkout" class="button-primary">Proceed to Checkout</a>
            </div>

            <h2>2 item saved for later</h2>

            <div class="saved-for-later cart-table">
                <div class="cart-table-row">
                <div class="cart-table-row-left">
                    <a href="#"><img src="{{URL::to('img/product-img/product-2.jpg')}}" class="cart-table-img"></a>
                    <div class="cart-item-details">
                        <div class="cart-table-item"><a href="#">Redmi 4X</a></div>
                        <div class="cart-table-description">Handphon murah tapi bagus</a></div>
                    </div>
                </div>
                <div class="cart-table-row-right">
                    <div class="cart-table-actions">
                        <a href="#">Remove</a><br>
                        <a href="#">Save for Later</a>
                    </div>
                    <!-- <div>
                        <select class="quantity">
                            <option selected="">1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div> -->
                    <div>Rp. 2.400.000</div>
                </div>
            </div>
        </div>
    </div>

@endsection