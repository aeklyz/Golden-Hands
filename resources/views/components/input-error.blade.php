@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => '']) }}>
        @foreach ((array) $messages as $message)
            <p5>{{ $message }}</p5>
        @endforeach
    </ul>
@endif
