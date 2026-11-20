<strong style="font-size:12px;">Facility Level:</strong>
@foreach (['Hospital', 'Clinic / Health Centre'] as $facilityLevel)
    <label style="display:block;font-size:13px;margin-bottom:5px;">
        <input type="checkbox" name="hospitalLevel" value="{{ $facilityLevel }}">
        {{ $facilityLevel }} (<span id="count-{{ preg_replace('/[^a-zA-Z0-9]/', '-', $facilityLevel) }}">0</span>)
    </label>
@endforeach
