@extends('layouts.app')

@section('content')
    {!! Form::model($product, array('route' => array('products.update', $product->id), 'method' => 'PUT')) !!}
        <div class="card"> 
            <div class="card-header">
                Edit product
                <button style="display: block;" type="submit" class="btn btn-primary float-right"><i class="fa fa-fw fa-plus"></i>&nbsp;Update</button>
            </div>
            <div class="card-body">
                {{ Form::label('name', "Name") }}
                {{ Form::text('name', null, array('class'=>'form-control')) }}
            </div>
        </div>
   {!! Form::close() !!}
@endsection