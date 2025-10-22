@props([
    'href' => null,
    'title' => null
])

@if ($href)
    <a href="{{ $href }}" {{ $attributes->merge([
        'class' => 'bg-secondary p-2 rounded-lg hover:opacity-85 hover:scale-100 inline-block text-center'
        ]) }}>
        <p class="text-white font-header">{{ $title }}</p>
    </a>
@else
    <button type="submit" {{ $attributes->merge([
        'class' => 'bg-secondary p-2 rounded-lg hover:opacity-85 hover:scale-100'
        ]) }}>
        <p class="text-white font-poppins font-bold">{{ $title }}</p>
    </button>
@endif

