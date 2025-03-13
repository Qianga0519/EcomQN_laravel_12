@extends('layouts.app')
@section('title', 'product-detail')
@section('content')
    <!-- Breadcrumb Navigation -->
    @include('components.breadcrumb')
    @include('components.product-detail.detail')
    <script>
        // Color selection
        document.querySelectorAll('.color-option').forEach(color => {
            color.addEventListener('click', function() {
                // Remove active class from all colors
                document.querySelectorAll('.color-option').forEach(c => {
                    c.classList.remove('active');
                });

                // Add active class to selected color
                this.classList.add('active');

                // Update selected color text
                document.querySelector('.selected-color').textContent = this.getAttribute('data-color');
            });
        });

        // Storage selection
        document.querySelectorAll('.storage-options .btn').forEach(btn => {
            btn.addEventListener('click', function() {
                // Remove active class from all storage options
                document.querySelectorAll('.storage-options .btn').forEach(b => {
                    b.classList.remove('active');
                });

                // Add active class to selected storage
                this.classList.add('active');
            });
        });

        // Quantity controls
        const quantityInput = document.getElementById('quantity');
        const decreaseBtn = document.getElementById('decrease-quantity');
        const increaseBtn = document.getElementById('increase-quantity');

        decreaseBtn.addEventListener('click', function() {
            const currentValue = parseInt(quantityInput.value);
            if (currentValue > 1) {
                quantityInput.value = currentValue - 1;
            }
        });

        increaseBtn.addEventListener('click', function() {
            const currentValue = parseInt(quantityInput.value);
            const maxValue = parseInt(quantityInput.getAttribute('max'));
            if (currentValue < maxValue) {
                quantityInput.value = currentValue + 1;
            }
        });
    </script>
@endsection
