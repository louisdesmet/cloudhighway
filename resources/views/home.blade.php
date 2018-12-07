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
<div class="container productsContainer"> 
    @foreach($products as $product)
    <div class="products">
        <a href="{{ route('product-details', ['product' => $product]) }}">
            <img src="{{ asset('img/products/' . $product->image) }}">
            <h2>{{ $product->name }}</h2>
        </a>        
    </div>
    @endforeach
</div>
@endsection
