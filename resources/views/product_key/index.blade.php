@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            Product keys
            <a href="{{route('product-keys.create')}}" class="btn btn-primary float-right"><i class="fa fa-fw fa-plus"></i>&nbsp;Add product keys</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <tr>
                    <th>ID</th>
                    <th>Key</th>
                    <th>Product</th>
                    <th>Actions</th>
                </tr>               
                @foreach ($productKeys as $productKey)
                    <tr>
                        <td>{{ $productKey->id }}</td>
                        <td><a href="{{ route('product-keys.edit', ['productKey' => $productKey]) }}">{{ $productKey->key }}</a></td>
                        <td>{{ $productKey->product->name }}</td>             
                        <td>
                            {!! Form::open(['route' => ['product-keys.destroy', $productKey->id], 'method' => 'delete']) !!}
                                <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-fw fa-trash"></i>&nbsp;Delete</button>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection