@extends('layouts.app')

@section('content')

<nav class="productNav">
    <div class="container">
        <ul>
            <li><a href="">Alle</a></li>
            <li><a href="">Microsoft Cloud</a></li>
            <li><a href="">Storage & Backup</a></li>
            <li><a href="">Security</a></li>
            <li><a href="">VOIP</a></li>
            <li><a href="">Cloud Server / VPS</a></li>
            <li><a href="">Domains & Web</a></li>
            <li><a href="">Tools</a></li>
            <li><a href="">Service</a></li>
            <li><a href="">Training</a></li>
        </ul>
    </div>
</nav>
<div class="container detailsContainer">
    <div class="left">
        <h2>{{ $product->name }}</h2>
        <div>{!! $product->description !!}</div>  
        <div class="form-group mt-5">
            {{ Form::label('language', "Language") }}
            {!! Form::select('language', $product->languages->pluck('name', 'id'), null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="right">
        <img src="{{ asset('img/products/' . $product->image) }}">
    </div>
</div>
@endsection
