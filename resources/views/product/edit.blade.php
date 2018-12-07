@extends('layouts.app')

@section('content')   
    {!! Form::model($product, array('route' => array('products.update', $product->id), 'method' => 'PUT', 'files' => true)) !!}
        <div class="card"> 
            <div class="card-header">
                Edit product
                <button style="display: block;" type="submit" class="btn btn-primary float-right"><i class="fa fa-fw fa-plus"></i>&nbsp;Update</button>
            </div>
            <div class="card-body">
                <div class="form-group">
                    {{ Form::label('name', "Name") }}
                    {{ Form::text('name', null, array('class'=>'form-control')) }}
                </div>
                <div class="form-group">
                    {{ Form::label('category', "Category") }}
                    {!! Form::select('category', $categories, $product->category->id, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {{ Form::label('description', "Description") }}
                    {{ Form::textarea('description', null, array('class'=>'form-control')) }}
                </div>
                <div class="form-group">
                    {{ Form::label('image', "Image") }}
                    {{ Form::file('image') }}
                </div> 
            </div>
        </div>
   {!! Form::close() !!} 
@endsection