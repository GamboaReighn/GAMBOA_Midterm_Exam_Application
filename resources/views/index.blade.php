<div>
    <!-- resources/views/products/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>{{ ucfirst($theme) }} Products</h1>

    <ul>
        @foreach ($products as $product)
            <li>{{ $product['title'] }} - ${{ $product['price'] }}</li>
        @endforeach
    </ul>
@endsection
</div>
