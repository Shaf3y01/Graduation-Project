@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="text-uppercase">Products page</h4>
            <hr>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Category</th>
                        <th>Name</th>
                        <th>Original Price</th>
                        <th>Selling Price</th>
                        <th>image</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->category->name }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->original_price }}</td>
                        <td>{{ $item->selling_pice }}</td>
                        <td>
                            <img src="{{ asset('assets/uploads/products/'.$item->image) }}" class="cate-image" alt="image here">
                        </td>
                        <td>
                            <a href="{{ url('edit-product/'.$item->id) }}" class="btn btn-primary btm-sm">edit</a>
                            <a href="{{ url('delete-product/'.$item->id) }}" class="btn btn-danger btm-sm">delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection


