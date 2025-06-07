@props(['product'])
<article class="product-card">
    <div class="product-card__inner">
        <div class="product-card__image-wrapper" style="width: 100%; height: 300px">
            <img src="{{ url('storage', $product->image) }}" style="object-fit: contain"  class="product-card__image" alt="{{ $product->name }}" loading="lazy">
        </div>

        <div class="product-card__content">
            <h3 class="product-card__title">{{ $product->name }}</h3>
            <p class="product-card__description">{{ Str::limit($product->description, 60) }}</p>

            <div class="product-card__footer">
                <div class="product-card__price">{{ number_format((float)$product->price, 0, '', ' ') }} ₽</div>
            </div>
        </div>
    </div>
</article>
