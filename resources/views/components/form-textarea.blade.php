@props([
    'name',
    'label',
    'value' => '',
])

<div class="form-group">
    <label for="{{ $name }}">{{ $label }}</label>

    <textarea
        name="{{ $name }}"
        id="{{ $name }}"
        class="form-control"
        {{ $attributes }}
    >{{ old($name, $value) }}</textarea>

    @error($name)
        <span class="error">{{ $message }}</span>
    @enderror
</div>