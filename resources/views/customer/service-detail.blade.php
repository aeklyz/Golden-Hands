<x-app-layout>
<div class="container">
    <div class="service-detail">
        <!-- Display service image -->
        <img src="{{ $service->service_name }}.jpg" alt="{{ $service->service_name }}">
        
        <div class="service-info">
            <!-- Service name and price -->
            <h1>{{ $service->service_name }}</h1>
            <h2>₱{{ number_format($service->price, 2) }}</h2>

            <!-- Buttons -->
            <div class="buttons">
                <!-- Check if user is logged in for Book Now button -->
                @if(auth()->check())
                    <button class="book-now" onclick="window.location.href='{{ route('checkout') }}'">Book Now</button>
                @else
                    <button class="book-now" onclick="window.location.href='{{ route('login') }}'">Book Now</button>
                @endif
                <button class="add-to-cart">Add to Cart</button>
            </div>
            
            <!-- Description -->
            <h3>Description</h3>
            <p>{{ $service->description ?? 'No description available.' }}</p>
        </div>
    </div>
</div>
</x-app-layout>