@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Edit category</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('update-category/'.$category->id) }}" method="Post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="">name</label>
                        <input type="text" class="form-control" name="name" value="{{ $category->name }}">
                    </div>
                    <div class="col-md-6 mb-3" >
                        <label for="">slug</label>
                        <input type="text" class="form-control" name="slug" value="{{ $category->slug }}">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">description</label>
                        <textarea name="description" rows="3" class="form-control">{{ $category->description }}</textarea>
                    </div>
                    <div class="col-md-6 mb-3" >
                        <label for="">status</label>
                        <input type="checkbox"  name="status" {{ $category->status =='1' ? 'checked':'' }}>
                    </div>
                    <div class="col-md-6 mb-3" >
                        <label for="">popular</label>
                        <input type="checkbox"  name="popular" {{ $category->popular =='1' ? 'checked':'' }}>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">meta title</label>
                        <input name="meta_title" rows="3" class="form-control" value="{{ $category->meta_title }}">
                    </div>
                    <div class = "col-md-12 mb-3">
                        <label for="">meta keyword</label>
                        <textarea name="meta_keyword" rows="3" class="form-control">{{ $category->meta_keyword }}</textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">meta_descripe</label>
                        <textarea name="meta_descripe" rows="3" class="form-control">{{ $category->meta_descripe}}</textarea>
                    </div>
                    @if ($category->image)
                        <img src="{{ asset('assets/uploads/category/'.$category->image) }}" alt="image">
                    @endif
                    <div class="col-md-12">
                        <input name="image" rows="3" class="form-control" type="file">
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn-btn-primary">submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


@endsection


