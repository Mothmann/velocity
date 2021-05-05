@props(['for'])

@error($for)
    <p {{ $attributes->merge(['class' => '']) }}>{{ $message }}</p>
@enderror
