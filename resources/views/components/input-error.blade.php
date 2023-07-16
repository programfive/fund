@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'mt-2 text-sm text-negative-600']) }}>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
