@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>add product</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('update-product/'. $products->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="">category</label>
                        <select class="form-select" name="name">
                            <option value="">{{ $products->category->name }}</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">name</label>
                        <input type="text" class="form-control" name="name" value="{{ $products->name }}">
                    </div>
                    <div class="col-md-6 mb-3" >
                        <label for="">slug</label>
                        <input type="text" class="form-control" name="slug" value="{{ $products->slug }}">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">small description</label>
                        <textarea name="small_description" rows="3" class="form-control">{{ $products->small_description }}</textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">description</label>
                        <textarea name="description" rows="3" class="form-control" >{{ $products->description }}</textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Original Price</label>
                        <input type="number" class="form-control" name="original_price" value="{{ $products->original_price }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">selling Price</label>
                        <input type="number" class="form-control" name="selling_pice" value="{{ $products->selling_pice }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Quantity</label>
                        <input type="number" class="form-control" name="qty" value="{{ $products->qty }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">tax</label>
                        <input type="number" class="form-control" name="tax" value="{{ $products->tax }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">status</label>
                        <input type="checkbox"  name="status" {{ $products->status =='1' ? 'checked':'' }}>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Trending</label>
                        <input type="checkbox"  name="trending" name="status" {{ $products->status =='1' ? 'checked':'' }}>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">meta title</label>
                        <input rows="3" class="form-control" name="meta_tittle" value="{{ $products->meta_tittle }}">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">meta keyword</label>
                        <textarea rows="3" class="form-control" name="meta_keywords">{{ $products->meta_keywords }}</textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">meta_descripe</label>
                        <textarea  rows="3" class="form-control" name="meta_description">{{ $products->meta_description }}</textarea>
                    </div>
                    <div class="col-md-12">
                        @if($products->image)
                        <img src="{{ asset('assets/uploads/products'.$products->image) }}" alt="">
                        @endif
                        <input  rows="3" class="form-control" type="file" name="image" >
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn-btn-primary" class="form-control">submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
