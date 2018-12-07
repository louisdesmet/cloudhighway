@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            Products
            <a href="{{route('products.create')}}" class="btn btn-primary float-right"><i class="fa fa-fw fa-plus"></i>&nbsp;Add product</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Category</th>                    
                    <th>Actions</th>
                </tr>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td><a href="{{ route('products.edit', ['product' => $product]) }}">{{ $product->name }}</a></td>              
                        <td>{{ $product->category->name }}</td>              
                        <td>
                            {!! Form::open(['route' => ['products.destroy', $product->id], 'method' => 'delete']) !!}
                                <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-fw fa-trash"></i>&nbsp;Delete</button>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection