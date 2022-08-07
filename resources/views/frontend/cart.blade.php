@extends('layouts.front')

@section('title')
    my cart
@endsection


@section('content')
    <div class="container ">
        <table class="table mt-5">
            <tbody>
                @foreach ($cartitems as $item)
                    <tr>
                        <th scope="row"><img src="{{ asset('assets/uploads/products/' . $item->products->image) }}"
                                height="100px" width="100px" alt="image"></th>
                        <td><h6 class="mt-4">{{ $item->products->name }}</h6></td>
                        <td>
                            <div class="product_data">
                                <input type="hidden" class="prod_id" name="" value="{{ $item->prod_id }}">
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <button class="glyphicon glyphicon-minus decrement-btn btn btn-danger">-</button>
                                    </span>
                                    <input type="text" id="quantity" name="quantity qty-input"
                                        class=" input-number text-center qty-input" value="{{ $item->prod_qty }}" min="1"
                                        max="100" style="width:50px">
                                    <span class="input-group-btn">
                                        <button class="glyphicon glyphicon-plus incerment-btn btn btn-success">+</button>
                                    </span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <button class="btn btn-danger delete-cart-item" onclick="hamda({{ $item->prod_id }})"> <i class="fa fa-trash"></i> remove</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
