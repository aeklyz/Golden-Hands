<x-app-layout>
<div class="service-container">
    <div class="service-detail">
        <!-- Display service image -->
        <img src="{{ asset('services/' . $service->image_path) }}" alt="{{ $service->service_name }}" class="service-img">
        
        <div class="service-info">
            <!-- Service name and price -->
            <h1>{{ $service->service_name }}</h1>
            <h2>₱{{ number_format($service->price, 0) }} per hour</h2>

            <!-- Buttons -->
            <div class="buttons">
                <!-- Check if user is logged in for Book Now button -->
                @if(auth()->check())
                    <button class="book-now" onclick="window.location.href='{{ route('customer.checkout', ['id' => $service->id]) }}'">Book Now</button>
                @else
                    <button class="book-now" onclick="window.location.href='{{ route('login') }}'">Book Now</button>
                @endif
            </div>
            
            <!-- Description -->
            <h3>Description</h3>
            <p>{{ $service->description ?? 'No description available.' }}</p>
        </div>
    </div>
</div>
</x-app-layout>