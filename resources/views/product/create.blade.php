@extends('layouts.app')

@section('content')
{!! Form::open(['route' => 'products.store', 'files' => true]) !!}
<div class="card">       
    <div class="card-header">
        Create product
        <button type="submit" class="btn btn-primary float-right"><i class="fa fa-fw fa-plus"></i>&nbsp;Create</button>
    </div>
    <div class="card-body">
        <div class="form-group">
            {{ Form::label('name', "Name") }}
            {{ Form::text('name', '', array('class'=>'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('category', "Category") }}
            {!! Form::select('category', $categories, null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {{ Form::label('image', "Image") }}
            {{ Form::file('image') }}
        </div> 
    </div>       
</div>
{!! Form::close() !!}
@endsection