<div>
    <!-- resources/views/products/index.blade.php -->

    <ul>
        @foreach ($products as $product)
            <li>{{ $product['title'] }} - ${{ $product['price'] }}</li>
        @endforeach
    </ul>

</div>
