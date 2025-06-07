<section class="category-page">
    <div class="container" style="margin-top: 50px">
        <div class="category-header">
            <h1 class="category-title">{{ $category->name }}</h1>
            <p class="category-description">{{ $category->description }}</p>
            <div class="search-container">
                <div class="search-bar">
                    <input
                        type="text"
                        id="searchInput"
                        placeholder="Поиск по названию..."
                        class="search-input"
                    >
                    <button
                        class="search-button"
                        id="searchButton"
                    >
                        <svg viewBox="0 0 24 24">
                            <path d="M15.5 14h-.79l-.28-.27a6.5 6.5 0 0 0 1.48-5.34c-.47-2.78-2.79-5-5.59-5.34a6.505 6.505 0 0 0-7.27 7.27c.34 2.8 2.56 5.12 5.34 5.59a6.5 6.5 0 0 0 5.34-1.48l.27.28v.79l4.25 4.25c.41.41 1.08.41 1.49 0 .41-.41.41-1.08 0-1.49L15.5 14zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div class="no-results" id="noResults" style="display: none;">
            <svg viewBox="0 0 24 24">
                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm-3.5-6.5l7.99-7.99-1.41-1.41-7.99 7.99 1.41 1.41z"/>
            </svg>
            <p id="noResultsText"></p>
        </div>

        <ul class="product-grid" id="productGrid">
            @foreach ($products as $product)
                <li class="product-grid__item">
                    <article class="product-card">
                        <div class="product-card__inner">
                            <div class="product-card__image-wrapper" style="width: 100%; height: 300px">
                                <img src="{{ url('storage', $product->image) }}" style="object-fit: contain" class="product-card__image" alt="{{ $product->name }}" loading="lazy">
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
                </li>
            @endforeach
        </ul>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('searchInput');
        const searchButton = document.getElementById('searchButton');
        const noResults = document.getElementById('noResults');
        const noResultsText = document.getElementById('noResultsText');
        const productGrid = document.getElementById('productGrid');
        const productItems = productGrid.querySelectorAll('.product-grid__item');

        function performSearch() {
            const searchTerm = searchInput.value.trim().toLowerCase();
            let hasResults = false;

            if (searchTerm === '') {
                productItems.forEach(item => {
                    item.style.display = '';
                });
                noResults.style.display = 'none';
                return;
            }

            productItems.forEach(item => {
                const title = item.querySelector('.product-card__title').textContent.toLowerCase();
                if (title.includes(searchTerm)) {
                    item.style.display = '';
                    hasResults = true;
                } else {
                    item.style.display = 'none';
                }
            });

            if (!hasResults) {
                noResultsText.textContent = `Ничего не найдено по запросу "${searchInput.value}"`;
                noResults.style.display = 'flex';
            } else {
                noResults.style.display = 'none';
            }
        }

        searchButton.addEventListener('click', performSearch);

        searchInput.addEventListener('keydown', function(e) {
            if (e.key === 'Enter') {
                performSearch();
            }
        });
    });
</script>
