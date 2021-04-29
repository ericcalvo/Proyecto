@props(['value'])

<label class="prueba" {{ $attributes->merge(['class' => 'block font-medium text-sm text-white-700']) }}>
    {{ $value ?? $slot }}
</label>

<style>
    .prueba {
        color: white;
    }
</style>