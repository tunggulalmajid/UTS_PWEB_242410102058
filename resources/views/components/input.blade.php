@props([
    'label' => null,
    'text' => 'text',
    'name' => null
])

<div>
    <p class="font-bold text-start">{{$label}}</p>
    <input type="{{$text}}" name="{{$name}}" {{ $attributes->merge([
    'class' => 'bg-secondary p-2 rounded-lg text-white'
    ]) }} @required(true) >
</div>