@extends('layouts.front')

@section('title' . $products->name)

@section('content')
    <div class="container mt-5">
        <div class="card product_data">
            <div class="card-header">
                Featured
            </div>
            <div class="row">
                <div class="col-md-3">
                    <img src="{{ asset('assets/uploads/products/' . $products->image) }}" alt="">
                </div>
                <div class="col-md-9">
                    <input type="hidden" value="{{ $products->id }}" class="prod_id">
                    <div class="card-body">
                        <h5 class="card-title">{{ $products->name }}</h5>
                        <p class="card-text">{{ $products->description }}</p>
                        <button href="#" class="btn btn-primary addToCart-btn"> add to cart<i
                                class="fa fa-cart-shopping"></i></button>
                        <button href="#" class="btn btn-success">add to wishlist</button>
                        <div class="input-group mt-5 ">
                            <span class="input-group-btn">

                                <button class="glyphicon glyphicon-minus decrement-btn btn btn-danger">-</button>

                            </span>
                            <input type="text" id="quantity" name="quantity " class=" input-number text-center qty-input"
                                value="1" min="1" max="100">
                            <span class="input-group-btn">

                                <button class="glyphicon glyphicon-plus incerment-btn btn btn-success">+</button>

                            </span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection



