@extends('layouts.master')

@section('title','Contact')

@section('content')
    <div class="contact-area d-flex align-items-center">

        <div class="google-map">
            <div id="googleMap"></div>
        </div>

        <div class="contact-info">
            <h2>Keranjang Belanja</h2>
            <p>Ceritanya ini bakal di isi sama belanjaan</p>

            <div class="contact-address mt-50">
                <p><span>address:</span> 10 Suffolk st Soho, London, UK</p>
                <p><span>telephone:</span> +12 34 567 890</p>
                <p><a href="mailto:contact@essence.com">contact@essence.com</a></p>
            </div>
        </div>

    </div>
@endsection