<select name="{{ $name }}" id="{{ $name }}" class="form-control" {{ $required ? 'required' : '' }}>
    <option value="">{{ $placeholder }}</option>
    @foreach ($options as $option => $optionValue)
        <option value="{{ $key ? $optionValue : $option }}">
            {{ $optionValue }}
        </option>
    @endforeach
</select>
