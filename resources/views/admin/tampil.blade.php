@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-14">
            <div class="card">
                <div class="card-header">Data Product
                    <a href="#" class="btn btn-small btn-success">Tambah Data Product</a>
                </div>
                <br>
                @if(session('status'))
                    <div class="alert alert-success" role="alert">
                        {{session('status')}}
                    </div>
                @endif
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Details</th>
                                <th>Price</th>
                                <th>Category</th>
                                <th>Description</th>
                                <th>Foto 1</th>
                                <th>Foto 2</th>
                                <th>Foto 3</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr>
                                <td>{{$product->id}}</td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->slug}}</td>
                                <td>{{$product->details}}</td>
                                <td>@currency($product->price)</td>
                                <td>
                                    
                                </td>
                                <td>{{$product->description}}</td>
                                <td>
                                    <img src="{{asset('storage/product'.$product->foto1)}}" width="60" height="100">
                                </td>
                                <td>
                                    <img src="{{asset('storage/product'.$product->foto2)}}" width="60" height="100">
                                </td>
                                <td>
                                    <img src="{{asset('storage/product'.$product->foto3)}}" width="60" height="100">
                                </td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
