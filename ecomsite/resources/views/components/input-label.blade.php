@props(['value'])

<label {{ $attributes->merge(['class' => 'col-sm-2 col-form-label text-dark']) }}>
    {{ $value ?? $slot }}
</label>
