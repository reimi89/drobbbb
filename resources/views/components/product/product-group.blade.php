@props(['categories', 'products' => null])
<ul class="product-grid">
    @if(isset($products))
        <!-- Режим с поиском -->
        @foreach ($products as $product)
            <li class="product-grid__item">
                <x-product.product-card :product="$product" />
            </li>
        @endforeach
    @else
        <!-- Оригинальный режим (без поиска) -->
        @foreach ($categories as $category)
            @foreach ($category->products as $product)
                <li class="product-grid__item">
                    <x-product.product-card :product="$product" />
                </li>
            @endforeach
        @endforeach
    @endif
</ul>
