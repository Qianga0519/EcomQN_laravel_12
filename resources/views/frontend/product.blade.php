@extends('layouts.app')


@section('content')
    <!-- Product Filters and Listing -->
    <section class="product-listing my-4">
        <div class="container-xl">
            <div class="row">
              @include('components.products/product-filter')
                <!-- Product Grid -->
                @include('components.products/product-grid')
            </div>
        </div>
    </section>

    <!-- Additional script for product page functionality -->
    <script>
        // Toggle view mode (grid/list)
        document.querySelectorAll('.view-options .btn').forEach(btn => {
            btn.addEventListener('click', function() {
                document.querySelectorAll('.view-options .btn').forEach(b => b.classList.remove('active'));
                this.classList.add('active');

                if (this.querySelector('.bi-list')) {
                    document.querySelector('.product-grid').classList.add('list-view');
                } else {
                    document.querySelector('.product-grid').classList.remove('list-view');
                }
            });
        });

        // Price range validation
        const minPrice = document.querySelector('.price-range input:first-of-type');
        const maxPrice = document.querySelector('.price-range input:last-of-type');

        minPrice.addEventListener('change', function() {
            if (parseInt(this.value) > parseInt(maxPrice.value)) {
                this.value = maxPrice.value;
            }
        });

        maxPrice.addEventListener('change', function() {
            if (parseInt(this.value) < parseInt(minPrice.value)) {
                this.value = minPrice.value;
            }
        });
    </script>
@endsection
