@extends('frontend.layouts.app')
@section('title', 'Cart')
@section('content')
    <!-- Cart Section -->
    @include('frontend.components.cart.list-item')
    <!-- End of cart section -->

    <script>
        // Add event listeners to all quantity control buttons
        document.addEventListener('DOMContentLoaded', function() {
            // Find all decrease buttons
            document.querySelectorAll('.decrease-btn').forEach(button => {
                button.addEventListener('click', function() {
                    const input = this.nextElementSibling;
                    let value = parseInt(input.value);
                    if (value > 1) {
                        input.value = value - 1;
                    }
                });
            });

            // Find all increase buttons
            document.querySelectorAll('.increase-btn').forEach(button => {
                button.addEventListener('click', function() {
                    const input = this.previousElementSibling;
                    let value = parseInt(input.value);
                    input.value = value + 1;
                });
            });
        });
    </script>
@endsection
