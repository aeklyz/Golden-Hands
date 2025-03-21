<x-app-layout>
    <div class="container service-catalog">
        @foreach(['regular_massage', 'signature_massage', 'add_on'] as $group)
            <div class="service-section">
                <h2>{{ ucfirst(str_replace('_', ' ', $group)) }}</h2>
                <div class="grid">
                    @foreach($services->where('service_group', $group) as $service)
                        <div class="service-card">
                            <!-- Dynamic URL for service detail page -->
                            <a href="{{ url('service-detail', [strtolower(str_replace(' ', '-', $service->service_name))]) }}">
                                <img src="{{ asset('services/' . $service->image_path) }}" alt="{{ $service->service_name }}">
                                <p>{{ $service->service_name }}</p>
                                <p>₱{{ number_format($service->price, 2) }}/hr</p>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
    @include('layouts.chatbot')
</x-app-layout>