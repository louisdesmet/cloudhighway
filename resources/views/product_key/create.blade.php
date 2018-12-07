@extends('layouts.app')

@section('content')
{!! Form::open(array('route' => 'product-keys.store')) !!}
    <div class="card">       
        <div class="card-header">
            Create product
            <button type="submit" class="btn btn-primary float-right"><i class="fa fa-fw fa-plus"></i>&nbsp;Create</button>
        </div>
        <div class="card-body">
            {{ Form::label('key', "Key") }}
            {{ Form::text('key', '', array('class'=>'form-control')) }}
            {{ Form::label('product', "Product") }}
            {!! Form::select('product', $products, null, ['class' => 'form-control']) !!}
        </div>       
    </div>
{!! Form::close() !!}
@endsection