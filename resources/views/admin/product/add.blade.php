@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>add product</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('insert-product') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <select class="form-select" name="cate_id">
                            <option value="">Select Category</option>
                            @foreach ($category as $item)
                                <option value="{{ $item->id}}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="col-md-6 mb-3" >
                        <label for="">slug</label>
                        <input type="text" class="form-control" name="slug">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">small description</label>
                        <textarea name="small_description" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">description</label>
                        <textarea name="description" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Original Price</label>
                        <input type="number" class="form-control" name="original_price">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">selling Price</label>
                        <input type="number" class="form-control" name="selling_pice">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Quantity</label>
                        <input type="number" class="form-control" name="qty">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">tax</label>
                        <input type="number" class="form-control" name="tax">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">status</label>
                        <input type="checkbox"  name="status">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Trending</label>
                        <input type="checkbox"  name="trending">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">meta title</label>
                        <input name="meta_tittle" rows="3" class="form-control">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">meta keyword</label>
                        <textarea name="meta_keywords" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">meta_descripe</label>
                        <textarea name="meta_description" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="col-md-12">
                        <input name="image" rows="3" class="form-control" type="file">
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn-btn-primary" class="form-control">submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
