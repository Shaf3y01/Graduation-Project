@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>add category</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('insert-category') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="">name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="col-md-6 mb-3" >
                        <label for="">slug</label>
                        <input type="text" class="form-control" name="slug">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">description</label>
                        <textarea name="description" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="col-md-6 mb-3" >
                        <label for="">status</label>
                        <input type="checkbox"  name="status">
                    </div>
                    <div class="col-md-6 mb-3" >
                        <label for="">popular</label>
                        <input type="checkbox"  name="popular">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">meta title</label>
                        <input name="meta_title" rows="3" class="form-control">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">meta keyword</label>
                        <textarea name="meta_keyword" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">meta_descripe</label>
                        <textarea name="meta_descripe" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="col-md-12">
                        <input name="image" rows="3" class="form-control" type="file">
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


@endsection


