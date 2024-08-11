@props(['value'])

<label
    {{ $attributes->merge(['class' => 'block font-medium text-[20px] font-sans font-medium text-black dark:text-black']) }}>
    {{ $value ?? $slot }}
</label>
